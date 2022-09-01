<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-dark-lighter border border-transparent rounded-md font-semibold text-xs text-light uppercase tracking-widest hover:bg-dark-lightest focus:outline-none focus:border-dark focus:ring focus:ring-secondary-lighter disabled:opacity-25 transition']) }}>
    {{ $slot }}
</button>
