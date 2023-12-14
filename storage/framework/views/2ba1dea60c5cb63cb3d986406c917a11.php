<header id="header">
    <?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</header>
<div class="d-flex justify-content-center">
<a href="<?php echo e(route('articles.index')); ?>" class="btn btn-lg btn-primary mb-3">Gestionar Articulos</a>
</div>  
<section id="crear_articulos" class="crear_articulos">
 
  <?php echo $__env->make('admin.create_services', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</section>
<div class="container">
    <div class="row">
    <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-4">
                <div class="card mb-5">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo e($service->title); ?></h5>
                     
                        <p class="card-text"><?php echo e($service->description); ?></p>
                    </div>
                    <a href="<?php echo e(route('services.edit', $service->id)); ?>" class="btn btn-lg btn-primary mb-3">Editar</a>
                        <form action="<?php echo e(route('services.destroy', $service->id)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" class="btn btn-danger">Eliminar Servicio</button>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php /**PATH C:\evaluaciones\cuidado_mascotas\resources\views/admin/services.blade.php ENDPATH**/ ?>