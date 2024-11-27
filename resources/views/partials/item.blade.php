<div class="mb-4">
    <input type="hidden" name="items[{{ $index }}][id]" value="{{ $item->id ?? '' }}">
    <label class="text-2xl font-semibold mt-5" for="items[{{ $index }}][url]">パーツのURL</label>
    <input 
        type="text" 
        name="items[{{ $index }}][url]" 
        value="{{ old("items.$index.url", $item->url ?? '') }}" 
        class="rounded-md w-full h-12 p-3 border border-gray-300">
</div>
<div class="mb-4">
    <label class="text-2xl font-semibold mt-5" for="items[{{ $index }}][content]">説明</label>
    <textarea 
        name="items[{{ $index }}][content]" 
        class="rounded-md w-full p-3 border border-gray-300 resize-none">{{ old("items.$index.content", $item->content ?? '') }}</textarea>
</div>
