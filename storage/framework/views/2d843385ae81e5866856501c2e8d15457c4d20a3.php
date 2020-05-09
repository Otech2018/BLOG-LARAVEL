<?php $__env->startSection('content'); ?>
<div class="container">


    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                    <a class="btn btn-primary" href="/posts/create">Create Post </a>
                    <h1>MY BLOG POST</h1>
                    <?php if(count($posts)>0): ?>
                    <table class="table table-striped">
                        <tr>
                            <th>Title</th>
                            <th></th>
                            <th></th>
                        </tr>

                        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($post->title); ?></td>
                                <td> <a href="/posts/<?php echo e($post->id); ?>/edit" class="btn btn-primary btn-sm">Edit</a></td>
                                <td>
                                
                                        <form action="<?php echo e(route('posts.update',[$post->id])); ?>" method="post" >
                                        <?php echo e(csrf_field()); ?>

                                        <input type="hidden" name="_method" value="DELETE" />
                                        <button type="submit" class='btn btn-danger btn-sm'> Delete</button>
                                        </form>
                                
                                </td>
                            </tr>
                
                            
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>
                    <?php else: ?>
                    <p>You Have No Post!!!</p>
                   <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>