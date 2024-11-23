<x-layout>
    <section class="  space-y-5 p-5">
        <x-section-title>
            Register
        </x-section-title>

        <x-forms.form>
            <x-forms.field name="email" :label="false">
                <x-forms.input name="email" label="Email" type="email" />
            </x-forms.field>

            <x-forms.field name="password" :label="false">
                <x-forms.input name="password" label="Password" type="password" />
            </x-forms.field>

            <x-forms.button>Login</x-forms>
        </x-forms.form>
    </section>
</x-layout>
