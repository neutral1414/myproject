<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!--<link rel="stylesheet" type="text/css" href="/css/style.css">-->
        <link rel="stylesheet" type="text/css" href="<?php echo e(elixir('css/app.css')); ?>">

        <?php echo $__env->yieldContent('header'); ?>
    </head>
    <body>

        <?php echo $__env->yieldContent('content'); ?>
        
        <?php echo $__env->yieldContent('footer'); ?>
    
    </body>
</html>
