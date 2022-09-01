<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            {{ __('This page is not available') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto px-4 py-14 text-center">
        <div class="flex items-center justify-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                <path fill-rule="evenodd" d="M6.72 5.66l11.62 11.62A8.25 8.25 0 006.72 5.66zm10.56 12.68L5.66 6.72a8.25 8.25 0 0011.62 11.62zM5.105 5.106c3.807-3.808 9.98-3.808 13.788 0 3.808 3.807 3.808 9.98 0 13.788-3.807 3.808-9.98 3.808-13.788 0-3.808-3.807-3.808-9.98 0-13.788z" clip-rule="evenodd" />
            </svg>
            <h1 class="text-2xl">404 | {{ __('Not found') }}</h1>
        </div>
        <h2 class="text-sm">
            {{ __('The link you followed may be broken, or the page may have been removed') }}
        </h2>
    </div>
</x-app-layout>
