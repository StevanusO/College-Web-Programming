<?php $__env->startSection('title', 'Home'); ?>

<?php $__env->startSection('content'); ?>
    <section>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php $__currentLoopData = $pokedexs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pokedex): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col row-eq-height">
                    <div class="card border-warning text-bg-dark mb-3 w-85">
                        <img class="card-img-top img-fluid" src="<?php echo e($pokedex->Photo); ?>" alt="<?php echo e($pokedex->name . '-img'); ?>">
                        <div class="card-body">
                            <h5 class="card-title fs-3 text">
                                <?php echo e($pokedex->name); ?>


                                <?php if($pokedex->id > 9): ?>
                                    #0<?php echo e($pokedex->id); ?>

                                <?php elseif($pokedex->id > 99): ?>
                                    #<?php echo e($pokedex->id); ?>

                                <?php else: ?>
                                    #00<?php echo e($pokedex->id); ?>

                                <?php endif; ?>
                            </h5>
                            <p class="card-text"><?php echo e($pokedex->Description); ?></p>
                            <div class="card-footer">
                                <small class="text-info"><b>Height: <?php echo e($pokedex->Height); ?></b></small>
                            </div>
                            <div class="card-footer">
                                <small class="text-info"><b>Weight: <?php echo e($pokedex->Weight); ?></b></small>
                            </div>
                            <div class="card-footer">
                                <small class="text-info"><b>Category: <?php echo e($pokedex->category); ?></b></small>
                            </div>
                            <div class="card-footer">
                                <small class="text-info"><b>Ability: <?php echo e($pokedex->abilities); ?></b></small>
                            </div>
                            <div class="card-footer">
                                <small class="text-info"><b>Type I: <?php echo e($pokedex->type1); ?></b></small>
                            </div>
                            <div class="card-footer">
                                <small class="text-info"><b>Type II:
                                        <?php echo e($pokedex->type2 != null ? $pokedex->type2 : '-'); ?></b></small>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\steva\Desktop\PokemonList\PokemonDB\resources\views/home.blade.php ENDPATH**/ ?>