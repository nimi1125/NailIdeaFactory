<div class="mb-4">
    <label class="text-2xl font-semibold mt-5" for="title">タイトル</label>
    <input 
        type="text" 
        name="title" 
        id="title" 
        value="{{ old('title', optional($idea)->title ?? '') }}" 
        class="rounded-md w-full h-12 p-3 border border-gray-300"
        placeholder="タイトルを入力してください">
    @error('title')
        <div class="text-red-600">{{ $message }}</div>
    @enderror
</div>

<div class="mb-4">
    <label for="category_id" class="text-2xl font-semibold block mb-3">カテゴリ</label>
    <select 
        id="category_id" 
        name="category_id" 
        class="w-full border-gray-300 rounded">
        @foreach($categories as $category)
            <option value="{{ $category->id }}" {{ old('category_id', optional($idea)->category_id ?? '') == $category->id ? 'selected' : '' }}>
                {{ $category->name }}
            </option>
        @endforeach
    </select>
    @error('category_id')
        <div class="text-red-600">{{ $message }}</div>
    @enderror
</div>

<div class="mb-4">
    <label class="text-2xl font-semibold mt-5" for="content">デザイン詳細</label>
    <textarea 
        name="content" 
        id="content" 
        class="w-full p-3 border border-gray-300 rounded-md resize-none focus:outline-none focus:ring-2 focus:ring-blue-500" 
        placeholder="説明">{{ old('content', optional($idea)->content ?? '') }}</textarea>
    @error('content')
        <div class="text-red-600">{{ $message }}</div>
    @enderror
</div>

<div class="mb-4">
    <label for="image" class="text-2xl font-semibold block mb-3">参考画像</label>
    
    {{-- 編集時のみ登録済み画像を表示 --}}
    @if(isset($idea) && $idea->ideaImages->isNotEmpty())
    @foreach ($idea->ideaImages as $image)
        <div class="mb-3">
            <h3 class="font-semibold text-lg">登録済み画像</h3>
                <div class="flex items-center space-x-3 mb-2">
                    <img src="{{ asset($image->image_path) }}" alt="登録済み画像" style="width: 100px;">
                    <label for="images_0">新しい画像に置き換える:</label>
                    <input 
                        type="file" 
                        multiple
                        name="images[]" 
                        class="block text-sm text-gray-500 
                            file:mr-4 file:py-2 file:px-4
                            file:rounded-lg file:border-0
                            file:text-sm file:font-semibold
                            file:bg-blue-50 file:text-blue-700
                            hover:file:bg-blue-100 cursor-pointer">
                </div>
            @endforeach
        </div>
        @else
            {{-- 新規画像のアップロード --}}
            <h3 class="font-semibold text-lg">{{ isset($idea) ? '新しい画像を追加' : '画像を登録' }}</h3>
            <input 
                type="file" 
                name="images[0]" 
                multiple
                class="block text-sm text-gray-500 
                    file:mr-4 file:py-2 file:px-4
                    file:rounded-lg file:border-0
                    file:text-sm file:font-semibold
                    file:bg-blue-50 file:text-blue-700
                    hover:file:bg-blue-100 cursor-pointer">
    @endif


    
    @error('image')
        <div class="text-red-600">{{ $message }}</div>
    @enderror
</div>


<div class="mb-4">
    <label class="text-2xl font-semibold mt-5" for="references[0][url]">参考にしたいURL</label>
    <input 
        type="text" 
        name="references[0][url]" 
        id="references_url_0"
        value="{{ old('references.0.url', $reference->url ?? '') }}" 
        class="rounded-md w-full h-12 p-3 border border-gray-300"
        placeholder="URLを入力">
    @error('reference_url')
        <div class="text-red-600">{{ $message }}</div>
    @enderror
</div>


@foreach ($idea->IdeaReferences as $reference)
<div class="mb-4">
    <label class="text-2xl font-semibold mt-5" for="references[0][content]">参考にしたいアイディアの説明</label>
    <textarea 
        name="references[0][content]" 
        id="references_content_0" 
        class="rounded-md w-full p-3 border border-gray-300 resize-none"
        placeholder="参考のURLの説明など">
            {{ old('references.0.content', optional($idea)->references[0]->content ?? '') }}
        </textarea>
        @error('reference_content')
        <div class="text-red-600">{{ $message }}</div>
        @enderror
    </div>

<div class="mb-4">
    <label class="text-2xl font-semibold mt-5" for="items[0][url]">使いたいパーツのURL</label>
    <input 
        type="text" 
        name="items[0][url]" 
        id="items_url_0" 
            value="{{ old('items.0.url', optional($idea)->items[0]->url ?? '') }}" 
            class="rounded-md w-full h-12 p-3 border border-gray-300"
            placeholder="URLを入力">
            @error('item_url')
            <div class="text-red-600">{{ $message }}</div>
            @enderror
        </div>
@endforeach

<div class="mb-4">
    <label class="text-2xl font-semibold mt-5" for="items[0][content]">使いたいパーツの説明・メモなど</label>
    <textarea 
        name="items[0][content]" 
        id="items_content_0" 
        class="rounded-md w-full p-3 border border-gray-300 resize-none"
        placeholder="参考のURLの説明など">{{ old('items.0.content', optional($idea)->items[0]->content ?? '') }}
    </textarea>
    @error('item_content')
        <div class="text-red-600">{{ $message }}</div>
    @enderror
</div>

<div class="mt-4">
    <button type="submit" class="btn02 ml-3">登録</button>
</div>
