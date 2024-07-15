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
                        <th>Sl</th><th>Kaini</th><th>kai</th><th>kai lo</th><th>Dam lo</th><th>Zin</th><th>Hostel</th>
                    </tr>
                    <?php $sl=1 ?>
                    @foreach($attmasters as $am)
                    <tr>
                        <td>{{ $sl++ }}</td>
                        <td>{{ date_format(date_create($am->kaini), 'd-M') }}</td>
                        <td>
                            <?php
                                $checked = isset($atts[$am->id]) && $atts[$am->id] == 'P'?' checked ':'';
                            ?>
                            <label for='{{ "idp_" . $am->id }}'>Kai</label>
                            <input type='radio' name='{{ "id_" . $am->id }}' id='{{ "idp_" . $am->id }}' value='P' {{ $checked }}>
                        </td>
                        <td>
                            <?php
                                $checked = isset($atts[$am->id]) && $atts[$am->id] == 'X'?' checked ':'';
                            ?>
                            <label for='{{ "idx_" . $am->id }}'>Kai lo</label>
                            <input type='radio' name='{{ "id_" . $am->id }}' id='{{ "idx_" . $am->id }}' value='X' {{ $checked }}>
                        </td>
                        <td>
                            <?php
                                $checked = isset($atts[$am->id]) && $atts[$am->id] == 'D'?' checked ':'';
                            ?>
                            <label for='{{ "idd_" . $am->id }}'>Dam lo</label>
                            <input type='radio' name='{{ "id_" . $am->id }}' id='{{ "idd_" . $am->id }}' value='D' {{ $checked }}>
                        </td>
                        <td>
                            <?php
                                $checked = isset($atts[$am->id]) && $atts[$am->id] == 'Z'?' checked ':'';
                            ?>
                            <label for='{{ "idz_" . $am->id }}'>Zin</label>
                            <input type='radio' name='{{ "id_" . $am->id }}' id='{{ "idz_" . $am->id }}' value='Z' {{ $checked }}>
                        </td>
                        <td>
                            <?php
                                $checked = isset($atts[$am->id]) && $atts[$am->id] == 'H'?' checked ':'';
                            ?>
                            <label for='{{ "idh_" . $am->id }}'>Hostel</label>
                            <input type='radio' name='{{ "id_" . $am->id }}' id='{{ "idh_" . $am->id }}' value='H' {{ $checked }}>
                        </td>

                    </tr>
                    @endforeach
                </x-table>
            </form>
        </div>
        <div class="form-group row">
            <div class="col col-sm-4">
                <a class="btn btn-outline-secondary" href="{{ route('bial.att.index',$member->bial->id) }}">Cancel</a>
                <x-button type="submit" form="create-form">Update</x-button>
            </div>
        </div>
    </div>
</x-layout>