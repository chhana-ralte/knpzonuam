<x-bslayout>
    <x-slot:heading>
        {{ $member->name }} chanchin tlangpui
    </x-slot:heading>
    <dd class="mt-2 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
        <div>

            <div class="container">
                <div class="row p-2 border">
                    <div class="col col-sm-3">Hming</div>
                    <div class="col col-sm-5">{{ $member->name }}</div>
                </div>
                <div class="row p-2 border">
                    <div class="col col-sm-3">Nu/Pa hming</div>
                    <div class="col col-sm-5">{{ $member->father }}</div>
                </div>
                <div class="row p-2 border">
                    <div class="col col-sm-3">Phone</div>
                    <div class="col col-sm-5">{{ $member->phone }}</div>
                </div>
                <div class="row p-2 border">
                    <div class="col col-sm-3">Pianni</div>
                    <div class="col col-sm-5">{{ date_format(date_create($member->dob),'d-M') }}</div>
                </div>
                <div class="row p-2 border">
                    <div class="col col-sm-3">SS Pawl awmna</div>
                    <div class="col col-sm-5">{{ $member->sspawl }}</div>
                </div>
                <div class="row p-2 border">
                    <div class="col col-sm-3">Awmna bial</div>
                    <div class="col col-sm-5">Bial {{ $member->bial->bial }}-na</div>
                </div>
                <div class="row p-2 border">
                    <div class="col col-sm-3">Awmna bawr vel</div>
                    <div class="col col-sm-5">{{ $member->address }}</div>
                </div>
                <div class="row p-2 border">
                    <div class="col col-sm-3">Details</div>
                    <div class="col col-sm-5">{{ $member->details }}</div>
                </div>
                <div class="row p-2 border">
                    <div class="col col-sm-3"></div>
                    <div class="col col-sm-5">
                        <a class="btn btn-outline-secondary" href='/bial/{{$member->bial->id}}'>Back</a>
                        @can('edit',$member)
                            <x-button href='/member/{{$member->id}}/edit'>Edit</x-button>
                        @endcan
                        @can('editAtt',$member)
                            <x-button href='/member/{{$member->id}}/att/create'>Edit Att</x-button>
                        @endcan
                        @can('delete',$member)
                            @if($member->deleted)
                                <x-button type='delete' form="undo-delete-form">UNDO DELETE</x-button>
                            @else
                                <x-button type='delete' form="delete-form">DELETE</x-button>
                            @endif
                            <form id='delete-form' action='/member/{{ $member->id }}' method='post' onsubmit="return confirm('I delete duh tak tak em?');" class='hidden'>
                                @csrf
                                @method('DELETE')
                                <input type='hidden' name='delete' value='true'>
                            </form>
                            <form id='undo-delete-form' action='/member/{{ $member->id }}' method='post' onsubmit="return confirm('I recover duh tak tak em?');" class='hidden'>
                                @csrf
                                @method('DELETE')
                                <input type='hidden' name='delete' value='false'>
                            </form>
                        @endcan

                    </div>
                </div>
            </div>
        </div>
    </dd>
</x-bslayout>
