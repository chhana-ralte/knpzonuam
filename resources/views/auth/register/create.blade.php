<x-layout>
  <x-slot:heading>
        User Registration
    </x-slot:heading>

<form method='post' action='/register/'>
  @csrf
  <div class="space-y-12">
    <div class="border-b border-gray-900/10 pb-12">
      <h2 class="text-base font-semibold leading-7 text-gray-900">Details</h2>
      <p class="mt-1 text-sm leading-6 text-gray-600">Enter your details.</p>
<!--      
      @if ($errors->any())
        <div class='error'>
          <ul>
            @foreach ($errors->all() as $error)
              <li> {{ $error }} </li>
            @endforeach
          </ul>
        </div>
      @endif
-->
      <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
      <x-form-field>
          <x-form-label for="name">Hming</x-form-label>
          <div class="mt-2">
              <x-form-input type="text" name="name" id="name" placeholder="Name"/>
              <x-form-error name='name' />
          </div>
      </x-form-field>

      <x-form-field>
          <x-form-label for="email">email</x-form-label>
          <div class="mt-2">
            <x-form-input type="email" name="email" id="email" placeholder="email"/>
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

</x-layout>