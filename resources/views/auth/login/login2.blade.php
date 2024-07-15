<x-bslayout>
    <x-slot:heading>
        Login page
    </x-slot:heading>

    <form method='post' action='/login'>
    @csrf
        <x-card>
            <x-card-header>
                {{ __('Login') }}
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
                        <input class="form-control" type="text" name="username" :value="old(username)" required/>
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
            </x-card-body>
            <x-card-footer>
                <button class="btn btn-primary form-control" type="submit">Login</button>
            </x-card-footer>
        </x-card>
    </form>
</x-bslayout>