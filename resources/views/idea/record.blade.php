<x-app-layout>
    <x-slot name="cover">
        <h2 class="font-semibold text-white leading-tight pattaya titH2">
            New Idea Recored
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-6xl mx-auto">
        <h3 class="titH3 mb-3">新規登録</h3>
        @if (session('success'))
            <div class="alert alert-success p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400">
                {{ session('success') }}
            </div>
        @endif
        </div>
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 py-12 bg-white rounded-md">
            <form method="post" action="{{ route('idea.store') }}" enctype="multipart/form-data" class="space-y-5 mt-5">
                @csrf  
                @include('idea.ideaform')
            </form>
        </div>
    </div>
</x-app-layout>