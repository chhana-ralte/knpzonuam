@props(['type' => "a"])

@if($type == "a")
    <{{$type}} {{ $attributes->merge(['class' => 'btn btn-outline-secondary'])}}>{{ $slot }}</{{$type}}>
@elseif($type == "submit")
    <button {{ $attributes->merge(['class' => 'btn btn-primary', 'type' => 'submit'])}}>{{ $slot }}</button>
@elseif($type == "delete")
    <button {{ $attributes->merge(['class' => 'btn btn-danger', 'type' => 'submit'])}}>{{ $slot }}</button>
@else
    <{{$type}} {{ $attributes->merge(['class' => 'btn btn-primary'])}}>{{ $slot }}</{{$type}}>
@endif