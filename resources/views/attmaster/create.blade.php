<x-bslayout>
  <x-slot:heading>
        Entry
    </x-slot:heading>
<div class="container">
  <form method='post' action='/attmaster'>
    @csrf
    <div class="space-y-12">
      <div class="border-b border-gray-900/10 pb-12">
        <h2 class="text-base font-semibold leading-7 text-gray-900">KNP inkhawm ni dah luhna</h2>
        <p class="mt-1 text-sm leading-6 text-gray-600">KNP inkhawm ni hetah hian dah luh tur a ni e.</p>

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
            <label for="name">Kai ni</label>
          </div>
          <div class="col col-sm-4">
            <input type="date" class="form-control" name='kaini' id="kaini" placeholder="Kai ni" required>
            <x-form-error name='kaini' />
          </div>
        </div>

        <div class="form-group row p-2">
          <div class="col col-sm-3">
            <label for="name">Details</label>
          </div>
          <div class="col col-sm-4">
            <textarea class="form-control" name='remark' id="remark" placeholder="Remark"></textarea>
            <x-form-error name='remark' />
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