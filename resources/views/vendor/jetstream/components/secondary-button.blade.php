<button {{ $attributes->merge(['type' => 'button', 'class' => 'inline-flex items-center px-4 py-2 bg-secondary border border-transparent rounded-md font-semibold text-xs text-light uppercase tracking-widest hover:bg-secondary-lighter focus:outline-none focus:border-secondary focus:ring focus:ring-secondary-lighter disabled:opacity-25 transition']) }}>
    {{ $slot }}
</button>
