@props(['job'])

<x-card-article>
    <div class="self-start text-xs">{{ $job->employer->name }}</div>
    <div class="p-2 space-y-4">
        <a href="{{ $job->url }}" target="__blank">
            <h2 class="font-bold group-hover:text-blue-600">
                {{ $job->title }}
            </h2>
        </a>
        <p class="text-xs"> {{ $job->schedule }} - from {{ $job->salary }} </p>
    </div>
    <div class="flex justify-between items-center">
        <ul class="flex gap-2">
            @foreach ($job->tags as $tag)
                <x-tag :tagId="$tag->id">{{ $tag->name }}</x-tag>
            @endforeach
        </ul>
        <x-job-logo :employer="$job->employer" />
    </div>
</x-card-article>
