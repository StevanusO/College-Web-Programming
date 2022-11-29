<?php $__env->startSection('title', $publisher->name); ?>

<?php $__env->startSection('content'); ?>
    <div class="card bg-info">
        <img src="<?php echo e($publisher->image); ?>" alt="<?php echo e($publisher->name); ?>" class="card-img-top p-5">
        <div class="card-body bg-dark-50 text-black fs-1">
            <p class="card-text fw-bold text-center"><?php echo e($publisher->name); ?></p>
            <p class="card-text">Phone: <?php echo e($publisher->phone); ?></p>
            <p class="card-text">Email: <?php echo e($publisher->email); ?></p>
            <p class="card-text">Address: <?php echo e($publisher->address); ?></p>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php $__currentLoopData = $publisher->publishRel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col row-eq-height">
                    <div class="card">
                        <img src="<?php echo e($pub->image); ?>" alt="<?php echo e($pub->title); ?>" class="card-img-top p-5">
                        <div class="card-body">
                            <h5 class="card-title fw-bold text-center"><?php echo e($pub->title); ?></h5>
                            <p class="card-text fw-semibold">Author: <?php echo e($pub->author); ?></p>
                            <p class="card-text fw-semibold">Year: <?php echo e($pub->year); ?></p>
                            <p class="card-text fw-semibold">Synopsis:</p>
                            <p class="card-text fw-semibold text-justify"><?php echo e($pub->synopsis); ?></p>

                            <div class="d-flex justify-content-center">
                                <form action="<?php echo e(route('getBookDetail', ['id' => $pub->id])); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <button class="btn btn-primary">Details</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\steva\Desktop\GiantBookList\resources\views/DetailPublisher.blade.php ENDPATH**/ ?>