<?php $__env->startSection('title', 'Home'); ?>

<?php $__env->startSection('content'); ?>
    <section>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php $__currentLoopData = $pokedexs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pokedexs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col">
                    <div class="card">
                        <img class="card-img-top img-fluid" src="<?php echo e($pokedexs->Photo); ?>" alt="<?php echo e($pokedexs->name . '-img'); ?>">
                        <div class="card-body">
                            <h5 class="card-title fs-3 text">
                                Title #Index
                            </h5>
                            <table class="table table-dark table-striped-columns table-hover">
                                <thead>
                                    <th scope="col" class="fs-4 text">Height</th>
                                    <th scope="col" class="fs-4 text">Weight</th>
                                    <th scope="col" class="fs-4 text">Category</th>
                                    <th scope="col" class="fs-4 text">Abilities</th>
                                    <th scope="col" class="fs-4 text">Type I</th>
                                    <th scope="col" class="fs-4 text">Type II</th>
                                </thead>
                                <tbody>
                                    <th scope="row" class="text-center fs-5 text">2'04"</th>
                                    <th class="text-center  fs-5 text">15.2 lbs</th>
                                    <th class="text-center  fs-5 text">Seed</th>
                                    <th class="text-center  fs-5 text">Overgrow</th>
                                    <th class="text-center  fs-5 text">Grass</th>
                                    <th class="text-center  fs-5 text">Poison</th>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\steva\Desktop\PokemonList\PokemonDB\resources\views/Home.blade.php ENDPATH**/ ?>