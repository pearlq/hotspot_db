<?php $__env->startSection('content'); ?>

    <h2>Добро Пожаловать: <?php echo e($user->surname); ?> <?php echo e($user->firstname); ?></h2>
    <br>
    <h1>В РАЗРАБОТКЕ...</h1>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.company', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/hotspotdb/resources/views/main.blade.php ENDPATH**/ ?>