<x-card-article variant="wide">
    {{-- <article class="flex gap-4 rounded-xl justify-center bg-white/5 p-4"> --}}
    <div>
        <x-job-logo :width="90" />
    </div>
    <div class="flex-1 flex flex-col">
        <p class=" py-1 text-xs"> GovExec</p>
        <h2 class="flex-1 text-xl font-bold">Full stack Laravel Developer</h2>
        <p class="text-xs">Full time - from $60,000</p>
    </div>
    <div class="flex flex-col justify-between items-center">
        <div class="self-end">
            <a class="rounded-full bg-zinc-950 border border-white/10 hover:bg-white/20 transition-colors duration-300 px-2 py-1 text-center"
                href="">Remote</a>
            <a class="rounded-full bg-zinc-950 border border-white/10 hover:bg-white/20 transition-colors duration-300 px-2 py-1 text-center"
                href="">22h</a>
        </div>
        <div class="flex gap-2">
            <x-tag>Frontend</x-tag>
            <x-tag>Backend</x-tag>
            <x-tag>Api</x-tag>
        </div>
    </div>
</x-card-article>
{{-- </article> --}}
