<x-bslayout>
    <x-slot:heading>
        Thu post te
    </x-slot:heading>
    <div class="container">
        <x-card>
            <x-card-header>
                Welcome to KNP Zonuam thuziakte.
            </x-card-header>
            <x-card-body>
                <a class="btn btn-primary" href="/post/create">Post thar</a>
                <div class="list-group">
                @foreach($posts as $p)
                    <a href="/post/{{ $p->id }}" class="list-group-item">
                        <h5 class="list-group-item-heading">{{ $p->subject }}</h5>
                        <p class="list-group-item-text">Posted by <b>{{$p->user->username}}</b> on <i>{{date_format(date_create($p->created_at),'d-m-y')}}</i></p>
                    </a>
                @endforeach
                </div>
            </x-card-body>
            <x-card-footer>
                {{ $posts->links() }}
            </x-card-footer>
        </x-card>
    </div>
</x-bslayout>
