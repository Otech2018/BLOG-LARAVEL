<?php $__env->startSection('content'); ?>

<h1>POSTS</h1>
<?php if( count($posts) >=1 ): ?>
<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="row" style='background-color:#cccccc; margin:10px; padding:20px'>
        <div class="col-md-4 col-sm-4">
            <img style="width:100%" src="/storage/cover_images/<?php echo e($post->cover_image); ?>"/>
        </div>

        <div class="col-md-8 col-sm-8">
            <h3><a href="/posts/<?php echo e($post->id); ?>"><?php echo e($post->title); ?></a></h3>
            <small>Written on:<b><?php echo e($post->created_at); ?>  By <?php echo e($post->user->name); ?></b></small>

        </div>
        
            
        </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php echo e($posts->links()); ?>

<?php else: ?>
<p>No Post!</p>

<?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>