
@extends('layout.userpage')
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <!--Style for Login-->
        
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.3/semantic.min.css">  
        <link rel="stylesheet" href="<?php echo asset('css/admin.css')?>" type="text/css">
        <link rel="stylesheet" href="{{mix('css/app.css')}}"> 
</head>
>>>>>>> origin/status

@section('content')


 <!--Retrieving and showing of data from database-->  


        <table class="ui celled table">
            <thead>
                <tr><th colspan="3">
                    <div class="item aligned registered user">
                    <h4><center>Registered Users<a class="ui large inverted secondary button" href="{{ route('admin.create') }}">Add User</a>
                    </center></h4>
                    
                        </th></tr>
                        <tr>
                            <th>Profile Name</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                        <tbody>
                                
                             @foreach($data as $value)  
                                
                            <tr>
                                    <td><img style="width:50px;height:50px;" src="/storage/profile/{{ $value->profile }}"/>
                                   <a href="{{ route('users.show', $value->id) }}">{{ $value -> name }}</a></td></span>
                                    <td>{{ $value -> email }}</td>
                            
                                <td>  <form action="{{ route('users.destroy', $value->id) }}" method="POST" onsubmit="ConfirmDelete()">
                                        {{ method_field('DELETE') }}
                                        {{csrf_field()}}
                                      
                                    <div colspan="3"  class="ui large buttons">
                                        <button class="ui button" type="submit"/>DELETE</button> 
                                        <div class="ui black or"></div>
                                        <a class="ui button" href ="{{ route('users.edit', $value->id) }}"/>EDIT</a>&nbsp;
                                        </td>
                                    
                                    </form>
                                
                                </div>                                    
                            </tr>
                            @endforeach 
        </tbody>
    <table>
        
<script>
        function ConfirmDelete(){
        
        if(!confirm("Are You Sure to delete this"))
        event.preventDefault();
        }
</script>

@endsection