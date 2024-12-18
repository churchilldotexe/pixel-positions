<x-layout>
    <div class="space-y-5 p-5">

        <section class="space-y-5 p-6  ">
            <x-section-title>
                Let's Find You A Great Job
            </x-section-title>
            <x-forms.form action="/search">
                <x-forms.input name="q" :label="false" placeholder="Web Developer..." />
            </x-forms.form>
        </section>

        <section class="space-y-5">
            <x-section-heading>Top Jobs</x-section-heading>

            <div class="grid grid-cols-2 gap-4">
                @foreach ($featured as $job)
                    <x-job-cards :$job />
                @endforeach
            </div>
        </section>

        <section class="space-y-5">
            <x-section-heading>Tags</x-section-heading>
            <div class="flex gap-2 flex-wrap">
                @foreach ($tags as $tag)
                    <x-tag :tagId="$tag->id" variant="large">{{ $tag->name }}</x-tag>
                @endforeach
            </div>
        </section>

        <section class="space-y-5">
            <x-section-heading>Find Jobs</x-section-heading>
            <div>
                <article class="space-y-5">

                    @foreach ($jobs as $job)
                        <x-job-cards-wide :$job />
                    @endforeach
                </article>
            </div>
        </section>
    </div>
</x-layout>
