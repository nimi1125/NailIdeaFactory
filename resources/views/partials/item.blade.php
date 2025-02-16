<div class="mb-4 pl-2">
    <input type="hidden" name="items[{{ $index }}][id]" value="{{ $item->id ?? '' }}">
    <label class="text-2xl font-semibold mt-5" for="items[{{ $index }}][url]">Items URL<span class="text-sm ml-1 font-normal">アイテムURL</span></label>
    <input 
        type="text" 
        name="items[{{ $index }}][url]" 
        value="{{ old("items.$index.url", $item->url ?? '') }}" 
        class="rounded-md w-full h-12 p-3 border border-gray-300"
        placeholder="URLを入力">
</div>
<div class="mb-4 pl-2">
    <label class="text-2xl font-semibold mt-5" for="items[{{ $index }}][content]">Description of the item you want to use<span class="text-sm ml-1 font-normal">使いたいアイテムの説明</span></label>
    <textarea 
        name="items[{{ $index }}][content]" 
        class="rounded-md w-full p-3 border border-gray-300 resize-none"
        placeholder="使いたいアイテムの説明や、URL先のメモなどを記載してください">{{ old("items.$index.content", $item->content ?? '') }}</textarea>
</div>
