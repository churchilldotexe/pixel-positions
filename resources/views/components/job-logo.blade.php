@props(['employer', 'width' => 42])

<img src="http://picsum.photos/seed/{{ rand(0, 100000) }}/{{ $width }}" alt="job logo" loading="lazy"
    decoding="async" class="rounded-lg" />

{{-- // if using asset --}}
{{-- <img src="{{ asset($employer->logo) }}" alt="job logo" loading="lazy" decoding="async" class="rounded-lg" /> --}}
