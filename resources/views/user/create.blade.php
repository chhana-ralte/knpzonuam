<x-bslayout>
    <x-slot:heading>
        New User
    </x-slot:heading>
    <div class="container">
        <form method="post" action="/user">
            @csrf
            <x-card>
                <x-card-body>
                    <div class="form-group row p-2">
                        <label for="name" class="col col-md-4">
                            Name
                        </label>
                        <div class="col col-md-8">
                            <input type="text" class="form-control" name="name" placeholder="Name" required>
                            <x-form-error name='name' />
                        </div>
                    </div>
                    <div class="form-group row p-2">
                        <label for="username" class="col col-md-4">
                            Username
                        </label>
                        <div class="col col-md-8">
                            <input type="text" class="form-control" name="username" placeholder="Username" :value="old('username')" required>
                            <x-form-error name='username' />
                        </div>
                    </div>
                    <div class="form-group row p-2">
                        <label for="password" class="col col-md-4">
                            Password
                        </label>
                        <div class="col col-md-8">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                            <x-form-error name='password' />
                        </div>
                    </div>
                    <div class="form-group row p-2">
                        <label for="role" class="col col-md-4">
                            Roles
                        </label>
                        <div class="col col-md-8">
                            @foreach(App\Models\Role::orderBy('level','desc')->get() as $r)
                                <input type="checkbox" name="role[]" value="{{ $r->id }}">
                                <label>{{ $r->role }}</label>
                                <br>
                            @endforeach
                        </div>
                    </div>

                    <div class="form-group row p-2">
                        <label for="bial" class="col col-md-4">
                            Bial
                        </label>
                        <div class="col col-md-8">
                            @foreach(App\Models\Bial::orderBy('bial')->get() as $b)
                                <input type="checkbox" name="bial[]" value="{{ $b->id }}">
                                <label>{{ $b->bial }}</label>
                                <br>
                            @endforeach
                        </div>
                    </div>

                </x-card-body>
                <x-card-footer>
                    <div class="col col-md-4">
                        
                    </div>
                    <div class="form-group row p-2">
                        <div class="col col-md-8">
                            <a class="btn btn-outline-secondary" href="/user">Cancel</a>
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                    </div>
                </x-card-footer>
            </x-card>
        </form>
    </div>
</x-bslayout>