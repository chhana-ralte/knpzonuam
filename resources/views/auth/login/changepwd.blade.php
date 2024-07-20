<x-bslayout>
    <x-slot:heading>
        Change Password
    </x-slot:heading>

    <form method='post' action='/changepwd'>
    @csrf
        <x-card>
            <x-card-header>
                {{ __('Change Password') }}
            </x-card-header>

            <x-card-body>
                @if(isset($message))
                    <div class="alert alert-warning">
                        {{ $message }}
                    </div>
                @endif
                <div class="form-group row p-3">
                    <div class="col col-md-4">
                        <label for="username">Username</label>
                    </div>
                    <div class="col col-md-8">
                        <input class="form-control" type="text" name="username" value="{{ auth()->user()->username }}" disabled/>
                        <x-form-error name='username' />
                    </div>
                </div>

                <div class="form-group row p-3">
                    <div class="col col-md-4">
                        <label for="password">Password</label>
                    </div>
                    <div class="col col-md-8">
                        <input class="form-control" type="password" name="password"/>
                        <x-form-error name='password' />
                    </div>
                </div>

                <div class="form-group row p-3">
                    <div class="col col-md-4">
                        <label for="password_confirmation">Confirm Password</label>
                    </div>
                    <div class="col col-md-8">
                        <input class="form-control" type="password" name="password_confirmation"/>
                        <x-form-error name='password_confirmation' />
                    </div>
                </div>
            </x-card-body>
            <x-card-footer>
                <button class="btn btn-primary form-control" type="submit">Change</button>
            </x-card-footer>
        </x-card>
    </form>
</x-bslayout>