<x-bslayout>
    <x-slot:heading>
        User details
    </x-slot:heading>
    <div class="container">
        <x-card>
            <x-card-body>
                <x-card-header>
                    <a class="btn btn-primary" href="/user/create">Create new user</a>
                </x-card-header>
                <x-table>
                    <tr>
                        <th>Name</th>
                        <th>Username</th>
                        <th>Roles</th>
                        <th>Edit/Delete</th>
                    </tr>
                    @foreach($users as $u)
                        <tr>
                            <td><a href="/user/{{ $u->id }}">{{ $u->name }}</a></td>
                            <td>{{ $u->username }}</td>
                            <td>
                                @foreach($u->roles as $r)
                                    {{ $r->role }}
                                @endforeach
                            </td>
                            <td>
                                <div class="btn-group">
                                    <a class="btn btn-secondary" href="/user/{{ $u->id }}/edit">Edit</a>
                                    <button class="btn btn-danger" name="delete" id="{{ $u->id }}">Delete</button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </x-table>
            </x-card-body>
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