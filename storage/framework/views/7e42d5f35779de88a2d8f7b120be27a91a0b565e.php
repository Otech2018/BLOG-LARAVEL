<?php $__env->startSection('content'); ?>


<div class='jumbotron text-center'>
    <h1>WELCOME TO BLOG LARAVEL</h1>
    <p>This is my Second Application Bulit on learning Laravel !</p>

    <p>
        <a class='btn btn-primary btn-lg' href='/login' role='button'> Login</a>
        <a class='btn btn-danger btn-lg' href='/register' role='button'> Register</a>
    </p>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>