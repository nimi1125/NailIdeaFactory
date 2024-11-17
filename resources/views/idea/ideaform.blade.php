<div class="mb-4">
    <label class="text-2xl font-semibold mt-5 pattaya" for="title">
        タイトル
    </label>
    <input type="text" name="title" id="title" value="" class="rounded-md w-full h-12 p-3 resize-none writeTitTxtArea border border-gray-300" placeholder="タイトルを入力してください"></input>
    {{-- @error('title')
        <div class="text-red-600">{{ $message }}</div>
    @enderror --}}
</div>
<div class="mb-4">
    <label for="inputstatus" class="text-2xl font-semibold block mb-3">カテゴリ</label>
    <select id="inputstatus" name="category_id" class="w-full border-gray-300 rounded">
        
        {{-- @foreach($categories as $category)
            <option value="{{ $category->id }}" {{ old('category_id', $post->category_id ?? '') == $category->id ? 'selected' : '' }}>
                {{ $category->name }}
            </option>
        @endforeach --}}
    </select>
    {{-- @error('category_id')
        <div class="text-red-600">{{ $message }}</div>
    @enderror --}}
</div>
<div class="mb-4 writeImgBox flex items-center space-x-3">
    <label for="image_pathinputstatus" class="text-2xl font-semibold block mb-3">画像</label>
    <input type="file" name="image_path" class="block text-sm text-gray-500 
        file:mr-4 file:py-2 file:px-4
        file:rounded-lg file:border-0
        file:text-sm file:font-semibold
        file:bg-blue-50 file:text-blue-700
        hover:file:bg-blue-100
        cursor-pointer"></input>
    <input type="file" name="image_path" class="block text-sm text-gray-500 
        file:mr-4 file:py-2 file:px-4
        file:rounded-lg file:border-0
        file:text-sm file:font-semibold
        file:bg-blue-50 file:text-blue-700
        hover:file:bg-blue-100
        cursor-pointer"></input>
    </div>
    {{-- @error('image_path')
        <div class="text-red-600">{{ $message }}</div>
    @enderror --}}
<div class="writeTxtBox">
    <textarea name="content" value="" class="writeContentHi w-full p-3 border border-gray-300 rounded-md resize-none focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="説明"></textarea>
    {{-- @error('content')
        <div class="text-red-600">{{ $message }}</div>
    @enderror --}}
    <button type="submit" class="mt-3 btn02">
        登録
    </button>
</div>