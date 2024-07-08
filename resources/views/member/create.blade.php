<x-bslayout>
  <x-slot:heading>
        Entry
    </x-slot:heading>
<div class="container">
  <form method='post' action='/member'>
    @csrf
    <div class="space-y-12">
      <div class="border-b border-gray-900/10 pb-12">
        <h2 class="text-base font-semibold leading-7 text-gray-900">Profile</h2>
        <p class="mt-1 text-sm leading-6 text-gray-600">This information will be displayed publicly so be careful what you share.</p>

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
            <input type="text" class="form-control" name='name' id="name" placeholder="Hming" :value="old(name)" required>
            <x-form-error name='name' />
          </div>
        </div>

        <div class="form-group row p-2">
          <div class="col col-sm-3">
            <label for="father">Nu/Pa hming</label>
          </div>
          <div class="col col-sm-4">
            <input type="text" class="form-control" name='father' id="father" placeholder="Nu/Pa hming" required>
            <x-form-error name='father' />
          </div>
        </div>

        <div class="form-group row p-2">
          <div class="col col-sm-3">
            <label for="name">Pianni</label>
          </div>
          <div class="col col-sm-4">
            <input type="date" class="form-control" name='dob' id="dob" placeholder="Pianni">
            <x-form-error name='dob' />
          </div>
        </div>

        <div class="form-group row p-2">
          <div class="col col-sm-3">
            <label for="name">Bial</label>
          </div>
          <div class="col col-sm-4">
            <select class="form-control" name='bial' id="bial" placeholder="Bial">
              @for($i=1;$i<10;$i++)
                <option value='{{$i}}' {{isset($_GET['bial']) && $_GET['bial'] == $i?' selected ':'' }}>Bial {{ $i }}-na</option>
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
            <input type="text" class="form-control" name='address' id="address" placeholder="Awmna hmun vel">
            <x-form-error name='address' />
          </div>
        </div>

        <div class="form-group row p-2">
          <div class="col col-sm-3">
            <label for="name">Details</label>
          </div>
          <div class="col col-sm-4">
            <textarea class="form-control" name='details' id="details" placeholder="Details"></textarea>
            <x-form-error name='details' />
          </div>
        </div>


    </div>

    <div class="mt-6 flex items-center justify-end gap-x-6">
      <x-button type="a" href="/member">Cancel</x-button>
      <x-button type='submit'>Save</x-button>
    </div>
  </form>
</div>
</x-bslayout>