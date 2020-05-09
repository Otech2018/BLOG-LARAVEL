<?php $__env->startSection('content'); ?>
<a class='btn btn-danger' href="/posts">Go Back</a>
<div style='background-color:#cccccc; margin:10px; padding:20px'>
<h1><?php echo e($post->title); ?></h1>
  <img style="width:100%" src="/storage/cover_images/<?php echo e($post->cover_image); ?>"/>
 <small>Written on:<b><?php echo e($post->created_at); ?> By <?php echo e($post->user->name); ?></b></small>

 <div style='background-color:black;color:white;  margin:10px; padding:20px'>
<?php echo e($post->body); ?>

 </div>
        </div>

        <hr/>
        <?php if(!Auth::guest() && Auth::user()->id==$post->user_id): ?>
         

        <form action="<?php echo e(route('posts.update',[$post->id])); ?>" method="post" >
        <?php echo e(csrf_field()); ?>

        <input type="hidden" name="_method" value="DELETE" />
        <a href="/posts/<?php echo e($post->id); ?>/edit" class='btn btn-primary btn-sm'> Edit</a>   
        |   
         <button type="submit" class='btn btn-danger btn-sm'> Delete</button>
         </form>
         <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>