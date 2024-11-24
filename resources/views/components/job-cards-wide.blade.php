@props(['job'])

<x-card-article variant="wide">
    <div>
        <x-job-logo :width="90" />
    </div>

    <div class="flex-1 flex flex-col">
        <p class=" py-1 text-xs">{{ $job->employer->name }}</p>
        <h2 class="flex-1 text-xl font-bold">{{ $job->title }}</h2>
        <p class="text-xs"> {{ $job->schedule }} - from {{ $job->salary }} </p>
    </div>

    <div class="flex flex-col justify-between items-center">
        <div class="self-end">
            <a class="rounded-full bg-zinc-950 border border-white/10 hover:bg-white/20 transition-colors duration-300 px-2 py-1 text-center"
                href="">{{ $job->location }}</a>
            <!-- TODO: date time  -->
            <a class="rounded-full bg-zinc-950 border border-white/10 hover:bg-white/20 transition-colors duration-300 px-2 py-1 text-center"
                href="">22h</a>
        </div>

        <div class="flex gap-2">

            @foreach ($job->tags as $tag)
                <x-tag :tagId="$tag->id">{{ $tag->name }}</x-tag>
            @endforeach
        </div>
    </div>
</x-card-article>
