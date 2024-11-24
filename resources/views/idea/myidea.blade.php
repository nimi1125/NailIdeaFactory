<x-app-layout>
    <x-slot name="cover">
        <h2 class="font-semibold text-white leading-tight pattaya titH2">
            MyIdea
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-6xl mx-auto">
            @if (session('status'))
                <div class="alert alert-status p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400">
                    {{ session('status') }}
                </div>
            @endif
            @include('idea.ideaItem')
        </div>
    </div>
</x-app-layout>