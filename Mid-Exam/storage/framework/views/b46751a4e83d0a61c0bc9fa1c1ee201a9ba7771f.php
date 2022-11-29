<?php $__env->startSection('title', 'Home'); ?>

<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-body bg-dark-50 text-black fw-bold fs-1 text-center">
            Book List
        </div>
    </div>

    <div class="container-fluid">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php $__currentLoopData = $book_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col row-eq-height">
                    <div class="card text-center">
                        <img src="<?php echo e($item->image); ?>" alt="<?php echo e($item->title); ?>" class="card-img-top img-fluid">
                        <div class="card-body">
                            <h5 class="card-title fw-bold"><?php echo e($item->title); ?></h5>
                            <p class="card-text">By</p>
                            <p class="card-text fw-semibold"><?php echo e($item->author); ?></p>
                            <form action="<?php echo e(route('getBookDetail', ['id' => $item->id])); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <button class="btn btn-primary">Details</button>
                            </form>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="pagination justify-content-center">
            <?php echo e($book_data->links()); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\steva\Desktop\GiantBookList\resources\views/Homepage.blade.php ENDPATH**/ ?>