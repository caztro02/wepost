<!doctype html>
<html>
    <head>
        <link rel="stylesheet" href="<?php echo asset('css/profile.css')?>" type="text/css">
    </head>

    <body>
        <div class="padding">
        <div class="profile-pic">
         <h3> Profile Pic Here </h3>
         <div class="container">
             <form>
                 <p>
                 <label for="name">Name:</label>
                 <input name="name" id="name" v-model="name">
                </p><br>
             
                <p>
                    <label for="name">Email:</label>
                    <input name="email" id="email" v-model="email">
                </p><br>

                    <p>
                        <label for="name">Password:</label>
                        <input name="password" id="password" v-model="password">
                    </p>                                              
                </form>
         </div>
    </div>
</div>
    </body>

</html>