<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <div class="text-center">
                        <span style="font-size: 20px">List of articles</span>
                    </div>
                    <?php if(session()->get('success')): ?>
                    <div class="alert alert-success">
                        <?php echo e(session()->get('success')); ?>  
                    </div>
                    <?php endif; ?>
                    <div class="text-right" style="margin-top: 20px">
                        <a href="<?php echo e(route('article.create')); ?>" class="btn btn-default" role="button">
                            <i class="fa fa-plus" style="margin-right: 5px"></i>
                            Add new
                        </a>
                    </div>
                    <div>
                        <table class="table table-bordered" style="margin-top: 5px">
                            <thead>
                                <tr class="text-center">
                                    <th>No</th>
                                    <th>Article Title</th>
                                    <th>Article Content</th>
                                    <th>Article Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(count($data) > 0): ?>
                                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($key + 1); ?></td>
                                    <td><?php echo e($value->article_title); ?></td>
                                    <td><?php echo e($value->article_content); ?></td>
                                    <td class="text-center">
                                        <img class="img-responsive" src="<?php echo e(Storage::url($value->article_image_preview)); ?>" style="width: 100px;height: 100px"></img>
                                    </td>
                                    <td style="vertical-align : middle;text-align:center;">
                                        <div>
                                            <a class="btn btn-default" role="button">
                                                <i class="fa fa-pencil" style="margin-right: 5px"></i>
                                                Show
                                            </a>
                                            <a href ="<?php echo e(route('article.edit',$value->id)); ?>" class="btn btn-default" role="button">
                                                <i class="fa fa-pencil" style="margin-right: 5px"></i>
                                                Edit
                                            </a>
                                            <form id="deleteForm_<?php echo e($key+1); ?>" action="<?php echo e(route('article.destroy', $value->id)); ?>" method="post">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>
                                            <a class="btn btn-default" role="button" onclick="document.getElementById('deleteForm_<?php echo e($key+1); ?>').submit()">
                                                <i class="fa fa-close" style="margin-right: 5px"></i>
                                                Delete
                                            </a>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php else: ?>
                            <td colspan="5" class="text-center">Data is empty</td>
                            <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>