<x-bslayout>
  <x-slot:heading>
        Edit member
    </x-slot:heading>
<div class="container">
  <form method='post' action='/member/{{$member->id}}'>
    @csrf
    @method('patch')
    <div class="space-y-12">
      <div class="border-b border-gray-900/10 pb-12">

        @if ($errors->any())
          <div class='alert alert-warning'>
            <ul>
              @foreach ($errors->all() as $error)
                <li> {{ $error }} </li>
              @endforeach
            </ul>
          </div>
        @endif

        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

        <div class="form-group row p-2">
          <div class="col col-sm-3">
            <label for="name">Hming</label>
          </div>
          <div class="col col-sm-4">
            <input type="text" class="form-control" name='name' id="name" placeholder="Hming" value="{{ $member->name }}">
            <x-form-error name='name' />
          </div>
        </div>

        <div class="form-group row p-2">
          <div class="col col-sm-3">
            <label for="father">Nu/Pa hming</label>
          </div>
          <div class="col col-sm-4">
            <input type="text" class="form-control" name='father' id="father" placeholder="Nu/Pa hming" value="{{ $member->father }}">
            <x-form-error name='father' />
          </div>
        </div>

        <div class="form-group row p-2">
          <div class="col col-sm-3">
            <label for="phone">Phone</label>
          </div>
          <div class="col col-sm-4">
            <input type="text" class="form-control" name='phone' id="phone" placeholder="Phone" value="{{ $member->phone }}">
            <x-form-error name='phone' />
          </div>
        </div>


        <div class="form-group row p-2">
          <div class="col col-sm-3">
            <label for="name">Pianni</label>
          </div>
          <div class="col col-sm-4">
            <input type="date" class="form-control" name='dob' id="dob" placeholder="Pianni"  value="{{ $member->dob }}">
            <x-form-error name='dob' />
          </div>
        </div>

        <div class="form-group row p-2">
          <div class="col col-sm-3">
            <label for="name">SS Pawl awmna</label>
          </div>
          <div class="col col-sm-4">
            <select class="form-control" name='sspawl' id="sspawl" placeholder="Bial">
              <option value="Beginner" {{ $member->sspawl=='Beginner'?' selected ':'' }}>Beginner</option>
              <option value="Primary" {{ $member->sspawl=='Primary'?' selected ':'' }}>Primary</option>
              <option value="Junior" {{ $member->sspawl=='Junior'?' selected ':'' }}>Junior</option>
              <option value="Baptisma" {{ $member->sspawl=='Baptisma'?' selected ':'' }}>Baptisma</option>
              <option value="Intermediate" {{ $member->sspawl=='Intermediate'?' selected ':'' }}>Intermediate</option>
              <option value="Senior A" {{ $member->sspawl=='Senior A'?' selected ':'' }}>Senior A</option>
            </select>
            <x-form-error name='sspawl' />
          </div>
        </div>

        
        <div class="form-group row p-2">
          <div class="col col-sm-3">
            <label for="name">Bial</label>
          </div>
          <div class="col col-sm-4">
            <select class="form-control" name='bial' id="bial" placeholder="Bial">
              @for($i=1;$i<10;$i++)
                <option value='{{$i}}' {{ $member->bial->bial==$i?' selected ':''}}>Bial {{ $i }}-na</option>
              @endfor
            </select>
            <x-form-error name='bial' />
          </div>
        </div>

        <div class="form-group row p-2">
          <div class="col col-sm-3">
            <label for="name">Awmna hmun vel</label>
          </div>
          <div class="col col-sm-4">
            <input type="text" class="form-control" name='address' id="address" placeholder="Awmna hmun vel" value="{{ $member->address }}">
            <x-form-error name='address' />
          </div>
        </div>

        <div class="form-group row p-2">
          <div class="col col-sm-3">
            <label for="name">Details</label>
          </div>
          <div class="col col-sm-4">
            <textarea class="form-control" name='details' id="details" placeholder="Details">{{ $member->details }}</textarea>
            <x-form-error name='details' />
          </div>
        </div>
        <div class="form-group row p-2">
          <div class="col col-sm-3">
            
          </div>
          <div class="col col-sm-4">
            <x-button type="a" href="/member/{{ $member->id }}">Cancel</x-button>
            <x-button type='submit'>Update</x-button>
          </div>
        </div>

    </div>

  </form>
</div>
</x-bslayout>