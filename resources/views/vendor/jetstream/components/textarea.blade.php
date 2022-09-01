@props(['disabled' => false])

<textarea
    {{ $disabled ? 'disabled' : '' }}
    {!! $attributes->merge(['class' => 'rounded-md shadow-sm bg-light dark:bg-dark border-secondary-lighter focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50']) !!}
>{{ $slot }}</textarea>
