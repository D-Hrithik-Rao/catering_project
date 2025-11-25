<button {{ $attributes->merge(['type' => 'submit', 'class' => ' btn btn-primary rounded-pill py-2 px-5']) }}>
    {{ $slot }}
</button>