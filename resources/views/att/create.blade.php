<x-bslayout>
    <x-slot:heading>
    <a href="/attmaster/{{$attmaster->id}}">{{ date_format(date_create($attmaster->kaini), 'd-M-y') }}</a> hming lamna
    </x-slot:heading>
    <div class="container">

        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link">Bial</a>
            </li>
        @foreach(App\Models\Bial::orderBy('bial')->get() as $b)
            <li class="nav-item">
                <a class="nav-link {{$b->id==$bial->id?'active':''}}" href="{{ route('attmaster.att.create', ['attmaster'=>$attmaster->id,'bial_id'=>$b->id]) }}">{{ $b->bial }}</a>
            </li>
        @endforeach
        </ul>     
        
        <div class="row">
            <form method="post" action="{{ route('attmaster.att.store',$attmaster->id) }}" id="create-form">
                @csrf
                <input type=hidden name=bial_id value='{{ $bial->id }}'>
                <x-table>
                    <tr>
                        <th>Sl</th><th>Hming</th><th>Kai</th><th>Kai lo</th><th>Dam lo</th><th>Zin</th><th>Hostel</th>
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
                            @can('edit',$m)
                                <?php 
                                    if($attmaster->permitted())
                                        $disabled = '';
                                    else
                                        $disabled = ' disabled ';
                                
                                ?>
                            @else
                                <?php $disabled = ' disabled ' ?>
                            @endcan

                            <label for='{{ "idp_" . $m->id }}'>P</label>
                            <input type='radio' name='{{ "id_" . $m->id }}' id='{{ "idp_" . $m->id }}' value='P' {{ $checked }} {{ $disabled }}>
                        </td>
                        <td>
                            <?php
                                $checked = isset($atts[$m->id]) && $atts[$m->id] == 'X'?' checked ':'';
                            ?>
                            <label for='{{ "idx_" . $m->id }}'>X</label>
                            <input type='radio' name='{{ "id_" . $m->id }}' id='{{ "idx_" . $m->id }}' value='X' {{ $checked }} {{ $disabled }}>
                        </td>
                        <td>
                            <?php
                                $checked = isset($atts[$m->id]) && $atts[$m->id] == 'D'?' checked ':'';
                            ?>
                            <label for='{{ "idd_" . $m->id }}'>D</label>
                            <input type='radio' name='{{ "id_" . $m->id }}' id='{{ "idd_" . $m->id }}' value='D' {{ $checked }} {{ $disabled }}>
                        </td>
                        <td>
                            <?php
                                $checked = isset($atts[$m->id]) && $atts[$m->id] == 'Z'?' checked ':'';
                            ?>
                            <label for='{{ "idz_" . $m->id }}'>Z</label>
                            <input type='radio' name='{{ "id_" . $m->id }}' id='{{ "idz_" . $m->id }}' value='Z' {{ $checked }} {{ $disabled }}>
                        </td>
                        <td>
                            <?php
                                $checked = isset($atts[$m->id]) && $atts[$m->id] == 'H'?' checked ':'';
                            ?>
                            <label for='{{ "idh_" . $m->id }}'>H</label>
                            <input type='radio' name='{{ "id_" . $m->id }}' id='{{ "idh_" . $m->id }}' value='H' {{ $checked }} {{ $disabled }}>
                        </td>
                    </tr>
                    @endforeach
                </x-table>
            </form>
        </div>
        <div class="form-group row">
            <div class="col col-sm-4">
                <a class="btn btn-outline-secondary" href="{{ route('bial.att.index',$bial->id) }}">Cancel</a>
                @can('manage',$bial)
                    @if($attmaster->attpermitted()->status || auth()->user()->level > 3)
                        <x-button type="submit" form="create-form">Update</x-button>
                    @endif
                @endcan
            </div>
        </div>
    </div>
</x-layout>