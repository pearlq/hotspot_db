<?php $__env->startSection('content'); ?>
    <section class="vh-100 gradient-custom">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-top h-100 mt-5">
                <div class="col-lg-12 col-xl-11">
                    <div class="card bg-dark text-white" style="border-radius: 25px;">
                        <div class="card-body p-md-5">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                    <p class="text-center h2 fw-bold mb-5 mx-1 mx-md-4 mt-4">Редактирование клиента <?php echo e($name); ?></p>

                                    <?php if(\Session::has('success')): ?>
                                        <div class="alert alert-success">
                                            <ul>
                                                <li><?php echo \Session::get('success'); ?></li>
                                            </ul>
                                        </div>
                                    <?php endif; ?>


                                    <form class="mx-1 mx-md-4" method="POST" action="<?php echo e(route('client.edit', $id)); ?>">
                                        <?php echo csrf_field(); ?>
                                        <?php if($errors->any()): ?>
                                            <div class="alert alert-danger"><?php echo e($errors->first()); ?></div>
                                        <?php endif; ?>
                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <label class="form-label" for="form3Example1c">Введите название клиента:</label>
                                                <input type="text" id="form3Example1c" class="form-control" name="name" value="<?php echo e($name); ?>"/>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <label class="form-label" for="form3Example4c">Введите идентификатор клиента:</label>
                                                <input type="text" id="form3Example4c" class="form-control" name="identity" value="<?php echo e($identity); ?>"/>
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-3 pt-3">
                                            <button type="submit" class="btn btn-primary btn-lg">Редактировать</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.clients', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/hotspotdb/resources/views/edit.blade.php ENDPATH**/ ?>