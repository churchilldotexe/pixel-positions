@props([
    /** @var 'small'|'large'  */
    'variant' => 'small',
    'tagId'
])
@php
    $defaults =[
    'class'=>"rounded-full bg-white/10 hover:bg-white/20 transition-colors duration-300 px-2 text-center {{ $variant === 'large' ? text-md px-3 py-1:'' }} ",
    'href' => url("/tags/$tagId")
    ];
@endphp

<a {{ $attributes($defaults) }} >{{ $slot }}</a>
