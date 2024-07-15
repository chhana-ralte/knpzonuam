<x-bslayout>
    <x-slot:heading>
        Search
    </x-slot:heading>
    <form method='get' action='/searchresult'>
    @csrf
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">{{ __('Search') }}</div>

                        <div class="card-body">
                            @if (isset($message))
                            <div class='alert alert-warning'>
                                {{ $message }}
                            </div>
                            @endif

                            <div class="form-group row p-3">
                                <div class="col col-md-8">
                                    <input class="form-control" name="search" placeholder="Search">
                                </div>
                            </div>
                            <div class="form-group row p-3">
                                <div class="col col-md-8">
                                    <button class="btn btn-primary" type="submit">Search</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</x-bslayout>