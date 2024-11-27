<x-app-layout>
    <div class="py-12">
        <div class="max-w-6xl mx-auto px-3 sm:px-6 lg:px-8">
            <h3 class="titH3 pattaya">Public page<span class="text-sm">公開ページ</span></h3>
            <div class="flex flex-wrap">
                <div class="md:w-1/2 w-full p-2">
                    <a href="{{ route('idea.index') }}" class="flex flex-col items-center bg-white rounded p-3.5">
                        <img src="{{ asset('img/note_icon.jpg') }}" alt="ノート" class="mx-auto">
                        <p class="text-2xl mt-2 pattaya">Idea list</p>
                        <p class="text-l">アイディア一覧表示</p>
                    </a>
                </div>
                <div class="md:w-1/2 w-full p-2">
                    <a class="flex flex-col items-center bg-white rounded p-3.5">
                        <img src="{{ asset('img/note_icon.jpg') }}" alt="ノート" class="mx-auto">
                        <p class="text-2xl mt-2 pattaya">List display</p>
                        <p class="text-l">投稿一覧表示 ※準備中</p>
                    </a>
                </div>
            </div>
        </div>
    <div class="py-12">
        <div class="max-w-6xl mx-auto px-3 sm:px-6 lg:px-8">
            <h3 class="titH3 pattaya">Account information<span class="text-sm">アカウント情報</span></h3>
            <div class="flex flex-wrap">
                <div class="md:w-1/2 w-full p-2">
                    <a href="{{ route('profile.update') }}" class="flex flex-col items-center bg-white rounded p-3.5">
                        <img src="{{ asset('img/profile_icon.jpg') }}" alt="羽ペン" class="mx-auto">
                        <p class="text-2xl mt-2 pattaya">Profile</p>
                        <p class="text-l">アカウント情報変更</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="max-w-6xl mx-auto px-3 sm:px-6 lg:px-8 mt-5">
            <h3 class="titH3 pattaya">Nail idea <span class="text-sm">ネイルアイディア</span></h3>
            <div class="flex flex-wrap">
                <div class="md:w-1/2 w-full p-2">
                    <a href="{{ route('idea.myidea') }}" class="flex flex-col items-center bg-white rounded p-3.5">
                        <img src="{{ asset('img/mypage_icon.jpg') }}" alt="羽ペン" class="mx-auto">
                        <p class="text-2xl mt-2 pattaya">Myidea</p>
                        <p class="text-l">マイアイディア</p>
                    </a>
                </div>
                <div class="md:w-1/2 w-full p-2">
                    <a href="{{ route('idea.create') }}" class="flex flex-col items-center bg-white rounded p-3.5">
                        <img src="{{ asset('img/quill_pen_icon.jpg') }}" alt="羽ペン" class="mx-auto">
                        <p class="text-2xl mt-2 pattaya">New registration</p>
                        <p class="text-l">新規登録</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="dashPostArea relative max-w-6xl mx-auto px-3 sm:px-6 lg:px-8 mt-5">
            <h3 class="titH3 pattaya">Nail Post <span class="text-sm">ネイル投稿</span></h3>
            <p class="text-2xl">※準備中</p>
            <div class="flex flex-wrap">
                <div class="md:w-1/2 w-full p-2">
                    <a class="flex flex-col items-center bg-white rounded p-3.5">
                        <img src="{{ asset('img/mypage_icon.jpg') }}" alt="ノート" class="mx-auto">
                        <p class="text-2xl mt-2 pattaya">Mypost</p>
                        <p class="text-l">マイポスト</p>
                    </a>
                </div>
                <div class="md:w-1/2 w-full p-2">
                    <a class="flex flex-col items-center bg-white rounded p-3.5">
                        <img src="{{ asset('img/quill_pen_icon.jpg') }}" alt="羽ペン" class="mx-auto">
                        <p class="text-2xl mt-2 pattaya">New registration</p>
                        <p class="text-l">新規登録</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
