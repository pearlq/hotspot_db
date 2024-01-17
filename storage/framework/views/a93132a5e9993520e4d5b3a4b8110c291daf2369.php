<!doctype html>
<html lang="">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title>Datiks-Hotspot 0.2 beta</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
    <link rel="icon" href="image/logo.svg" type="image/svg+xml">
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
</head>
<body>
<?php echo csrf_field(); ?>
<div class="container">
    <div class="row">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="<?php echo e(route('client.index')); ?>">Datiks-Hotspot 0.2 beta</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('main.index')); ?>">Главная</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('client.index')); ?>">Клиенты HotSpot</a>
                    </li>
                    <li class="nav-item">
                        <a aria-label="breadcrumb" class="nav-link" href="<?php echo e(route('add.index')); ?>">Добавить клинета HotSpot</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('register.index')); ?>">Создать нового пользователя</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('logout')); ?>">Выход</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <?php echo $__env->yieldContent('content'); ?>
</div>
</body>
</html>
<?php /**PATH /var/www/html/hotspotdb/resources/views/layouts/clients.blade.php ENDPATH**/ ?>