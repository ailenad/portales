<header id="header">
    <?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</header>
 <div class="d-flex justify-content-center ">
    <a href="<?php echo e(route('services.index')); ?>" class="btn btn-lg btn-primary mb-3">Gestionar Servicios</a>
    </div> 
<section id="crear_articulos" class="crear_articulos"> 
   
    <?php echo $__env->make('admin.create_article', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</section>

<section id="abm_articles" class="abm_articles mb-5">
    <div class="container">
        <div class="row">
            <?php $__currentLoopData = $articulos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $articulo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo e($articulo->title); ?></h5>
                            <p class="card-text"><?php echo e($articulo->content); ?></p>
                            <a href="<?php echo e(route('articles.edit', $articulo->id)); ?>" class="btn btn-lg btn-primary mb-3">Editar</a>
                            <form action="<?php echo e(route('articles.destroy', $articulo->id)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger">Eliminar Articulo</button>
                        </form>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
    </div>
</section>
 <?php /**PATH C:\evaluaciones\cuidado_mascotas\resources\views/admin/articles.blade.php ENDPATH**/ ?>