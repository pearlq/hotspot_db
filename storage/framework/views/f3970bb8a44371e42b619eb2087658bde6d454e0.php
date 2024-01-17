<?php $__env->startSection('content'); ?>
    <div class="card alert alert-primary">
        <div class="card-body">
            <h6>Вы вошли как: <?php echo e($user->surname); ?> <?php echo e($user->firstname); ?></h6>
        </div>
    </div>
    <form action="<?php echo e(route('main.period')); ?>" method="GET">
        <div class="btn-group d-flex justify-content-center pt-5" role="group" aria-label="Basic mixed styles example">
            <?php if(isset($data)): ?>
                <?php if($data == 'all_time'): ?>
                    <button type="submit" class="btn btn-info" value="all_time" name="data">Все время</button>
                    <button type="submit" class="btn btn-outline-info" value="today" name="data">Сегодня</button>
                    <button type="submit" class="btn btn-outline-info" value="yesterday" name="data">Вчера</button>
                    <button type="submit" class="btn btn-outline-info" value="month" name="data">Месяц</button>
               <?php endif; ?>
                <?php if($data == 'today'): ?>
                    <button type="submit" class="btn btn-outline-info" value="all_time" name="data">Все время</button>
                    <button type="submit" class="btn btn-info" value="today" name="data">Сегодня</button>
                    <button type="submit" class="btn btn-outline-info" value="yesterday" name="data">Вчера</button>
                    <button type="submit" class="btn btn-outline-info" value="month" name="data">Месяц</button>
               <?php endif; ?>
                <?php if($data == 'yesterday'): ?>
                    <button type="submit" class="btn btn-outline-info" value="all_time" name="data">Все время</button>
                    <button type="submit" class="btn btn-outline-info" value="today" name="data">Сегодня</button>
                    <button type="submit" class="btn btn-info" value="yesterday" name="data">Вчера</button>
                    <button type="submit" class="btn btn-outline-info" value="month" name="data">Месяц</button>
               <?php endif; ?>
                <?php if($data == 'month'): ?>
                    <button type="submit" class="btn btn-outline-info" value="all_time" name="data">Все время</button>
                    <button type="submit" class="btn btn-outline-info" value="today" name="data">Сегодня</button>
                    <button type="submit" class="btn btn-outline-info" value="yesterday" name="data">Вчера</button>
                    <button type="submit" class="btn btn-info" value="month" name="data">Месяц</button>
               <?php endif; ?>
                <?php if($data == 'all'): ?>
                    <button type="submit" class="btn btn-outline-info" value="all_time" name="data">Все время</button>
                    <button type="submit" class="btn btn-outline-info" value="today" name="data">Сегодня</button>
                    <button type="submit" class="btn btn-outline-info" value="yesterday" name="data">Вчера</button>
                    <button type="submit" class="btn btn-outline-info" value="month" name="data">Месяц</button>
               <?php endif; ?>
            <?php endif; ?>
        </div>
    </form>
        <br>
        <br>
        <div class="row">
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h5>Статистика сообщений</h5>
                        <?php if(isset($sms_count)): ?>
                        <?php echo e($sms_count); ?>

                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h5>Количество клиентов</h5>
                        <?php if(isset($client_count)): ?>
                            <?php echo e($client_count); ?>

                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h5>Количество подключений</h5>
                        <?php if(isset($connection_count)): ?>
                            <?php echo e($connection_count); ?>

                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    <br>


























<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.clients', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/hotspotdb/resources/views/admin.blade.php ENDPATH**/ ?>