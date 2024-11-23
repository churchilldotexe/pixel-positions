<x-layout>
    <section class="  space-y-5 p-5">
        <x-section-title>
            Register
        </x-section-title>

        <x-forms.form>
            <x-forms.field name="name" :label="false">
                <x-forms.input name="name" label="Name" />
            </x-forms.field>

            <x-forms.field name="email" :label="false">
                <x-forms.input name="email" label="Email" type="email" />
            </x-forms.field>

            <x-forms.field name="password" :label="false">
                <x-forms.input name="password" label="Password" type="password" />
            </x-forms.field>

            <x-forms.field name="password" :label="false">
                <x-forms.input name="password_confirmation" label="Password Confirmation" type="password" />
            </x-forms.field>

            <x-forms.divider />

            <x-forms.field name="employer" :label="false">
                <x-forms.input name="employer" label="Employer" />
            </x-forms.field>

            <x-forms.field name="employer-logo" :label="false">
                <x-forms.input name="employer-logo" label="Employer Logo" type="file" />
            </x-forms.field>

            <x-forms.button>Create Account</x-forms>
        </x-forms.form>
    </section>
</x-layout>
