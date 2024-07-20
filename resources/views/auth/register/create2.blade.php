<x-bslayout>
  <x-slot:heading>
        User Registration
    </x-slot:heading>

    <form method='post' action='/register/'>
    @csrf
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Register') }}</div>

                        <div class="card-body">
                            <div class="form-group row p-3">
                                <div class="col col-sm-4">
                                    <label for="name">Hming</label>
                                </div>
                                <div class="col col-sm-4">
                                    <input class="form-control" type="text" name="name" id="name" placeholder="Name" required :value="old(name)"/>
                                    <x-form-error name='name' />
                                </div>
                            </div>
                            <div class="form-group row p-3">
                                <div class="col col-sm-4">
                                    <label for="name">Username</label>
                                </div>
                                <div class="col col-sm-4">
                                    <input class="form-control" type="text" name="username" id="username" placeholder="Username" required :value="old(username)"/>
                                    <x-form-error name='username' />
                                </div>
                            </div>
                            <div class="form-group row p-3">
                                <div class="col col-sm-4">
                                    <label for="name">Password</label>
                                </div>
                                <div class="col col-sm-4">
                                    <input class="form-control" type="password" name="password" id="password" placeholder="Password" required/>
                                    <x-form-error name='password' />
                                </div>
                            </div>
                            <div class="form-group row p-3">
                                <div class="col col-sm-4">
                                    <label for="password_confirmation">Confirm Password</label>
                                </div>
                                <div class="col col-sm-4">
                                    <input class="form-control" type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password" required/>
                                    <x-form-error name='password_confirmation' />
                                </div>
                            </div>

                            <div class="form-group row p-3">
                                <div class="col col-sm-4">
                                    <label for="bials">Bial</label>
                                </div>
                                <div class="col col-sm-4">
                                    @foreach(App\Models\Bial::orderBy('bial')->get() as $b)
                                        <label for="bial_{{ $b->id }}">{{$b->bial}}</label>
                                        <input type="checkbox" name="bial[]" value="{{ $b->id }}">
                                    @endforeach
                                </div>
                            </div>

                            <div class="form-group row p-3">
                                <div class="col col-sm-4">
                                    
                                </div>
                                <div class="col col-sm-4">
                                    <a href="/" class="btn btn-outline-secondary">Cancel</a>
                                    <button type="submit" class="btn btn-primary">Register</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

</x-bslayout>