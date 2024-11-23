<x-app-layout>
    <x-slot name="cover">
        <h2 class="font-semibold text-white leading-tight pattaya titH2">
            Idea
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto py-12 bg-white rounded">
            <div class="ideaDetails">
                <div class="flex items-center">
                    <p class="text-sm text-white bg-gray-500 p-1"> {{ $idea->category->name ?? '未設定' }}</p>
                    <h2 class="titH2 ml-5">{{ $idea->title }}</h2>
                </div>

                <div class="ideaContentArea mb-5">
                    <p class="text-2xl">{{ $idea->content ?? '' }}</p>
                </div>

                <div class="ideaImagesArea">
                    <h4 class="detail titH4 relative">参考画像</h4>
                    <div class="grid grid-cols-1 gap-4 md:grid-cols-3">
                        @foreach ($idea->ideaImages as $image)
                            <div class="ideaImageBox flex flex-col items-center">
                                <div class="ideaImageItem">
                                    <img src="{{ asset($image->image_path) }}" alt="アイデア参考画像" class="ideaImage">
                                </div>
                                <p>{{ $image->content ?? '説明なし' }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="idea-references">
                    <h4 class="detail titH4 relative">参考デザイン</h4>
                    @foreach ($idea->IdeaReferences as $reference)
                        <div class="reference-block mb-2">
                            <p>詳細:{{ $reference->content ?? '説明なし' }}</p>
                            <p>URL: <a href="{{ $reference->url }}" target="_blank">{{ $reference->url }}</a></p>
                        </div>
                    @endforeach
                </div>

                <div class="idea-items">
                    <h4 class="detail titH4 relative">使いたいアイテム</h4>
                    @foreach ($idea->IdeaItems as $item)
                        <div class="item-block">
                            <p>詳細:{{ $item->content ?? '説明なし' }}</p>
                            <p>URL: <a href="{{ $item->url }}" target="_blank">{{ $item->url }}</a></p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>