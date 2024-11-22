@props([
    /** @var 'small'|'large'  */
    'variant' => 'small',
])

<a @class([
    'rounded-full bg-white/10 hover:bg-white/20 transition-colors duration-300 px-2 text-center',
    'text-md px-3 py-1' => $variant === 'large',
])>{{ $slot }}</a>
