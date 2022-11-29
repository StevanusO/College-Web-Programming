<?php $__env->startSection('title', 'Book Detail'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="card">
            <div class="card-body bg-dark-50 text-black fw-bold fs-1 text-center">
                Book Detail
            </div>
        </div>
        <div class="card">
            <img src="<?php echo e($book_data->image); ?>" alt="<?php echo e($book_data->title); ?> .-img" class="card-img-top my-2">
            <div class="card-body">
                <p class="card-text">
                    Title: <?php echo e($book_data->title); ?>

                </p>
                <p class="card-text">
                    Author: <?php echo e($book_data->author); ?>

                </p>
                <p class="card-text">
                    Publisher: <?php echo e($book_data->publisher->name); ?>

                </p>
                <p class="card-text">
                    Year: <?php echo e($book_data->year); ?>

                </p>
                <p class="card-text">
                    Synopsis:
                </p>
                <p class="card-text text-justify">
                    <?php echo e($book_data->synopsis); ?>

                </p>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\steva\Desktop\GiantBookList\resources\views/DetailBook.blade.php ENDPATH**/ ?>