<x-app-layout>
    <x-slot name="cover">
        <h2 class="font-semibold text-white leading-tight pattaya titH2">
            Idea Edit<span class="text-sm ml-2 inline-block">アイディア編集画面</span>
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-6xl mx-auto px-3 sm:px-6 lg:px-8 py-12 bg-white rounded-md">
            <form method="post" action="{{ route('idea.update',$idea) }}" enctype="multipart/form-data" class="space-y-5 mt-5">
                @csrf  
                @include('idea.ideaform', ['idea' => $idea])
            </form>
            <div class="flex pb-5 max-w-6xl mx-auto mt-5">
                <div class="">
                    <a href="{{ route('idea.detail',$idea) }}" class="btn02 text- ml-3">Back<span class="text-sm ml-1 inline-block">戻る</span></a>
                </div>
                <div class="">
                    <form action="{{ route('idea.destroy', $idea->id) }}" method="POST" onsubmit="return confirm('本当に削除しますか？');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn01 ml-3">Delete<span class="text-sm ml-2 inline-block">記事を削除</span></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>