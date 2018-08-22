@extends('layout.userpage')

@section('content')
<center>
    <div class="container white">
        <h2>Add Users</h2>
            <form method="post" action={{ route('admin.store') }}>
            {{csrf_field()}}

    <input type="text" name="name" placeholder="Name" /><br>
    <input type="email" name="email" placeholder="Email" /><br>
    <input type="password" name="password" placeholder="Password" /><br>
   
    <button type="submit" name="add">Add</button>
    
</form>

<a href ="{{ route('admin.index') }}"/><button>Cancel</button></a>
</div>
</center>

@endsection