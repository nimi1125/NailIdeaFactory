<div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-5">
    @foreach($ideas as $idea)   
    <div class="postArea bg-white overflow-hidden">
        <a href="{{ route('idea.detail',$idea) }}" class="postBox block">
            <div class="postImgItme">
                @if ($idea->firstImage)
                    <img src="{{ asset($idea->firstImage->image_path) }}" alt="アイデア参考画像" class="w-full h-48 object-cover">
                @else
                    <img src="{{ asset('img/top_cv.jpg') }}" alt="アイデア参考画像" class="w-full h-48 object-cover">
                @endif
            </div>
            <div class="postTxtItem p-4">
                <div class="flex justify-between items-center">
                    <p class="text-sm text-white bg-gray-500 p-1">{{ $idea->category->name }}</p>
                    <h4 class="text-lg font-semibold">{{ $idea->title }}</h4>
                </div>
            </div>
        </a>
    </div>
    @endforeach
</div>