<x-bslayout>
    <x-slot:heading>
        Hming lamna
    </x-slot:heading>
    <div class="container">
        <h3>{{ $member->name }} Kai dan
            @if(isset($bial))
                (Bial {{ $member->bial->bial }}-na)
            @endif
        </h3>
        <div class="row">
            <form method="post" action="{{ route('member.att.store',$member->id) }}" id="create-form">
                @csrf
                
                <x-table>
                    <tr>
                        <th>Sl</th><th>Kaini</th><th>kai</th><th>kai lo</th>
                    </tr>
                    <?php $sl=1 ?>
                    @foreach($attmasters as $am)
                    <tr>
                        <td>{{ $sl++ }}</td>
                        <td>{{ $am->kaini }}</td>
                        <td>
                            <?php
                                $checked = isset($atts[$am->id]) && $atts[$am->id] == 'P'?' checked ':'';
                            ?>
                            <label for='{{ "id_" . $am->id }}'>Kai</label>
                            <input type='radio' name='{{ "id_" . $am->id }}' id='{{ "id_" . $am->id }}' value='P' {{ $checked }}>
                        </td>
                        <td>
                            <?php
                                $checked = isset($atts[$am->id]) && $atts[$am->id] == 'X'?' checked ':'';
                            ?>
                            <label for='{{ "idx_" . $am->id }}'>Kai lo</label>
                            <input type='radio' name='{{ "id_" . $am->id }}' id='{{ "idx_" . $am->id }}' value='X' {{ $checked }}>
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