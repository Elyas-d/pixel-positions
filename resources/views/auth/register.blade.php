<x-layout>
    <x-page-heading class="mt-10 mb-10">Register</x-page-heading>
    <x-forms.form method="POST" action="/register" enc="multipart/form-data">
        <x-forms.input label="Name" name="name"/>
        <x-forms.input label="Email" name="email" type="email"/>
        <x-forms.input label="Password" name="password" type="password"></x-forms.input>
        <x-forms.input label="Password Conformation" name="password_confirmation" type="password"/>
        
        <x-forms.divider/>

        <x-forms.input label="Employer Name" name="employer"/>
        <x-forms.input label="Employer Logo" name="logo" type="file"/>

        <x-forms.button>Create Account</x-forms.button>
    </x-forms.form>
</x-layout>