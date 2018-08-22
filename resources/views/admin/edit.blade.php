@extends('layout.userpage')

@section('content')
<center>
    
<h2>Add Users</h2>

<form method="post" action={{ route('admin.update', $data->email) }}>
    {{ method_field('PUT') }}
    {{csrf_field()}}

    <input type="text" name="name" placeholder="Name" value="{{ $data->name }}" /><br>
    <input type="email" name="email" placeholder="Email" value={{ "$data->email" }} /><br>
    
    <input type="password" name="password" placeholder="Password" value={{ "$data->password" }} /><br>
   
    <button type="submit" name="edit">Edit</button>
    
</form>
<div class="ui form">
<div class="ui middle aligned center aligned grid">
        <div class="column">
          <h2 class="ui teal image header">
            <img src="assets/images/logo.png" class="image">
            <div class="content">
              Log-in to your account
            </div>
          </h2>
          <form class="ui large form error">
            <div class="ui stacked segment">
              <div class="field error">
                <div class="ui left icon input">
                  <i class="user icon"></i>
                  <input name="email" placeholder="E-mail address" type="text">
                </div>
              </div>
              <div class="field error">
                <div class="ui left icon input">
                  <i class="lock icon"></i>
                  <input name="password" placeholder="Password" type="password">
                </div>
              </div>
              <div class="ui fluid large teal submit button">Login</div>
            </div>
      
            <div class="ui error message"><ul class="list"><li>Please enter a valid e-mail</li><li>Please enter your password</li><li>Your password must be at least 6 characters</li></ul></div>
      
          </form>
        </div>     


<a href ="{{ route('admin.index') }}"/><button>Cancel</button></a>
</center>

@endsection