<?php

namespace App\Http\Controllers;

use App\Http\Requests\IdeaRequest;
use App\Models\Idea;
use App\Models\IdeaItem;
use App\Models\IdeaImage;
use App\Models\IdeaReference;
use App\Models\Category;
use App\Models\CoverageRanges;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class IdeaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ideas = Idea::orderBy('created_at', 'desc')->get();
        return view('idea.list',compact('ideas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('idea.record',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(IdeaRequest $request)
    {
        $idea = Idea::create([
            'user_id' => auth()->id(),
            'category_id' => $request->category_id,
            'title' => $request->title,
            'content' => $request->content,
        ]);
    
        if ($request->has('Items')) {
            foreach ($request->Items as $Item) {
                IdeaItem::create([
                    'idea_id' => $idea->id,
                    'url' => $Item['url'] ?? null,
                    'content' => $Item['content'] ?? null,
                ]);
            }
        }
        if ($request->has('references')) {
            foreach ($request->references as $reference) {
                IdeaReference::create([
                    'idea_id' => $idea->id,
                    'url' => $reference['url'] ?? null,
                    'content' => $reference['content'] ?? null,
                ]);
            }
        }
    
        
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('idea_images', 'public');
            $imageUrl = Storage::url($imagePath);

            IdeaImage::create([
                'idea_id' => $idea->id,
                'image_path' => $imageUrl,
            ]);
        }
    
        return redirect()->route('idea.create')->with('success', 'アイデアを登録しました！');
    }
    

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $idea = Idea::with(['IdeaItems', 'IdeaImages', 'IdeaReferences'])->find($id);
        return view('idea.detail',compact('idea'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $categories = Category::all();
        $idea = Idea::with(['IdeaItems', 'IdeaImages', 'IdeaReferences'])->findOrFail($id);
        return view('idea.edit',compact('categories','idea'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(IdeaRequest $request, $id)
    {
        // 対象のアイディアを取得
        $idea = Idea::findOrFail($id);
    
        // 基本情報の更新
        $idea->update([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'content' => $request->content,
        ]);
    
        // Items（アイディアアイテム）の更新
        if ($request->has('Items')) {
            // 古いデータを削除（必要なら条件付きで削除）
            $idea->items()->delete();
    
            foreach ($request->Items as $Item) {
                IdeaItem::create([
                    'idea_id' => $idea->id,
                    'url' => $Item['url'] ?? null,
                    'content' => $Item['content'] ?? null,
                ]);
            }
        }
    
        // References（参照データ）の更新
        if ($request->has('references')) {
            // 古いデータを削除（必要なら条件付きで削除）
            $idea->references()->delete();
    
            foreach ($request->references as $reference) {
                IdeaReference::create([
                    'idea_id' => $idea->id,
                    'url' => $reference['url'] ?? null,
                    'content' => $reference['content'] ?? null,
                ]);
            }
        }
    
        // 画像の更新
        if ($request->hasFile('image')) {
            // 古い画像を削除（必要に応じて）
            if ($idea->images->isNotEmpty()) {
                foreach ($idea->images as $image) {
                    Storage::disk('public')->delete($image->image_path); // ファイル削除
                    $image->delete(); // レコード削除
                }
            }
    
            // 新しい画像を登録
            $imagePath = $request->file('image')->store('idea_images', 'public');
            $imageUrl = Storage::url($imagePath);
    
            IdeaImage::create([
                'idea_id' => $idea->id,
                'image_path' => $imageUrl,
            ]);
        }
    
        return redirect()->route('idea.edit', $id)->with('success', 'アイディアを更新しました！');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $idea = Idea::findOrFail($id);
        $idea->delete();
        return redirect()
            ->route('ida$idea.index')
            ->with('status','ブックマークを削除しました。');
    }

    /**
 * 
 */
    public function myidea()
    {
        $userId = Auth::id();

        $ideas = Idea::where('user_id', $userId)
            ->orderBy('created_at', 'desc')                   
            ->get();

        return view('idea.myidea', compact('ideas'));
    }
}

