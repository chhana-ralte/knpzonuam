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
                    <th><a href="{{ route('attmaster.att.create',[$am->id,'bial_id'=>$bial->id]) }}">{{ $am->kaini }}</a></th>
                @endforeach
            </tr>
            <?php $sl=1 ?>
            @foreach($members as $m)
            <tr>
                <td>{{ $sl++ }}</td><td><x-a href="{{ route('member.att.create', $m->id) }}">{{ $m->name }}</x-a></td>
                @foreach($attmasters as $am)
                    @if(isset($atts[$am->id][$m->id]))
                        <td>{{ $atts[$am->id][$m->id]}}</td>
                    @else
                        <td>-</td>
                    @endif
                @endforeach
            </tr>
            @endforeach
        </x-table>
    </div>
</x-bslayout>