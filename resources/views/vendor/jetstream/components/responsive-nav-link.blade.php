@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block pl-3 pr-4 py-2 border-l-4 border-primary-lighter text-base font-medium text-primary-lighter hover:bg-light-darker dark:hover:bg-dark-lighter'
            : 'block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium hover:border-secondary-lighter hover:bg-light-darker dark:hover:bg-dark-lighter';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
