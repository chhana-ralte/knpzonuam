<x-bslayout>
    <x-slot:heading>
        Welcome to KNP Zonuam website
    </x-slot:heading>
    <div class="container">
        <x-table>
            <tr>
                <th>Bial</th><th>Member zat</th>
            </tr>
            <?php $total=0 ?>
            @foreach($bials as $b)
                <tr>
                    <td><a href="{{ route('bial.show',$b->bial) }}">Bial {{ $b->bial }}-na</a></td>
                    <td>{{ $b->members->where('deleted',0)->count() }}</td>
                </tr>
                <?php $total += $b->members->where('deleted',0)->count() ?>
            @endforeach
            <tr>
                <th>Total</th><th>{{ $total }}</th>
            </tr>
        </x-table>
    </div>
</x-bspayout>