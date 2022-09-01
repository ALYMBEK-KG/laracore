@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-b-2 border-primary-lighter font-medium leading-5 text-primary-lighter hover:bg-light-darker dark:hover:bg-dark-lighter'
            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent hover:border-secondary-lighter font-medium leading-5 hover:bg-light-darker dark:hover:bg-dark-lighter';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
