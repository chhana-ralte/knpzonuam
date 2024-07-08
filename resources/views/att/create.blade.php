<x-bslayout>
    <x-slot:heading>
        Hming lamna
    </x-slot:heading>
    <div class="container">
        <h3>{{ $attmaster->kaini }} Hming lamna
            @if(isset($bial))
                (Bial {{ $bial->bial }}-na)
            @endif
        </h3>
        <div class="row">
            <form method="post" action="{{ route('attmaster.att.store',$attmaster->id) }}" id="create-form">
                @csrf
                <input type=hidden name=bial_id value='{{ $bial->id }}'>
                <x-table>
                    <tr>
                        <th>Sl</th><th>Hming</th><th>kai</th><th>kai lo</th>
                    </tr>
                    <?php $sl=1 ?>
                    @foreach($members as $m)
                    <tr>
                        <td>{{ $sl++ }}</td>
                        <td>{{ $m->name }}</td>
                        <td>
                            <?php
                                $checked = isset($atts[$m->id]) && $atts[$m->id] == 'P'?' checked ':'';
                            ?>
                            <label for='{{ "id_" . $m->id }}'>Kai</label>
                            <input type='radio' name='{{ "id_" . $m->id }}' id='{{ "id_" . $m->id }}' value='P' {{ $checked }}>
                        </td>
                        <td>
                            <?php
                                $checked = isset($atts[$m->id]) && $atts[$m->id] == 'X'?' checked ':'';
                            ?>
                            <label for='{{ "idx_" . $m->id }}'>Kai lo</label>
                            <input type='radio' name='{{ "id_" . $m->id }}' id='{{ "idx_" . $m->id }}' value='X' {{ $checked }}>
                        </td>
                    </tr>
                    @endforeach
                </x-table>
            </form>
        </div>
        <div class="row">
            <x-button type="submit" form="create-form">Update</x-button>
        </div>
    </div>
</x-layout>