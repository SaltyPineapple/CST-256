<html lang="en">
<head>
    <title><?php echo $__env->yieldContent('title'); ?></title>
</head>
<body>
<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div align="center">
        <?php echo $__env->yieldContent('content'); ?>
    </div>
<?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>
<?php /**PATH C:\Users\mjpra\Documents\GCU\CST 256\Activity2\resources\views/layouts/appmaster.blade.php ENDPATH**/ ?>