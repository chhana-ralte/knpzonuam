<x-bslayout>
    <x-slot:heading>
        Welcome to KNP Zonuam website
    </x-slot:heading>
    <div class="container p-3">
        <div class="row p-3">
            <div class="col col-sm-3">
                Bial
            </div>
            <div class="col col-sm-9">
            @foreach($bials as $b)
                @if($b->id == $bial->id)
                    <x-button type="a" href="{{ route('bial.att.index', $b->id) }}" class="btn-secondary text-light">{{ $b->bial }}</x-button>
                @else
                    <x-button type="a" href="{{ route('bial.att.index', $b->id) }}">{{ $b->bial }}</x-button>
                @endif
            @endforeach
            </div>
        </div>
    </div>
    <div class="container p-3">
        <x-table>
            <tr>
                <th>Sl</th><th>Hming</th>
                @foreach($attmasters as $am)
                    @auth
                        <th><a href="{{ route('attmaster.att.create',[$am->id,'bial_id'=>$bial->id]) }}">{{ date_format(date_create($am->kaini), 'd-M') }}</a></th>
                    @else
                        <th>{{ date_format(date_create($am->kaini), 'd-M') }}</th>
                    @endif
                @endforeach
            </tr>
            <?php $sl=1 ?>
            @foreach($members as $m)
            <tr>
                @auth
                    @if($m->deleted)
                        <td><i>NA</i></td>
                        <td><s><i>{{ $m->name }}</i></s></td>
                    @else
                        <td>{{ $sl++ }}</td>
                        <td><x-a href="{{ route('member.att.create', $m->id) }}">{{ $m->name }}</x-a></td>
                    @endif
                @else
                    <td>{{ $sl++ }}</td>
                    <td>{{ $m->name }}</td>
                @endif
                @foreach($attmasters as $am)
                    @if(isset($atts[$am->id][$m->id]))
                        <td align=center>{{ $atts[$am->id][$m->id]}}</td>
                    @else
                        <td>-</td>
                    @endif
                @endforeach
            </tr>
            @endforeach
        </x-table>
    </div>
</x-bslayout>