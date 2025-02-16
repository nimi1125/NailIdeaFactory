<div class="mb-4 pl-2">
    <label class="text-2xl font-semibold mt-5" for="references[{{ $index }}][url]">Reference URL<span class="text-sm ml-1 font-normal">参考URL</span></label>
    <input 
        type="text" 
        name="references[{{ $index }}][url]" 
        value="{{ old("references.$index.url", $reference->url ?? '') }}" 
        class="rounded-md w-full h-12 p-3 border border-gray-300"
        placeholder="URLを入力">
</div>
<div class="mb-4 pl-2">
    <label class="text-2xl font-semibold mt-5" for="references[{{ $index }}][content]">Description of the design you want to refer to<span class="text-sm ml-1 font-normal">参考デザインの説明</span></label>
    <textarea 
        name="references[{{ $index }}][content]" 
        class="rounded-md w-full p-3 border border-gray-300 resize-none"
        placeholder="参考にしたいデザインの説明や、URL先のメモなどを記載してください">{{ old("references.$index.content", $reference->content ?? '') }}</textarea>
</div>
