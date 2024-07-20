<x-bslayout>
    <x-slot:heading>
        Logs
    </x-slot:heading>

    <div class="container p-3">
        <div class="card">
        @foreach(App\Models\Log::orderBy('created_at')->get() as $log)
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        {{ $log->created_at }} {{ $log->user->username }}
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    </div>
</x-bspayout>