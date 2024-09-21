<x-bslayout>
    <x-slot:heading>
        Search result for "{{ $str }}"
    </x-slot:heading>
    <div class="container">
    @if (count($members) <1 )
        <div class="alert alert-info">
            Not found!
        </div>
    @else
        <?php $sl=1 ?>
        <x-table>
            <tr>
            <th>Sl</th>
            <th>Hming</th>
            <th>Pa/Nu hming</th>
            <th>Bial</th>
            <th>Attendance</th>
        @foreach ($members as $member)
            <tr>
                <td>{{ $sl++ }}</td>
                <td><a href="/member/{{$member->id}}"   >{{$member->name}}</a></td>
                <td>{{$member->father}}</td>
                <td>{{$member->bial->bial}}</td>
                @can('edit',$member)
                    <td><x-button href='/member/{{$member->id}}/att/create'>Edit Att</x-button></td>
                @else
                    <td><x-button>Not editable</x-button></td>
                @endcan
            </tr>
        @endforeach
        </x-table>
        <div>
            {{$members->links()}}
        </div>
        
    @endif
    </div>
</x-bslayout>