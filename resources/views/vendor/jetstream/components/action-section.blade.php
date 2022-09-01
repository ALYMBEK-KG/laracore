<div {{ $attributes->merge(['class' => 'md:grid md:grid-cols-3 md:gap-6']) }}>
    <x-jet-section-title>
        <x-slot name="title">{{ $title }}</x-slot>
        <x-slot name="description">{{ $description }}</x-slot>
    </x-jet-section-title>

    <div class="mt-5 md:mt-0 px-4 py-5 sm:p-6 md:col-span-2 rounded shadow shadow-light-darkest dark:shadow-dark-lightest">
        {{ $content }}
    </div>
</div>
