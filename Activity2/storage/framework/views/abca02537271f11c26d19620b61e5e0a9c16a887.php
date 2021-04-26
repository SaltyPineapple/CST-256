<!Doctype html>
<html>
    <head>
    </head>

    <body>
    
    <?php $__env->startSection('title', 'Login Page'); ?>
    <?php $__env->startSection('content'); ?>
        <?php if($user->getUsername() == 'mark'): ?>
            <h3>Mark you have logged in successfully.</h3>
        <?php else: ?>
            <h3>Someone besides mark logged in successfully.</h3>
        <?php endif; ?>
    <?php $__env->stopSection(); ?>
    </body>
</html>


<?php echo $__env->make('layouts.appmaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\mjpra\Documents\GCU\CST 256\Activity2\resources\views/loginPassedV2.blade.php ENDPATH**/ ?>