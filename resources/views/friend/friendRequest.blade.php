@extends('layout.userpage')

@section('content')
    <table border="1">
        <tr>
            <th></th>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
    @foreach($data as $friends)
       
        <tr>
            <td><img src="/storage/profile/{{ $friends->profile}}" width="50px" height="50px" /></td>
            <td><a href="">{{ $friends->name}}</a></td>
            <td>{{ $friends->email}}</td>
            <td><a href="{{ route('accept', $friends->id)}}">Accept</a>
        </tr>
     
    @endforeach
    </table>
@endsection