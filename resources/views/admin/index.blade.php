@extends('layout.userpage')

@section('content')
<center>
<h2>Registered Users</h2>
<!--<img src="{{ asset('storage/test.jpg') }}"/>-->
<div>
<a href="{{ route('users.create') }}"><button>Add User</button></a>
</div>
<table>
    <tr>
        <th>Profile</th>
        <th>Name</th>
        <th>Email</th>
        <th>Action</th>
    <!--Retrieving and showing of data from database-->    
    </tr>
    @foreach($data as $value)
    <tr>
            <th><img style="width:50px;height:50px;" src="/storage/profile/{{ $value->profile }}"/></th>
            <td><a href="{{ route('admin.show', $value->id) }}">{{ $value -> name }}</a></td>
            <td>{{ $value -> email }}</td>
        
           
            <td>
    
            <a href ="{{ route('users.edit', $value->id) }}"/><button>Edit</button></a>&nbsp;
             
            <form action="{{ route('users.destroy', $value->id) }}" method="POST" onsubmit="ConfirmDelete()">
                {{ method_field('DELETE') }}
                {{csrf_field()}}
                <button type="submit"/>DELETE</button>
            </form>   
            </td>

    </tr>
    @endforeach
</table>
</center>
<script>
        function ConfirmDelete(){
        
        if(!confirm("Are You Sure to delete this"))
        event.preventDefault();
        }
</script>
@endsection