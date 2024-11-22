@props(['variant' => 'base'])

<article @class([
    'flex rounded-xl justify-center bg-white/5 p-4 group transition-colors duration-300',
    'flex-col text-center hover:border-blue-600 border border-transparent' =>
        $variant === 'base',
    'gap-4 hover:bg-slate-900/80' => $variant === 'wide',
])>
    {{ $slot }}
</article>
