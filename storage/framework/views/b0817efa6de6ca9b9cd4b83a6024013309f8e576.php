<?php $__env->startSection('content'); ?>
    <div>
        <h6>Вы вошли как: <?php echo e($user->surname); ?> <?php echo e($user->firstname); ?></h6>
        <h2>Список клиентов HotSpot</h2>
        <?php if(\Session::has('success')): ?>
            <div class="alert alert-success">
                <ul>
                    <li><?php echo \Session::get('success'); ?></li>
                </ul>
            </div>
        <?php endif; ?>
        <div style="min-height: 650px">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Клиент</th>
                    <th scope="col">Редактировать / Удалить</th>
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($counter++); ?></td>
                        <td><a href="<?php echo e(route('log.show', $client->id)); ?>"><?php echo e($client->client_name); ?></a></td>
                        <td>
                            <div style="display: flex; width: 220px; justify-content: space-between">
                                <form action="<?php echo e(route('client.choice', $client->id)); ?>" method="GET">
                                    <button type="submit" class="btn btn-outline-info">Редактировать</button>
                                </form>
                                <form action="<?php echo e(route('client.delete', $client->id)); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                        <button type="submit" class="btn btn-outline-danger">Удалить</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.clients', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/hotspotdb/resources/views/clients.blade.php ENDPATH**/ ?>