<x-bslayout>
    <x-slot:heading>
        Search result for "{{ $str }}"
    </x-slot:heading>
    <?php $sl=1 ?>
    <x-table>
        @if (count($members) <1 )
            <div class="alert alert-info col-sm-3">
                Not found!
            </div>
        @endif
    @foreach ($members as $member)
        <tr>
            <td>{{ $sl++ }}</td>
            <td><a href="/member/{{$member->id}}" class="block hover:bg-gray-100 py-2 px-4">{{$member->name}}</a></td>
            <td>{{$member->father}}</td>
        </tr>

    @endforeach
    </x-table>
    <div>
        {{$members->links()}}
    </div>
</x-bslayout>