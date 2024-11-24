<x-layout>
    <section class="  space-y-5 p-5">
        <x-section-title>
            Post A Job
        </x-section-title>

        <x-forms.form method="POST" action="/jobs">
            <x-forms.input name="title" label="Title" placeholder="Web Developer" />

            <x-forms.input name="salary" label="Salary" placeholder="$50,000" />

            <x-forms.input name="location" label="Location" placeholder="Remote" />
            <x-forms.select name="schedule" label="Schedule">
                <option selected>Full Time</option>
                <option>Part Time</option>
                <option>Gig</option>
            </x-forms.select>

            <x-forms.input name="url" label="URL" placeholder="https://pixel-position.com/jobs" />
            <x-forms.checkbox name="featured" label="Feature (Costs Extra)" />

            <x-forms.divider />

            <x-forms.input name="tags" label="Tags (Comma separated)" placeholder="Frontend, Backend, Fullstack" />

            <x-forms.button>Create Account</x-forms>
        </x-forms.form>
    </section>
</x-layout>
