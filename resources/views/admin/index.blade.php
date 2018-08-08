@extends('layout.userpage')

@section('content')
<center>
<h2>Registered Users</h2>
<div>
<a href="{{ route('admin.create') }}"><button>Add User</button></a>
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
            <td><img style="width:10px;height:10px;" src="{{ asset('storage/index.png') }}" /></td>
            <td>{{ $value -> name }}</td>
            <td>{{ $value -> email }}</td>
        
           
            <td>
    
            <a href ="{{ route('admin.edit', $value->id) }}"/><button>Edit</button></a>&nbsp;
             
            <form action="{{ route('admin.destroy', $value->id) }}" method="POST">
                {{ method_field('DELETE') }}
                {{csrf_field()}}
                <button type="submit"/>DELETE</button>
            </form>   
            </td>

    </tr>
    @endforeach
</table>
</center>
@endsection