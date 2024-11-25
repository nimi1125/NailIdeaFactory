<div class="mb-4">
    <label class="text-2xl font-semibold mt-5" for="references[{{ $index }}][url]">参考にしたいURL</label>
    <input 
        type="text" 
        name="references[{{ $index }}][url]" 
        value="{{ old("references.$index.url", $reference->url ?? '') }}" 
        class="rounded-md w-full h-12 p-3 border border-gray-300"
        placeholder="URLを入力">
</div>
<div class="mb-4">
    <label class="text-2xl font-semibold mt-5" for="references[{{ $index }}][content]">説明</label>
    <textarea 
        name="references[{{ $index }}][content]" 
        class="rounded-md w-full p-3 border border-gray-300 resize-none">{{ old("references.$index.content", $reference->content ?? '') }}</textarea>
</div>
