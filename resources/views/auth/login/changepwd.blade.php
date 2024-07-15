<x-bslayout>
  <x-slot:heading>
        Change Password
    </x-slot:heading>
<div class="container">
    <form method='post' action='/changepassword'>
    @csrf
    <div class="space-y-12">
        <div class="border-b border-gray-900/10 pb-12">
        <h2 class="text-base font-semibold leading-7 text-gray-900">Details</h2>
        <p class="mt-1 text-sm leading-6 text-gray-600">Enter your details.</p>
        @auth
            <h1>Guest</h1>
        @else
            <h1>Not Guest</h1>
        @endif
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <div class="form-group row p-2">
            <div class="col col-sm-3">
                <label for="name">Name</label>
            </div>
            <div class="col col-sm-6">
                <input type="text" name="name" id="name" placeholder="Name" disabled/>
            </div>
        </div>

        <x-form-field>
            <x-form-label for="email">email</x-form-label>
            <div class="mt-2">
                <x-form-input type="email" name="email" id="email" placeholder="email" disabled/>
                <x-form-error name='email' />
            </div>
            </x-form-field>
            
        <x-form-field>
            <x-form-label for="password">Password</x-form-label>
            <div class="mt-2">
                <x-form-input type="password" name="password" id="password" placeholder="Password"/>
                <x-form-error name='password' />
            </div>
        </x-form-field>

        <x-form-field>
            <x-form-label for="password_confirmation">Confirm Password</x-form-label>
            <div class="mt-2">
                <x-form-input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password"/>
                <x-form-error name='password_confirmation' />
            </div>
        </x-form-field>



    </div>

    <div class="mt-6 flex items-center justify-end gap-x-6">
        <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
        <x-form-button>Register</x-form-button>
    </div>
    </form>
    </div>
</x-bslayout>