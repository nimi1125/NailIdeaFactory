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
        $ideas = Idea::orderBy('created_at', 'desc')
        ->orderBy('created_at', 'desc') // 並び順を指定
        ->paginate(12); 
        
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
    
        if ($request->has('items') && is_array($request->items)) {
            foreach ($request->items as $item) {
                IdeaItem::create([
                    'idea_id' => $idea->id,
                    'url' => $item['url'] ?? null,
                    'content' => $item['content'] ?? null,
                ]);
            }
        }
        
        if ($request->has('references') && is_array($request->references)) {
            foreach ($request->references as $reference) {
                IdeaReference::create([
                    'idea_id' => $idea->id,
                    'url' => $reference['url'] ?? null,
                    'content' => $reference['content'] ?? null,
                ]);
            }
        }
    
        
        if ($request->hasFile('images') && is_array($request->file('images'))) {
            foreach ($request->file('images') as $file) {
                $imagePath = $file->store('idea_images', 'public');
                $imageUrl = Storage::url($imagePath);
        
                IdeaImage::create([
                    'idea_id' => $idea->id,
                    'image_path' => $imageUrl,
                ]);
            }
        }
        
    
        return redirect()->route('idea.create')->with('success', 'アイデアを登録しました！');
    }
    

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $user_id = Auth::id();
        $idea = Idea::with(['IdeaItems', 'IdeaImages', 'IdeaReferences'])->find($id);
        return view('idea.detail',compact('idea'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $user_id = Auth::id();
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
    $idea = Idea::with(['IdeaItems', 'IdeaImages', 'IdeaReferences'])->findOrFail($id);

    // 基本情報の更新
    $idea->update([
        'category_id' => $request->category_id,
        'title' => $request->title,
        'content' => $request->content,
    ]);

    if ($request->has('items') && is_array($request->items)) {
        foreach ($request->items as $item) {
            if (isset($item['id'])) {
                // 既存データの更新
                $ideaItem = IdeaItem::find($item['id']);
                if ($ideaItem) {
                    $ideaItem->update([
                        'url' => $item['url'] ?? null,
                        'content' => $item['content'] ?? null,
                    ]);
                }
            } else {
                // 新規データの作成
                IdeaItem::create([
                    'idea_id' => $idea->id,
                    'url' => $item['url'] ?? null,
                    'content' => $item['content'] ?? null,
                ]);
            }
        }
    }
    

    // 参考データの更新
    if ($request->has('references') && is_array($request->references)) {
        $idea->IdeaReferences()->delete();
        foreach ($request->references as $reference) {
            IdeaReference::create([
                'idea_id' => $idea->id,
                'url' => $reference['url'] ?? null,
                'content' => $reference['content'] ?? null,
            ]);
        }
    }

    if ($request->hasFile('images') && is_array($request->file('images'))) {
        foreach ($request->file('images') as $index => $file) {
            // 古い画像の削除
            $oldImage = $idea->ideaImages[$index] ?? null;
            if ($oldImage) {
                $relativePath = str_replace('/storage/', '', $oldImage->image_path);
                Storage::disk('public')->delete($relativePath); // 実ファイルの削除
                $oldImage->delete(); // レコードの削除
            }
    
            // 新しい画像の保存
            $imagePath = $file->store('idea_images', 'public'); // ファイル保存
            $imageUrl = '/storage/' . $imagePath; // /storage/...形式のURL生成
    
            // データベースに保存
            IdeaImage::create([
                'idea_id' => $idea->id,
                'image_path' => $imageUrl,
            ]);
        }
    }
    
    

    return redirect()->route('idea.detail', $id)->with('success', 'アイディアを更新しました！');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $idea = Idea::with(['IdeaItems', 'IdeaImages', 'IdeaReferences'])->find($id);
        $idea->IdeaReferences()->delete();
        $idea->IdeaImages()->delete();
        $idea->IdeaItems()->delete();
        $idea->delete();
        return redirect()
            ->route('idea.myidea')
            ->with('status','アイディアを削除しました。');
    }

/**
 * Display a listing of the user's ideas.
 */
public function myidea()
{
    $userId = Auth::id();

    $ideas = Idea::where('user_id', $userId)
        ->orderBy('created_at', 'desc') // 並び順を指定
        ->paginate(12); // ページネーション

    return view('idea.myidea', ['ideas' => $ideas]);
}
}

