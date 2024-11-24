<x-layout>
    <section class="  space-y-5 p-5">
        <x-section-title>
            Register
        </x-section-title>

        <x-forms.form method="POST" action="/register" enctype="multipart/form-data">
            <x-forms.input name="name" label="Name" />

            <x-forms.input name="email" label="Email" type="email" />

            <x-forms.input name="password" label="Password" type="password" />

            <x-forms.input name="password_confirmation" label="Password Confirmation" type="password" />

            <x-forms.divider />

            <x-forms.input name="employer" label="Employer" />

            <x-forms.input name="logo" label="Employer Logo" type="file" />

            <x-forms.button>Create Account</x-forms>
        </x-forms.form>
    </section>
</x-layout>
