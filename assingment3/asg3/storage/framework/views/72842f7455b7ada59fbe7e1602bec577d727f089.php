<?php $__env->startSection('title', 'Character Level Up Materials'); ?>

<?php $__env->startSection('content'); ?>
    <section class="overflow-hidden" style="background:  #4d88ff;">
        <?php if(count($character_level_up_items) < 1): ?>
            <div class="card w-100">
                <div class="card-body bg-black">
                    <h2 class="card-title text-info">No Data!</h2>
                    <h3 class="card-text text-light">Hmm..There is no data found in database.</h3>
                </div>
            </div>
        <?php else: ?>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <?php $__currentLoopData = $character_level_up_items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col row-eq-height">
                        <div class="card w-85 border-warning my-3 mx-3">
                            <img src="<?php echo e($item->imgUrl); ?>" class="card-img-top" alt="<?php echo e($item->name . '-img'); ?>">
                            <div class="card-body">
                                <h5 class="card-title text-primary"><?php echo e($item->name); ?></h5>
                                <p class="card-text">
                                    <?php echo e($item->description); ?>

                                </p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <?php if($item->rarity > 0 && $item->rarity < 2): ?>
                                    <li class="list-group-item">
                                        ⭐
                                    </li>
                                <?php elseif($item->rarity > 1 && $item->rarity < 3): ?>
                                    <li class="list-group-item">
                                        ⭐⭐
                                    </li>
                                <?php elseif($item->rarity > 2 && $item->rarity < 4): ?>
                                    <li class="list-group-item">
                                        ⭐⭐⭐
                                    </li>
                                <?php elseif($item->rarity > 3 && $item->rarity < 5): ?>
                                    <li class="list-group-item">
                                        ⭐⭐⭐⭐
                                    </li>
                                <?php endif; ?>
                                <li class="list-group-item"><?php echo e($item->obtainedFrom); ?></li>
                            </ul>
                            <div class="card-body">
                                <form action="<?php echo e(route('Material_Character_Delete', ['name' => $item->name])); ?>"
                                    method="POST" class="card-link">
                                    <?php echo method_field('delete'); ?>
                                    <?php echo csrf_field(); ?>
                                    <button class="btn btn-outline-danger">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php endif; ?>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\steva\Desktop\assingment3\asg3\resources\views/character_level_up_item_index.blade.php ENDPATH**/ ?>