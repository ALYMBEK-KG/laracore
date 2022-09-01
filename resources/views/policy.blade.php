<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            {{ __('Privacy Policy') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto p-4 text-center">
        <x-jet-application-logo class="block h-14 w-auto mx-auto my-4" />
        <div class="mx-auto p-4 prose rounded shadow-md bg-light-darker">{!! $policy !!}</div>
    </div>
</x-app-layout>
