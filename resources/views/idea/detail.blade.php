<x-app-layout>
    <x-slot name="cover">
        <h2 class="font-semibold text-white leading-tight pattaya titH2">
            Idea<span class="text-sm ml-2 inline-block">アイディア</span>
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto py-12 bg-white rounded">
            <div class="flex flex-wrap ideaImagesArea mb-5">
                <div class="sm:w-1/2 w-full p-5">
                    @foreach ($idea->ideaImages as $image)
                        <div class="ideaImageBox flex flex-col items-center">
                            <div class="ideaImageItem">
                                <img src="{{ asset($image->image_path) }}" alt="アイデア参考画像" class="ideaImage">
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="sm:w-1/2 w-full p-5">
                    <div>
                        <p class="text-sm col01"> #{{ $idea->category->name ?? '未設定' }}</p>
                        <h3 class="titH3 font-semibold">{{ $idea->title }}</h3>
                    </div>
    
                    <div class="ideaContentArea mb-5">
                        <h4 class="detail titH4 relative mb-2 inline-block font-semibold">デザイン詳細</h4>
                        <p class="text-2xl">{{ $idea->content ?? '' }}</p>
                    </div>
                    <hr class="mb-5">

                    <div class="idea-references mb-5">
                        <h4 class="detail titH4 relative mb-2 inline-block font-semibold">参考デザイン</h4>
                        @foreach ($idea->IdeaReferences as $reference)
                            <dl class="reference-block mb-2">
                                <dt class="text-lg">参考デザインURL</dt>
                                <dd class="hoverCol01"><a href="{{ $reference->url }}" target="_blank">{{ $reference->url }}</a></dd>
                                <dt class="text-lg">参考デザインの説明</dt>
                                <dd class="mb-2">{{ $reference->content ?? '説明なし' }}</dd>
                            </dl>
                        @endforeach
                    </div>
                    <hr class="mb-5">
    
                    <div class="idea-items mb-5">
                        <h4 class="detail titH4 relative inline-block font-semibold">使いたいアイテムについて</h4>
                        @foreach ($idea->IdeaItems as $item)
                            <dl class="item-block">
                                <dt class="text-lg">アイテムURL</dt>
                                <dd class="hoverCol01"><a href="{{ $item->url }}" target="_blank">{{ $item->url }}</a></dd>
                                <dt class="text-lg">アイテムの説明</dt>
                                <dd class="mb-2">{{ $item->content ?? '説明なし' }}</dd>
                            </dl>
                        @endforeach
                    </div>
                    <hr>
                </div>
            </div>
        </div>
        <div class="btnArea max-w-7xl mx-auto mt-5 text-center">
            <a href="{{ route('idea.index') }}" class="font-semibold text-2xl hoverCol01">一覧に戻る</a>
        </div>
        @if(Auth::id() === $idea->user->id )
            <div class="userBtnArea">
                <a href="{{ route('idea.edit',$idea) }}" class="btn02 w-full text-center">記事を編集</a>
                <form action="{{ route('idea.destroy', $idea->id) }}" method="POST" onsubmit="return confirm('本当に削除しますか？');" class="w-full">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn01 w-full mt-5">記事を削除</button>
                </form>
            </div>
        @endif
    </div>
</x-app-layout>