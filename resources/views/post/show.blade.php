<x-bslayout>
    <x-slot:heading>
        Post
    </x-slot:heading>
    <div class="container">
        <x-card>
            <x-card-header>
                <h4 align=center>{{ $post->subject }}</h4>
            </x-card-header>
            <x-card-body>
                @csrf
                <div class="form-group row">
                    <div class="col">
                        {!! $post->content !!}
                    </div>
                </div>
            </x-card-body>
            <x-card-footer>
                <div class="form-group">
                    <a class="btn btn-outline-secondary" href="/post">Back</a>
                    @can('edit',$post)
                    <a class="btn btn-secondary" href="/post/{{$post->id}}/edit">Edit</a>
                    <button type="submit" class="btn btn-danger" form="delete-form">Delete</button>
                    <form method="post" action="/post/{{$post->id}}" id="delete-form" type="hidden" onsubmit="return confirm('I delete duh tak tak em?')">
                        @csrf
                        @method('delete')
                    </form>
                    @endif
                </div>
            </x-card-footer>
        </x-card>
    </div>
</x-bslayout>
