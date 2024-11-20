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

class IdeaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('idea.list');
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
        $validated = $request->validated();

        $idea = Idea::create([
            'user_id' => auth()->id(),
            'category_id' => $validated['category_id'],
            'coverage_range_id' => $validated['coverage_range_id'],
            'title' => $validated['title'],
            'content' => $validated['content'],
        ]);
    
        if (isset($validated['reference_url'])) {
            foreach ($validated['reference_url'] as $index => $url) {
                IdeaReference::create([
                    'idea_id' => $idea->id,
                    'url' => $url,
                    'content' => $validated['reference_content'][$index] ?? null,
                ]);
            }
        }
    
        if (isset($validated['item_url'])) {
            foreach ($validated['item_url'] as $index => $url) {
                IdeaItem::create([
                    'idea_id' => $idea->id,
                    'url' => $url,
                    'content' => $validated['item_content'][$index] ?? null,
                ]);
            }
        }
    
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('images', 'public');
                IdeaImage::create([
                    'idea_id' => $idea->id,
                    'image_path' => $path,
                ]);
            }
        }
    
        return redirect()->route('ideas.create')->with('success', 'アイデアを登録しました！');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        return view('idea.detail');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        return view('idea.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    /**
 * 
 */
    public function myidea()
    {
        return view('idea.myidea');
    }
}
