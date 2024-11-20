<x-app-layout>
    <x-slot name="cover">
        <h2 class="font-semibold text-white leading-tight pattaya titH2">
            Idea List
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-6xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-5">
                <div class="postArea bg-white overflow-hidden">
                    <div class="postBox">
                        <div class="postImgItme">
                            <img src="{{ asset('img/top_cv.jpg') }}" alt="" class="w-full h-48 object-cover">
                        </div>
                        <div class="postTxtItem p-4">
                            <div class="flex justify-between items-center">
                                <p class="text-sm text-white bg-gray-500 p-1">Category</p>
                                <h4 class="text-lg font-semibold">Post Title</h4>
                            </div>
                        </div>
                    </div>
                </div>
            
                <div class="postArea bg-white overflow-hidden">
                    <div class="postBox">
                        <div class="postImgItme">
                            <img src="{{ asset('img/top_cv.jpg') }}" alt="" class="w-full h-48 object-cover">
                        </div>
                        <div class="postTxtItem p-4">
                            <div class="flex justify-between items-center">
                                <p class="text-sm text-white bg-gray-500 p-1">Category</p>
                                <h4 class="text-lg font-semibold">Post Title</h4>
                            </div>
                        </div>
                    </div>
                </div>
            
                <!-- 3rd post area -->
                <div class="postArea bg-white overflow-hidden">
                    <div class="postBox">
                        <div class="postImgItme">
                            <img src="{{ asset('img/top_cv.jpg') }}" alt="" class="w-full h-48 object-cover">
                        </div>
                        <div class="postTxtItem p-4">
                            <div class="flex justify-between items-center">
                                <p class="text-sm text-white bg-gray-500 p-1">Category</p>
                                <h4 class="text-lg font-semibold">Post Title</h4>
                            </div>
                        </div>
                    </div>
                </div>
            
                <div class="postArea bg-white overflow-hidden">
                    <div class="postBox">
                        <div class="postImgItme">
                            <img src="{{ asset('img/top_cv.jpg') }}" alt="" class="w-full h-48 object-cover">
                        </div>
                        <div class="postTxtItem p-4">
                            <div class="flex justify-between items-center">
                                <p class="text-sm text-white bg-gray-500 p-1">Category</p>
                                <h4 class="text-lg font-semibold">Post Title</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>