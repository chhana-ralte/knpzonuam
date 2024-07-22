<x-bslayout>
    <x-slot:heading>
        New User
    </x-slot:heading>
    <div class="container">
        <form method="post" action="/user/{{ $user->id }}">
            @csrf
            @method('patch')
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
                            @foreach(App\Models\Role::orderBy('level','desc')->get() as $r)
                                <input type="checkbox" name="role" value="{{ $r->id }}" {{ $user->hasRole($r->role)?' checked ':'' }}>
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
                            @foreach(App\Models\Bial::orderBy('bial')->get() as $b)
                                <input type="checkbox" name="bial" value="{{ $b->id }}" {{ $user->managesBial($b)?' checked ':'' }}>
                                <label>{{ $b->bial }}</label>
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
                            <a class="btn btn-outline-secondary" href="/user">Cancel</a>
                            <button class="btn btn-primary" type="button" name="update" id="{{ $user->id }}">Update</button>
                        </div>
                    </div>
                </x-card-footer>
            </x-card>
        </form>
    </div>
<script>
$(document).ready(function(){
    $.ajaxSetup({
        headers : {
            'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
        }
    });
    $("button[name='update']").click(function(){
        //alert($('input[name="bial"]').count());
        let bial = []; 
        $("input:checkbox[name='bial']:checked").each(function() { 
            bial.push($(this).val()); 
        });
        let role = []; 
        $("input:checkbox[name='role']:checked").each(function() { 
            role.push($(this).val()); 
        });
        //alert(role.length);
        $.ajax({
            url : "/user/{{ $user->id }}",
            type : "patch",
            data : {
                user_id : {{ $user->id }},
                name : $('input[name="name"]').val(),
                username : $('input[name="username"]').val(),
                bial : bial,
                role : role
            },
            success : function(data,status){
                alert("Updated");
                location.replace("/user");
            },
            error : function(){
                alert("error");
            }
        })
    });
});
</script>
</x-bslayout>