@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block px-4 py-2 text-sm leading-5 text-primary-lighter hover:bg-light-darker dark:hover:bg-dark-lighter'
            : 'block px-4 py-2 text-sm leading-5 hover:bg-light-darker dark:hover:bg-dark-lighter';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
