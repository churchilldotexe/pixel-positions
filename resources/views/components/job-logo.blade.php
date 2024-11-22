@props(['width' => 42])

<img src="http://picsum.photos/seed/{{ rand(0, 100000) }}/{{ $width }}" alt="job logo" loading="lazy"
    decoding="async" class="rounded-lg" />
