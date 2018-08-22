@extends('layout.userpage')

@section('content')
 <!--Retrieving and showing of data from database-->  
        <table class="ui celled table">
            <thead>
                <tr><th colspan="3">
                    <h4><center>Registered Users</center></h4>
                        </th></tr>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                        <tbody>
                            <tr>
                                    @foreach($data as $value)  
                            </tr>
                            <tr>
                                <td>{{ $value -> name }}</td>
                                <td>{{ $value -> email }}</td>
                                <td> <form action="{{ route('admin.destroy', $value->id) }}" method="POST">
                                    {{ method_field('DELETE') }}
                                    {{csrf_field()}}
                                    <div class="ui large buttons">
                                        <button class="ui google plus button" type="submit"/>DELETE</button> 
                                        <div class="ui or"></div>
                                        <a class="ui facebook button" href ="{{ route('admin.edit', $value->id) }}"/>EDIT</a>&nbsp;
                                        <div class="ui or"></div>
                                        <a class="ui green button" href="{{ route('admin.create') }}">Add User</a></td>
                                 
                                    </form>
                                </div>                                    
                            </tr>
                          
                        </tbody>
        <table>
        
             
             
    @endforeach 
@endsection