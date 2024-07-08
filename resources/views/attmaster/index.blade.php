<x-bslayout>
    <x-slot:heading>
        KNP Inkhawm nite
    </x-slot:heading>
    <div class="container">
        <div class="row p-2 border bg-dark text-light">
            <div class="col col-sm-3">
                Bial-wise Report
            </div>
            <div class="col col-sm-9">
                @foreach(\App\Models\Bial::all() as $b)
                    <x-button type="a" href="/bial/{{ $b->id }}/att">{{ $b->bial }}</x-button>
                @endforeach
            </div>
        </div>
    @foreach($attmasters as $am)
        <div class="row p-2">
            <div class="col col-sm-3">
                {{ $am->kaini }}
            </div>
            <div class="col col-sm-9">
                @foreach(\App\Models\Bial::all() as $b)
                    <x-button type="a" href="/attmaster/{{ $am->id }}/att/create?bial_id={{ $b->bial }}">{{ $b->bial }}</x-button>
                @endforeach
            </div>
        </div>
    @endforeach
    </div>
</x-bslayout>