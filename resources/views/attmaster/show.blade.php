<x-bslayout>
    <x-slot:heading>
        KNP Inkhawm ni : {{ date_format(date_create($attmaster->kaini),'d-m-Y') }}
    </x-slot:heading>
    <div class="container">
        <x-card>
            <x-card-body>
                <x-table>
                    <tr>
                        <th>Bial</th>
                        <th>Hming ziak</th>
                        <th>Kai</th>
                        <th>Kai lo</th>
                        <th>Damlo</th>
                        <th>Zin</th>
                        <th>Hostel</th>
                    </tr>
                    @foreach(App\Models\Bial::orderBy('bial')->get() as $b)
                    <tr>
                        <td><a href="{{ route('attmaster.att.create',['attmaster'=>$attmaster->id,'bial_id'=>$b->bial]) }}">Bial {{ $b->bial }}-na</a></td>
                        <td>{{ $b->hmingziak($attmaster) }}</td>
                        <td>{{ $b->kai($attmaster) }}</td>
                        <td>{{ $b->kailo($attmaster) }}</td>
                        <td>{{ $b->damlo($attmaster) }}</td>
                        <td>{{ $b->zin($attmaster) }}</td>
                        <td>{{ $b->hostel($attmaster) }}</td>
                    </tr>
                    @endforeach
                    <tr>
                        <th>Total</th>
                        <th>{{ $attmaster->hmingziak() }}</th>
                        <th>{{ $attmaster->kai() }}</th>
                        <th>{{ $attmaster->kailo() }}</th>
                        <th>{{ $attmaster->damlo() }}</th>
                        <th>{{ $attmaster->zin() }}</th>
                        <th>{{ $attmaster->hostel() }}</th>
                    </tr>
                </x-table>
            </x-card-body>
        </x-card>
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