<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link href="<?php echo e(asset('/css/style.css')); ?>" rel="stylesheet">
    <link rel="icon"
        href="https://pokemon.images.gamespress.com/Content/Artwork/NickNack/PokemonAmerica/artwork/2019/07/09125735-7b00e266-d991-41da-9267-843e49ce62a7/Pokemon_Logo.jpg?w=240&mode=max&otf=y&quality=90&format=jpg&bgcolor=white&ex=2022-12-01+03%3A00%3A00&sky=c7505954193a163554d695b2bec9eb31fa0d0cdb571587ca5721617348c50766"
        type="image/icon type">
</head>

<body class="bg-info">
    <?php echo $__env->make('navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('content'); ?>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
        integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous">
    </script>

    <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html>
<?php /**PATH C:\Users\steva\Desktop\PokemonList\PokemonDB\resources\views/template.blade.php ENDPATH**/ ?>