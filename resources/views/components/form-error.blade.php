@props(['name'])

@error($name)
    <p class="text-small text-danger red">{{ $message }}</p>
@enderror