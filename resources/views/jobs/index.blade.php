<x-layout>
    <div class="space-y-5 p-5">

        <section class="text-center space-y-5 p-6  ">
            <h1 class="text-4xl font-bold ">
                Let's Find You A Great Job
            </h1>
            <form>
                <input type="text" class="bg-white/5 p-4 placeholder-white/25 rounded-xl max-w-screen-md w-full"
                    placeholder="I'm looking for..." />
            </form>
        </section>

        <section class="space-y-5">
            <x-section-heading>Top Jobs</x-section-heading>

            <div class="grid grid-cols-3 gap-4">
                @foreach ($featured as $job)
                    <x-job-cards :$job />
                @endforeach
            </div>
        </section>

        <section class="space-y-5">
            <x-section-heading>Tags</x-section-heading>
            <div class="flex gap-2 flex-wrap">
                @foreach ($tags as $tag)
                    <x-tag variant="large">{{ $tag->name }}</x-tag>
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
