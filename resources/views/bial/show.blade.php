<x-bslayout>
    <x-slot:heading>
        KNP Zonuam Memberte
    </x-slot:heading>
    <div>
    <div class="form-group">
        <div class="form-group row p-3">
            <div class="col col-sm-3">Bial</div>
            <div class="col col-sm-6">
                <div class="btn-group me-2">
                @foreach(App\Models\Bial::all() as $b)
                    @if($b->id == $bial->id)
                        <x-button type="a" class="btn-secondary text-light" href="/bial/{{ $b->id }}">{{ $b->bial }}</x-button>
                    @else
                        <x-button type="a" href="/bial/{{ $b->id }}">{{ $b->bial }}</x-button>
                    @endif
                @endforeach
                </div>
            </div>
            @auth
            <div class="col col-sm-3">
                <x-button href="{{ route('member.create',['bial'=>$bial->id]) }}">Member thar</x-button>
            </div>
            @endif
        </div>
    </div>
    <?php $sl=1 ?>
    <x-table>
    @if(count($members) > 0)
        <tr>
            <th>Sl</th>
            <th>Hming</th>
            <th>Pa/Nu Hming</th>
        </tr>
        @foreach ($members as $member)
            <tr>
                @if($member->deleted)
                    <td><i>NA</i></td>
                    <td><a href="/member/{{$member->id}}" class="block hover:bg-gray-100 py-2 px-4"><s><i>{{$member->name}}</i></s></a></td>
                @else
                    <td>{{ $sl++ }}</td>
                    <td><a href="/member/{{$member->id}}" class="block hover:bg-gray-100 py-2 px-4">{{$member->name}}</a></td>
                @endif
                <td>{{$member->father}}</td>
            </tr>
        @endforeach
    @else
        <div class="alert alert-warning">
            Member an awm lo tlat mai. 'Member Thar' button atang hian a dah luh theih e.
        </div>
    @endif
    </x-table>
    <div>
        {{$members->links()}}
    </div>
</x-bslayout>