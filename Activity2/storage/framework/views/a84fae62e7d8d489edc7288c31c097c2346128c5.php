<!doctype html>
<html>
    <head>
    
    </head>
    <body>
    
    <?php $__env->startSection('title', 'Login Page'); ?>
    <?php $__env->startSection('content'); ?>

        <form action="/dologin" method="post">
            <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
            Name:<input type="text" name="name">
            <br>
            Password:<input type="password" name="password">
            <br>
            <input type="submit" value="Log In">
            
        
        </form>

    <?php $__env->stopSection(); ?>

    </body>
</html>
<?php echo $__env->make('layouts.appmaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\mjpra\Documents\GCU\CST 256\Activity2\resources\views/login2.blade.php ENDPATH**/ ?>