<button {{ $attributes->merge(['type' => 'submit', 'class' => 'px-3 py-2 bg-yellow-500 rounded-md font-bold text-white
    active:bg-yellow-400
    transition']) }}>
    {{ $slot }}
</button>