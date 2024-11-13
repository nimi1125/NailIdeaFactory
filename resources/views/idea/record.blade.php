<x-app-layout>
    <div class="py-12">
        <div class="max-w-6xl mx-auto">
        <h3 class="titH3 pattaya mb-3">New Idea Recored</h3>
        </div>
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 py-12 bg-white rounded-md">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                
            </form>
        </div>
    </div>
</x-app-layout>