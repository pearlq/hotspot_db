<?php $__env->startSection('content'); ?>
    <div>
        <h5>Статистика отправленных сообщений</h5>
        <br>
        <div style="min-height: 650px">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Месяц/Год</th>
                    <th scope="col">Количество SMS</th>
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $sms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($counter++); ?></td>
                        <td><?php echo e($data->month); ?> <?php echo e($data->year); ?></td>
                        <td><?php echo e($data->count); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.company', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/hotspotdb/resources/views/sms.blade.php ENDPATH**/ ?>