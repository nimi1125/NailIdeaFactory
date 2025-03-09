<div class="mb-4">
    <label class="text-2xl font-semibold mt-5 formLabel" for="title">Title<span class="text-sm ml-1 font-normal">題名</span></label>
    <input 
        type="text" 
        name="title" 
        id="title" 
        value="{{ old('title', $idea->title ?? '') }}" 
        class="rounded-md w-full h-12 p-3 border border-gray-300"
        placeholder="タイトルを入力してください">
    @error('title')
        <div class="text-red-600">{{ $message }}</div>
    @enderror
</div>

<div class="mb-4">
    <label for="category_id" class="text-2xl font-semibold block formLabel">Category<span class="text-sm ml-1 font-normal">カテゴリ</span></label>
    <select 
        id="category_id" 
        name="category_id" 
        class="w-full border-gray-300 rounded">
        @foreach($categories as $category)
            <option value="{{ $category->id }}" {{ old('category_id', $idea->category_id ?? '') == $category->id ? 'selected' : '' }}>
                {{ $category->name }}
            </option>
        @endforeach
    </select>
    @error('category_id')
        <div class="text-red-600">{{ $message }}</div>
    @enderror
</div>

<div class="mb-4">
    <label class="text-2xl font-semibold mt-5 inline-block formLabel" for="content">Design Details<span class="text-sm ml-1 font-normal inline-block">デザイン詳細</span></label>
    <textarea 
        name="content" 
        id="content" 
        class="w-full p-3 border border-gray-300 rounded-md resize-none focus:outline-none focus:ring-2 focus:ring-blue-500" 
        placeholder="デザインの説明などを記載してください">{{ old('content', $idea->content ?? '') }}</textarea>
    @error('content')
        <div class="text-red-600">{{ $message }}</div>
    @enderror
</div>

{{-- 画像 --}}
<div class="mb-5">
    <label for="image" class="text-2xl font-semibold block inline-block formLabel">Register reference image<span class="text-sm ml-1 font-normal inline-block">参考画像を登録</span></label>
    @if(isset($idea) && $idea->ideaImages->isNotEmpty())
        {{-- 編集時のみ登録済み画像を表示 --}}
        <div class="mb-3">
            <h3 class="font-semibold text-lg">登録済み画像</h3>
            @foreach ($idea->ideaImages as $index => $image)
                <div class="flex flex-col md:flex-row items-center space-x-3 mb-2">
                    <img src="{{ asset($image->image_path) }}" alt="登録済み画像" style="width: 100px;">
                    <label for="images[{{ $index }}]">新しい画像に置き換える:</label>
                    <input 
                        type="file" 
                        name="images[{{ $index }}]" 
                        class="block text-sm text-gray-500">
                    <input 
                        type="checkbox" 
                        name="delete_images[{{ $index }}]" 
                        value="{{ $image->id }}" 
                        class="ml-2">
                </div>
            @endforeach
        </div>
    @endif

    {{-- 新しい画像を追加 --}}
    <!-- <div class="mb-3">
        <h3 class="font-semibold text-lg">{{ isset($idea) ? '新しい画像を追加' : '' }}</h3>
        <input 
            type="file" 
            name="images[]" 
            multiple
            class="block text-sm text-gray-500 imgInput">
    </div> -->

    @error('images')
        <div class="text-red-600">{{ $message }}</div>
    @enderror
</div>
<hr>

{{-- 参考情報 --}}
<div id="references-container">
    <label for="image" class="text-2xl font-semibold block inline-block formLabel">Reference design<span class="text-sm ml-1 font-normal inline-block">参考デザインについて登録</span></label>
    @if(isset($idea) && $idea->IdeaReferences->isNotEmpty())
        @foreach ($idea->IdeaReferences as $index => $reference)
            @include('partials.reference', ['index' => $index, 'reference' => $reference])
        @endforeach
    @else
        {{-- 新規登録用に空のフォームを用意 --}}
        @include('partials.reference', ['index' => 0, 'reference' => null])
    @endif
</div>
<hr>

{{-- アイテム --}}
<div id="items-container">
    <label for="image" class="text-2xl font-semibold block inline-block formLabel">Items to Use<span class="text-sm ml-1 font-normal inline-block">使いたいアイテムについて登録</span></label>
    @if(isset($idea) && $idea->IdeaItems->isNotEmpty())
        @foreach ($idea->IdeaItems as $index => $IdeaItem)
            @include('partials.item', ['index' => $index, 'item' => $IdeaItem])
        @endforeach
    @else
        {{-- 新規登録用に空のフォームを用意 --}}
        @include('partials.item', ['index' => 0, 'item' => null])
    @endif
</div>

{{-- 登録ボタン --}}
<div class="mt-4">
    <button type="submit" class="btn02 ml-3">Submit<span class="text-sm ml-1 font-normal inline-block">登録</span></button>
</div>
