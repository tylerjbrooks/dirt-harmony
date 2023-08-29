<button {{ $attributes->merge(['type' => 'button', 'class' => 'bg-cyan-700 hover:bg-cyan-600 text-white font-bold py-2 px-4 rounded']) }}>
    {{ $slot }}
</button>
