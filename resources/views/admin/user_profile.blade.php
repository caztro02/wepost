@extends('layout.userpage')

@section('content')
<head>
        <title>WePOST</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.3/semantic.min.css">  
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo asset('css/profile.css')?>" type="text/css">
        <link rel="stylesheet" href="{{mix('css/app.css')}}">
        </head>


    <div class="ui form">
        <div class="ui left floated segment">
            <h3 class="ui left aligned header">My Profile</h3>
            <div class="ui card">
                <div class="image">
                    <img style="height:200px; width:100%;" src="/storage/profile/{{ $data->profile }}">
                </div>
                <div class="content">
                    <h2 class="ui left aligned header">{{ $data->name }}</a>
                        <div class="meta">
                            <span class="date">{{ "$data->email" }}</span>
                            <div class="description">
                                Kristy is an art director living in New York.
                            </div>
                        </div>
                </div>
                <div class="extra content">
                    <a>
                        <h5 class="left floated icon">
                            <i class="user black icon"></i>
                            22 Friends
                        </h5>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="ui form">
        <div class="ui pusher">
        <div class="ui left floated padded segment white">
            <div class="ui blue segment container profile">
                <div class="ui left corner label">
                    <i class=" blue heart icon"></i>
                </div>
                <div class="ui form">
                    <div style="margin-left:2em;" class="ui left floated image">
                        <h2 class="ui header">
                            <img class="ui avatar image" style="width:50px; height:50px" src="/storage/profile/index.png"/>
                            <a href="">Name</a>
                        </h2>
                    </div>
                </div>
                <div style="float:right">
                        <a href =""/><i class="ui large grey edit icon"></i></a>&nbsp;
                    </div>
                    
                    <div style="float:right">
                        <form action="" method="POST">
                            {{ method_field('DELETE') }}
                            {{csrf_field()}}
                            <button type="submit"  class="ui icon button">
                                    <i class="trash icon"></i>
                            </button>
                        </form>
                    </div> 
                    
                   <div class="ui clearing divider"></div>
                    
                        <div class="ui message content">
                            <h4 style="float:left; color:black;">Content</h4>
                                  <p style="margin-top:8%; float:right">Date Created: Date Editted:</p>   
                                </div>
           
         </div>
        </div>
    </div>
    






















           
                   <!-- <i class="reply large icon"></i>
                    <a href ="{{ route('users.edit', $data->id) }}"/><button class="user large plus icon"></button></a>
                </div>
            </div>
            <div class="ui grid">
                <div class="column">
                    <div style="margin-left: 10px"class="ui left floated segment">
                        <div class="ui fluid card">
                            <div class="image">
                                <img style="height:200px; width:200px" src="/storage/profile/{{ $data->profile }}">
                            </div>
                            <div class="content">
                                <a class="header">{{ $data->name }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="ui large form">
                        <div class="ui right floated segment">
                            <div class="inline field">
                                <label for="name">Name</label>
                                <input type="text" name="name" placeholder="Name" value="{{ $data->name }}" readonly/>
                            </div>
                                 
                            <div class="inline field">
                                <label for="name">Email</label>
                                <input type="email" name="email" placeholder="Email" value="{{ "$data->email" }}"readonly/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
            
  
    <div class="ui clearing divider"></div>

      <div class="ui blue segment container">
            <div class="ui left corner label">
                    <i class=" red heart icon"></i>
                  </div>
          <div class="ui form">
             
        
    

       
            <div style="margin-left:2em;" class="ui left floated image">
                <h2 class="ui header">
                    <img class="ui avatar image" style="width:50px; height:50px" src="/storage/profile/index.png"/>
                    <a href="">Name</a>
                </h2>
            </div>
        </div>
        
 
              
        
        
            <div style="float:right">
                <a href =""/><i class="ui large grey edit icon"></i></a>&nbsp;
            </div>
            
            <div style="float:right">
                <form action="" method="POST">
                    {{ method_field('DELETE') }}
                    {{csrf_field()}}
                    <button type="submit"  class="ui icon button">
                            <i class="trash icon"></i>
                    </button>
                </form>
            </div> 
            
           <div class="ui clearing divider"></div>
            
                <div class="ui message">
                    <h4 style="float:left; color:black;">Content</h4>
                          <p style="margin-top:20%; float:right">Date Created: Date Editted:</p>   
            
                             
                    
                <!-- display the post content -->
                        
                     

 <!-- display the post creation date--> 

      

    
        
        
        
        <!--<img style="width:200px;height:200px;" src="/storage/profile/{{ $data->profile }}"/><br>
        <label for="name">Name</label><br>
        <input type="text" name="name" placeholder="Name" value="{{ $data->name }}" readonly/><br>
        <label for="email">Email</label><br>
        <input type="email" name="email" placeholder="Email" value={{ "$data->email" }} readonly/><br>
        
        <a href ="{{ route('users.edit', $data->id) }}"/><button>Edit</button></a>
        <a href ="{{ route('users.index') }}"/><button>Back</button></a>-->
      
@endsection