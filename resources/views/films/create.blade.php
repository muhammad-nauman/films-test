<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Films') }}
            <a href="{{ route('films.index') }}" class="text-sm font-black py-1 px-3 rounded-full bg-purple-400 text-white">View All</a>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <livewire:show-films />
            </div>
        </div>
    </div>
</x-app-layout>