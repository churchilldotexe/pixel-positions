<x-layout>
    <section class="space-y-5 p-5">
        <x-section-title>Results</x-section-title>
        <div>
            <article class="space-y-5">

                @foreach ($jobs as $job)
                    <x-job-cards-wide :$job />
                @endforeach
            </article>
        </div>
    </section>
</x-layout>
