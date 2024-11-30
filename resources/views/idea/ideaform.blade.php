<div class="mb-4">
    <label class="text-2xl font-semibold mt-5" for="title">タイトル</label>
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
    <label for="category_id" class="text-2xl font-semibold block mb-3">カテゴリ</label>
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
    <label class="text-2xl font-semibold mt-5" for="content">デザイン詳細</label>
    <textarea 
        name="content" 
        id="content" 
        class="w-full p-3 border border-gray-300 rounded-md resize-none focus:outline-none focus:ring-2 focus:ring-blue-500" 
        placeholder="説明">{{ old('content', $idea->content ?? '') }}</textarea>
    @error('content')
        <div class="text-red-600">{{ $message }}</div>
    @enderror
</div>

{{-- 画像 --}}
<div class="mb-4">
    <label for="image" class="text-2xl font-semibold block mb-3">参考画像</label>
    @if(isset($idea) && $idea->ideaImages->isNotEmpty())
        {{-- 編集時のみ登録済み画像を表示 --}}
        <em class="text-2xl">※画像変更は今はできません調整中です</em>
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
                    <label for="delete_images[{{ $index }}]">この画像を削除</label>
                </div>
            @endforeach
        </div>
    @endif

    {{-- 新しい画像を追加 --}}
    <div class="mb-3">
        <h3 class="font-semibold text-lg">{{ isset($idea) ? '新しい画像を追加' : '画像を登録' }}</h3>
        <input 
            type="file" 
            name="images[]" 
            multiple
            class="block text-sm text-gray-500">
    </div>

    @error('images')
        <div class="text-red-600">{{ $message }}</div>
    @enderror
</div>

{{-- 参考情報 --}}
<div id="references-container">
    @if(isset($idea) && $idea->IdeaReferences->isNotEmpty())
        @foreach ($idea->IdeaReferences as $index => $reference)
            @include('partials.reference', ['index' => $index, 'reference' => $reference])
        @endforeach
    @else
        {{-- 新規登録用に空のフォームを用意 --}}
        @include('partials.reference', ['index' => 0, 'reference' => null])
    @endif
</div>

{{-- アイテム --}}
<div id="items-container">
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
    <button type="submit" class="btn02 ml-3">登録</button>
</div>
