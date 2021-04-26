<!doctype html>
<html>
    <head>
    
    </head>
    <body>
        <form action="/dologin" method="post">
            <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
            Name:<input type="text" name="name">
            <br>
            Password:<input type="password" name="password">
            <br>
            <input type="submit" value="Log In">
            
        
        </form>



    </body>
</html>