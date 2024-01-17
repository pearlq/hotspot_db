<?php $__env->startSection('content'); ?>
    <div>
        <h5>Статистика подключений клиентов HotSpot</h5>
        <br>
        <div class="count" style="display: flex; justify-content: space-between">
            <div>
                <a class="btn btn-primary" href="<?php echo e('download'); ?>">Выгрузить в Excel</a><br><br>
            </div>
        </div>











        <div style="min-height: 650px">
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
            <?php $__currentLoopData = $client; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $log): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($counter++); ?></td>
                    <td><?php echo e($log->number); ?></td>
                    <td><?php echo e($log->ip); ?></td>
                    <td><?php echo e($log->mac); ?></td>
                    <td><?php echo e($log->login_time); ?></td>
                    <td><?php echo e($log->logout_time); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        </div>
    </div>
    <div class="mt-4">
        <?php echo e($client->links()); ?>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.company', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/hotspotdb/resources/views/company.blade.php ENDPATH**/ ?>