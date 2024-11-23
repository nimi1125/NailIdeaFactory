<x-app-layout>
    <x-slot name="cover">
        <h2 class="font-semibold text-white leading-tight pattaya titH2">
            MyIdea
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-6xl mx-auto">
            @include('idea.ideaItem')
        </div>
    </div>
</x-app-layout>