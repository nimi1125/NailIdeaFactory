<x-app-layout>
    <div class="py-12">
        <div class="max-w-6xl mx-auto px-3 sm:px-6 lg:px-8">
            <h3 class="titH3 font-semibold">Public page<span class="ml-1 text-sm font-normal">公開ページ</span></h3>
            <div class="flex flex-wrap">
                <div class="sm:w-1/2 w-full p-2">
                    <a href="{{ route('idea.index') }}" class="flex flex-col items-center bg-white rounded p-3.5">
                        <div class="dashboardIcon">
                            <img src="{{ asset('img/note_icon.jpg') }}" alt="ノート" class="mx-auto">
                        </div>
                        <p class="md:text-2xl text-lg mt-2 font-semibold">Idea list</p>
                        <p class="md:text-l text-xs">アイディア一覧表示</p>
                    </a>
                </div>
                <div class="sm:w-1/2 w-full p-2">
                    <a class="flex flex-col items-center bg-white rounded p-3.5">
                        <div class="dashboardIcon">
                            <img src="{{ asset('img/note_icon.jpg') }}" alt="ノート" class="mx-auto">
                        </div>
                        <p class="md:text-2xl text-lg mt-2 font-semibold">List display</p>
                        <p class="md:text-l text-xs">投稿一覧表示 ※準備中</p>
                    </a>
                </div>
            </div>
        </div>
    <div class="py-12">
        <div class="max-w-6xl mx-auto px-3 sm:px-6 lg:px-8">
            <h3 class="titH3 font-semibold">Account information<span class="ml-1 text-sm font-normal">アカウント情報</span></h3>
            <div class="flex flex-wrap">
                <div class="sm:w-1/2 w-full p-2">
                    <a href="{{ route('profile.update') }}" class="flex flex-col items-center bg-white rounded p-3.5">
                        <div class="dashboardIcon">
                            <img src="{{ asset('img/profile_icon.jpg') }}" alt="羽ペン" class="mx-auto">
                        </div>
                        <p class="md:text-2xl text-lg mt-2 font-semibold">Profile</p>
                        <p class="md:text-l text-xs">アカウント情報変更</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="max-w-6xl mx-auto px-3 sm:px-6 lg:px-8 mt-5">
            <h3 class="titH3 font-semibold">Nail idea<span class="ml-1 text-sm font-normal">ネイルアイディア</span></h3>
            <div class="flex flex-wrap">
                <div class="sm:w-1/2 w-full p-2">
                    <a href="{{ route('idea.myidea') }}" class="flex flex-col items-center bg-white rounded p-3.5">
                        <div class="dashboardIcon">
                            <img src="{{ asset('img/mypage_icon.jpg') }}" alt="羽ペン" class="mx-auto">
                        </div>
                        <p class="md:text-2xl text-lg mt-2 font-semibold">Myidea</p>
                        <p class="md:text-l text-xs">マイアイディア</p>
                    </a>
                </div>
                <div class="sm:w-1/2 w-full p-2">
                    <a href="{{ route('idea.create') }}" class="flex flex-col items-center bg-white rounded p-3.5">
                        <div class="dashboardIcon">
                            <img src="{{ asset('img/quill_pen_icon.jpg') }}" alt="羽ペン" class="mx-auto">
                        </div>
                        <p class="md:text-2xl text-lg mt-2 font-semibold">New registration</p>
                        <p class="md:text-l text-xs">新規登録</p>
                    </a>
                </div>
            </div>
        </div>
        <!-- <div class="dashPostArea relative max-w-6xl mx-auto px-3 sm:px-6 lg:px-8 mt-5">
            <h3 class="titH3 font-semibold">Nail Post<span class="ml-1 text-sm font-normal">ネイル投稿</span></h3>
            <p class="md:text-2xl text-lg">※準備中</p>
            <div class="flex flex-wrap">
                <div class="sm:w-1/2 w-full p-2">
                    <a class="flex flex-col items-center bg-white rounded p-3.5">
                        <div class="dashboardIcon">
                            <img src="{{ asset('img/mypage_icon.jpg') }}" alt="ノート" class="mx-auto">
                        </div>
                        <p class="md:text-2xl text-lg mt-2 font-semibold">Mypost</p>
                        <p class="md:text-l text-xs">マイポスト</p>
                    </a>
                </div>
                <div class="sm:w-1/2 w-full p-2">
                    <a class="flex flex-col items-center bg-white rounded p-3.5">
                        <div class="dashboardIcon">
                            <img src="{{ asset('img/quill_pen_icon.jpg') }}" alt="羽ペン" class="mx-auto">
                        </div>
                        <p class="md:text-2xl text-lg mt-2 font-semibold">New registration</p>
                        <p class="md:text-l text-xs">新規登録</p>
                    </a>
                </div>
            </div>
        </div> -->
    </div>
</x-app-layout>
