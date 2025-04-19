<div class="mb-4 pl-2">
    <label class="text-2xl font-semibold mt-5" for="references[{{ $index }}][url]">参考デザインURL<span class="text-sm ml-1 font-normal">参考にしたいデザインや完成イメージのURLがあれば登録</span></label>
    <input 
        type="text" 
        name="references[{{ $index }}][url]" 
        value="{{ old("references.$index.url", $reference->url ?? '') }}" 
        class="rounded-md w-full h-12 p-3 border border-gray-300"
        placeholder="URLを入力">
</div>
<div class="mb-4 pl-2">
    <label class="text-2xl font-semibold mt-5" for="references[{{ $index }}][content]">参考デザインの説明<span class="text-sm ml-1 font-normal">URL先の説明や参考にしたいデザインの説明などを登録</span></label>
    <textarea 
        name="references[{{ $index }}][content]" 
        class="rounded-md w-full p-3 border border-gray-300 resize-none"
        placeholder="参考にしたいデザインの説明や、URL先のメモなどを記載してください">{{ old("references.$index.content", $reference->content ?? '') }}</textarea>
</div>
