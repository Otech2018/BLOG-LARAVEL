<?php $__env->startSection('content'); ?>

<h1>EDIT POST</h1>

<form action="<?php echo e(route('posts.update',[$post->id])); ?>" method="post" enctype="multipart/form-data">
                <?php echo e(csrf_field()); ?>

  <div class="form-group">
    <label for="exampleInputEmail1">Title </label>
    <input type="hidden" name="_method" value="PUT" />
    <input type="text" class="form-control" name='title' aria-describedby="emailHelp" placeholder="Title " value="<?php echo e($post->title); ?>">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Body</label>
    <textarea class="form-control" name='body' placeholder="Body">
        <?php echo e($post->body); ?>

    </textarea>
  </div>


    <div class="form-group">
   <input type="file" class="form-control" name="cover_image">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>