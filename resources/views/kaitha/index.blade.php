<x-bslayout>
    <x-slot:heading>
        2024 KNP memberte kai dan
    </x-slot:heading>

    <div class="container p-3">
        <div class="card">
            <div class="card-body">
                <table class="table table-striped">
                    <throw>
                        <th>Sl</th>
                        <th>Hming</th>
                        <th>Nu/Pa hming</th>
                        <th>Bial</th>
                        
                    </throw>
                    <?php 
                        $sl=1;
                        $kaizat++;
                    ?>
                    @foreach($lists as $list)
                        @if($list->count != $kaizat)
                        <tr>
                            <th colspan=4>Vawi : {{ $list->count }} kai</th>
                        </tr>
                        @endif
                        <?php
                            if($list->count != $kaizat){
                                $kaizat = $list->count;
                                $sl=1;
                            }
                                
                        ?>
                        <tr>
                            <td>{{ $sl++ }}</td>
                            <td><a href='/kaitha/{{ $list->id }}'>{{ $list->name }}</a></td>
                            <td>{{ $list->father }}</td>
                            <td>{{ $list->bial_id }}</td>
                            
                        </tr>

                    @endforeach
                </table>
            </div>
        </div>
    </div>
</x-bspayout>