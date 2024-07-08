<x-bslayout>
    <x-slot:heading>
        KNP Zonuam Memberte
    </x-slot:heading>
    <?php $sl=1 ?>
    <x-table>
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