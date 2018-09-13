<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--Style for Login-->
        <link rel="stylesheet" href="<?php echo asset('css/register.css')?>" type="text/css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.3/semantic.min.css">  
        <link rel="stylesheet" href="{{mix('css/app.css')}}"> 
    
        
    </head>
<body>
  
<button id="modalBtn" class="button">Click Me!</button>
  <div id="simpleModal" class="modal">
    <div class="modal-content">
    <i class="close icon" id="closeBtn"></i>
    <p></p>
    <div class="header">
      Profile Picture
    </div>
    <div class="image content">
      <div class="ui medium image">
        <img src="/images/avatar/large/chris.jpg">
      </div>
      <div class="description">
        <div class="ui header"></div>
        <p><a href="https://www.gravatar.com" target="_blank">gravatar</a> image associated with your registered e-mail address.</p>
        <p></p>
      </div>
    </div>
    <div class="actions">
      <div class="ui black deny button">
        Nope
      </div>
      <div class="ui positive right labeled icon button">
        Yep, that's me
        <i class="checkmark icon"></i>
      </div>
    </div>
  </div>
</div>




  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.13/semantic.min.js"></script>
  <script src="{{ asset('js/modal.js') }}"></script>
</body>