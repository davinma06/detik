<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <form method="POST" action="<?php echo e(route('article.store')); ?>" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>

                        <div class="form-group row">
                            <label for="article_title" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Article Title')); ?></label>

                            <div class="col-md-6">
                                <input id="article_title" type="text" class="form-control" name="article_title" value="" required autofocus>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="article_content" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Article Content')); ?></label>

                            <div class="col-md-6">
                                <textarea id="article_content" class="form-control" name="article_content" rows="5" required autofocus></textarea>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="article_thumbnail" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Article Preview Image')); ?></label>

                            <div class="col-md-6">
                                <input type="file" class="form-control-file" id="article_thumbnail" name="article_thumbnail">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    <?php echo e(__('Save')); ?>

                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>