<?php $__env->startSection('content'); ?>
    <?php echo csrf_field(); ?>
    <div>
            <h2><?php echo e($clients->client_name); ?></h2>
    </div>
    <div style="min-height: 650px">
        <div class="count" style="display: flex; justify-content: space-between">
            <div>
                <h5>Количество сообщений за
                    <select class="form-select" aria-label="Default select example">
                        <?php $__currentLoopData = $sms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option><?php echo e($data->month); ?> <?php echo e($data->year); ?> : <?php echo e($data->count); ?> сообщений</option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </h5>
            </div>
        </div>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Номер телефона</th>
            <th scope="col">IP-Адрес</th>
            <th scope="col">MAC-Адрес</th>
            <th scope="col">Время входа</th>
            <th scope="col">Время выхода</th>
        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $logs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $log): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($counter++); ?></td>
                <td> <?php echo e($log->number); ?> </td>
                <td><?php echo e($log->ip); ?></td>
                <td> <?php echo e($log->mac); ?> </td>
                <td> <?php echo e($log->login_time); ?> </td>
                <td> <?php echo e($log->logout_time); ?> </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    </div>
    <div class="mt-4">
        <?php echo e($logs->links()); ?>

    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.clients', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/hotspotdb/resources/views/logs.blade.php ENDPATH**/ ?>