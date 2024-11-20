<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto py-12 bg-white rounded">
            <div class="idea-details">
                <!-- カテゴリとタイトル -->
                <h1>{{ $idea->title }}</h1>
                <p>カテゴリ: {{ $idea->category->name ?? '未設定' }}</p>
        
                <!-- 画像一覧 -->
                <div class="idea-images">
                    <h2>画像</h2>
                    @foreach ($idea->images as $image)
                        <div class="image-block">
                            <img src="{{ Storage::url($image->image_path) }}" alt="アイデア画像" style="width: 100%; height: auto;">
                            <p>{{ $image->content ?? '説明なし' }}</p>
                        </div>
                    @endforeach
                </div>
        
                <!-- 参考デザイン -->
                <div class="idea-references">
                    <h2>参考デザイン</h2>
                    @foreach ($idea->references as $reference)
                        <div class="reference-block">
                            <p>URL: <a href="{{ $reference->url }}" target="_blank">{{ $reference->url }}</a></p>
                            <p>{{ $reference->content ?? '説明なし' }}</p>
                        </div>
                    @endforeach
                </div>
        
                <!-- 使いたいパーツ -->
                <div class="idea-items">
                    <h2>使いたいパーツ</h2>
                    @foreach ($idea->items as $item)
                        <div class="item-block">
                            <p>URL: <a href="{{ $item->url }}" target="_blank">{{ $item->url }}</a></p>
                            <p>{{ $item->content ?? '説明なし' }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>