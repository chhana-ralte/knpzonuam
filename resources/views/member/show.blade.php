<x-bslayout>
    <x-slot:heading>
        {{ $member->name }} chanchin tlangpui
    </x-slot:heading>
    <dd class="mt-2 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
        <div>
            <div class="px-4 sm:px-0">
                <h3 class="text-base font-semibold leading-7 text-gray-900">Member Information</h3>
            </div>
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
                    <div class="col col-sm-3">Pianni</div>
                    <div class="col col-sm-5">{{ $member->dob }}</div>
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
                
            </div>
        </div>
    </dd>
    <div class="mt-6 flex items-center justify-center gap-x-6">
        <x-button type='delete' form="delete-form">DELETE</x-button>
        <x-button href='/member/{{$member->id}}/edit'>Edit</x-button>
    </div>
    <form id='delete-form' action='/member/{{ $member->id }}' method='post' onsubmit="return confirm('I delete duh tak tak em?');" class='hidden'>
        @csrf
        @method('DELETE')
    </form>

</x-bslayout>
