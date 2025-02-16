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
                        <h4 class="detail titH4 relative mb-2 inline-block font-semibold">Design Details<span class="text-sm ml-1 inline-block font-normal">デザイン詳細</span></h4>
                        <p class="text-2xl">{{ $idea->content ?? '' }}</p>
                    </div>
                    <hr class="mb-5">

                    <div class="idea-references mb-5">
                        <h4 class="detail titH4 relative mb-2 inline-block font-semibold">Reference design<span class="text-sm ml-1 inline-block font-normal">参考デザイン</span></h4>
                        @foreach ($idea->IdeaReferences as $reference)
                            <dl class="reference-block mb-2">
                                <dt class="text-lg">Reference URL<span class="text-xs ml-1">参考URL</span></dt>
                                <dd class="hoverCol01"><a href="{{ $reference->url }}" target="_blank">{{ $reference->url }}</a></dd>
                                <dt class="text-lg">Details<span class="text-xs ml-1">詳細</span></dt>
                                <dd class="mb-2">{{ $reference->content ?? '説明なし' }}</dd>
                            </dl>
                        @endforeach
                    </div>
                    <hr class="mb-5">
    
                    <div class="idea-items mb-5">
                        <h4 class="detail titH4 relative inline-block font-semibold">Items to Use<span class="text-sm ml-1 inline-block font-normal">使いたいアイテム</span></h4>
                        @foreach ($idea->IdeaItems as $item)
                            <dl class="item-block">
                                <dt class="text-lg">Items URL<span class="text-xs ml-1">アイテムURL</span></dt>
                                <dd class="hoverCol01"><a href="{{ $item->url }}" target="_blank">{{ $item->url }}</a></dd>
                                <dt class="text-lg">Details<span class="text-xs ml-1">詳細</span></dt>
                                <dd class="mb-2">{{ $item->content ?? '説明なし' }}</dd>
                            </dl>
                        @endforeach
                    </div>
                    <hr>
                </div>
            </div>
        </div>
        <div class="btnArea max-w-7xl mx-auto mt-5 text-center">
            <a href="{{ route('idea.index') }}" class="font-semibold text-2xl hoverCol01">back to the list</a>
        </div>
        @if(Auth::id() === $idea->user->id )
            <div class="userBtnArea">
                <a href="{{ route('idea.edit',$idea) }}" class="btn02 w-full text-center text-xl">Edit article<span class="text-xs ml-1">記事を編集</span></a>
                <form action="{{ route('idea.destroy', $idea->id) }}" method="POST" onsubmit="return confirm('本当に削除しますか？');" class="w-full">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn01 w-full mt-5 text-xl">Delete article<span class="text-xs ml-1">記事を削除</span></button>
                </form>
            </div>
        @endif
    </div>
</x-app-layout>