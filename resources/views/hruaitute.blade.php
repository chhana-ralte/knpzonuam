<x-bslayout>
    <x-slot:heading>
        Welcome to KNP Zonuam website
    </x-slot:heading>
    <div class="container p-3">
    @foreach(\App\Models\Bial::all() as $b)
        <x-button type="a" href="/bial/{{ $b->id }}">{{ $b->bial }}</x-button>
    @endforeach
    </div>
    <div class="container p-3">
        <div class="row">
            <div class="col col-sm-3 p-2">
                Convener
            </div>
            <div class="col col-sm-5">
                Rbt. C.Lalbiakchhawni
            </div>
        </div>
        <div class="row">
            <div class="col col-sm-3 p-2">
                Asst. Convener
            </div>
            <div class="col col-sm-5">
                Rbt. J.Lalvohbika
            </div>
        </div>
        <div class="row">
            <div class="col col-sm-3 p-2">
                Secretary
            </div>
            <div class="col col-sm-5">
                Pu R.Lalchhanhima
            </div>
        </div>
        <div class="row">
            <div class="col col-sm-3 p-2">
                Asst. Secretary
            </div>
            <div class="col col-sm-5">
                Nl. Pc. Vanlalhruaii
            </div>
        </div>
        <div class="row">
            <div class="col col-sm-3 p-2">
                Treasurer
            </div>
            <div class="col col-sm-5">
                Pi C.Lalbiaknungi
            </div>
        </div>
        <div class="row">
            <div class="col col-sm-3 p-2">
                Fin. Secretary
            </div>
            <div class="col col-sm-5">
                Nl. Lalrinawmi Hrahsel
            </div>
        </div>
        <div class="row">
            <div class="col col-sm-3 p-2">
                Committee members
            </div>
            <div class="col col-sm-5">
                <p>Pi Kristazi K.Notlia</p>
                <p>Pi K.Vanlalkhawngaihzuali</p>
                <p>Nl. H.Vanlalruati</p>
                <p>Nl. H.D.Lalpekdiki</p>
                <p>Tv. F.Lalvensanga</p>
                <p>Nl. Lalrinawmi Hrahsel</p>
                <p>Nl. Ruth Lalremruati Jongte</p>
                <p>Pu C.Zorammawia (Conductor)</p>
                <p>Upa R.Lalnunmawii (Sr. Adviser)</p>
                <p>Upa K.Tlanthanga (Sr. Adviser)</p>
                
            </div>
        </div>
    </div
</x-bspayout>