<x-bslayout>
    <x-slot:heading>
        {{$member->name}} kai dan
    </x-slot:heading>

    <div class="container p-3">
        <div class="card">
            <div class="card-body">
                <table class="table table-striped">
                    <throw>
                        <th>Sl</th>
                        <th>Kai ni</th>
                        <th>Remark</th>
                    </throw>
                    <?php 
                        $sl=1;
                    ?>
                    @foreach($list as $l)
                        <?php
                        switch($l->marking){
                            case 'P':
                                $marking = 'Kai';
                                break;
                            case 'X':
                                $marking = 'Kai lo';
                                break;
                            case 'D':
                                $marking = 'Dam lo';
                                break;
                            case 'Z':
                                $marking = 'Zin';
                                break;
                            case 'H':
                                $marking = 'Hostel';
                                break;                  
                        }
                        ?>
                        <tr>
                            <td>{{ $sl++ }}</td>
                            <td>{{ date_format(date_create($l->attmaster->kaini),'d-m-y') }}</a></td>
                            <td>{{ $marking }}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
            <div class="card-footer">
                <a class="btn btn-outline-secondary" href="/kaitha">Back</a>
            </div>
        </div>
    </div>
</x-bspayout>