<x-bslayout>
    <x-slot:heading>
        KNP Inkhawm nite
    </x-slot:heading>
    <div class="container">
        <div class="row p-2 border bg-dark text-light">
            @auth
                @if(auth()->user()->level >3)
                <div class="col col-sm-3">
                    <a class="btn btn-primary" href="/attmaster/create">Kaini siamna</a>
                </div>
                @endif
            @endauth

            <div class="col col-sm-3">
                Bial-wise Report
            </div>
            <div class="col col-sm-6">
                <div class="btn-group">
                @foreach(\App\Models\Bial::orderBy('bial')->get() as $b)
                    <x-button type="a" href="/bial/{{ $b->id }}/att">{{ $b->bial }}</x-button>
                @endforeach
                </div>
            </div>
        </div>
        @auth
        @foreach($attmasters as $am)
        <div class="row p-2">
            <div class="col col-sm-3">
                <a href="/attmaster/{{ $am->id }}">{{ date_format(date_create($am->kaini),'d-m-y') }}</a>
            </div>
            @if(auth()->user()->level > 3)
                <div class="col col-sm-3">
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="{{ $am->id }}" name="attpermit[]" value="yes" {{$am->attpermitted()->status?' checked ':''}}>
                </div>
<!--
                @if(isset($am->attpermit->status) && $am->attpermit->status)
                        <button type="button" class="btn btn-primary btn-sm">Deactivate</button>
                    @else
                        <button type="button" class="btn btn-secondary btn-sm">Activate</button>
                    @endif
-->
                </div>
            @endif
            <div class="col col-sm-6">
                @foreach(\App\Models\Bial::orderBy('bial')->get() as $b)
                    <x-button type="a" href="/attmaster/{{ $am->id }}/att/create?bial_id={{ $b->bial }}">{{ $b->bial }}</x-button>
                @endforeach
            </div>
        </div>
        @endforeach
        @endif
    </div>
<script>
$(document).ready(function(){
    $.ajaxSetup({
        headers : {
            'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
        }
    });
    $("input.form-check-input").click(function(){
        //alert($(this).attr('id'));
        $.ajax({
            url : "/ajaxtest",
            type : "post",
            data : {
                attmaster_id : $(this).attr('id')
            },
            success : function(data,status){
                //alert(data);
            },
            error : function(){
                alert("error");
            }
        })
    });
});
</script>
</x-bslayout>