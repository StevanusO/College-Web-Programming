<?php $__env->startSection('title', 'Publisher'); ?>

<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-body bg-dark-50 text-black fw-bold fs-1 text-center">
            Publisher
        </div>
    </div>

    <div class="container-fluid">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php $__currentLoopData = $publisher; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col row-eq-height">
                    <div class="card">
                        <img src="<?php echo e($pub->image); ?>" alt="img" class="card-img-top p-5">
                        <div class="card-body">
                            <h5 class="card-title fw-bold text-center"><?php echo e($pub->title); ?></h5>
                            <p class="card-text fw-semibold"><?php echo e($pub->address); ?></p>
                            <div class="d-flex justify-content-center">
                                <a href="<?php echo e(route('getPublisherBookPage', ['id' => $pub->id])); ?>"
                                    class="btn btn-primary text-center">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="pagination justify-content-center">
            <?php echo e($publisher->links()); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\steva\Desktop\GiantBookList\resources\views/Publisher.blade.php ENDPATH**/ ?>