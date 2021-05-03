<!doctype html>
<html>
    <head>
    
    </head>
    <body>
    @extends('layouts.appmaster')
    @section('title', 'Login Page')
    @section('content')

        <form action="/dologin" method="post">
            <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
            Name:<input type="text" name="name">
            <?php echo "<br>"; echo $errors->first('name'); ?>
            <br>
            Password:<input type="password" name="password">
            
            <?php echo "<br>"; echo $errors->first('password'); ?>
            <br>
            <input type="submit" value="Log In">
            
        
        </form>

    @endsection

    </body>
</html>