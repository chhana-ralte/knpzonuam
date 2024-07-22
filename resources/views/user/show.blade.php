<x-bslayout>
    <x-slot:heading>
        New User
    </x-slot:heading>
    <div class="container">
        <x-card>
            <x-card-body>
                <div class="form-group row p-2">
                    <label for="name" class="col col-md-4">
                        Name
                    </label>
                    <div class="col col-md-8">
                        <input type="text" class="form-control" name="name" placeholder="Name" value="{{ $user->name }}">
                    </div>
                </div>
                <div class="form-group row p-2">
                    <label for="username" class="col col-md-4">
                        Username
                    </label>
                    <div class="col col-md-8">
                        <input type="text" class="form-control" name="username" placeholder="Username" value="{{ $user->username }}">
                    </div>
                </div>

                <div class="form-group row p-2">
                    <label for="role" class="col col-md-4">
                        Roles
                    </label>
                    <div class="col col-md-8">
                        @foreach($user->roles as $r)
                            <label>{{ $r->role }}</label>
                            <br>
                        @endforeach
                    </div>
                </div>

                <div class="form-group row p-2">
                    <label for="bial" class="col col-md-4">
                        Bial
                    </label>
                    <div class="col col-md-8">
                        @foreach($user->bials as $b)
                            <label>Bial {{ $b->bial }}-na</label>
                            <br>
                        @endforeach
                    </div>
                </div>

            </x-card-body>
            <x-card-footer>
                <div class="col col-md-4">
                    
                </div>
                <div class="form-group row p-2">
                    <div class="col col-md-8">
                        <a class="btn btn-outline-secondary" href="/user">Back</a>
                        <a class="btn btn-secondary" href="/user/{{ $user->id }}/edit">Edit</a>
                        <button class="btn btn-danger" type="button" name="delete" id="{{ $user->id }}">Delete</button>
                    </div>
                </div>
            </x-card-footer>
        </x-card>
    </div>
<script>
$(document).ready(function(){
    $.ajaxSetup({
        headers : {
            'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
        }
    });
    $("button[name='delete']").click(function(){
        //alert($(this).attr('id'));
        if(confirm("I delete duh tak tak em?")){
            $.ajax({
                url : "/user/" + $(this).attr('id'),
                type : "delete",
                data : {
                    user_id : $(this).attr('id'),
                },
                success : function(data,status){
                    alert(data);
                    location.replace("/user");
                },
                error : function(){
                    alert("error");
                }
            })
        }
    });
});
</script>
</x-bslayout>