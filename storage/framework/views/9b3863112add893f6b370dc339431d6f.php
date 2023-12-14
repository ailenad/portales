<div id="servicios">
    <div class="container px-4 py-5" id="featured-3">
        <h2 class="pb-2 border-bottom">Nuestros Servicios</h2>
    </div>
    <div class="row">
        <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-4">
            <div class="card mb-5">
                <div class="card-body">
                    <h5 class="card-title"><?php echo e($service->title); ?></h5> 
                    <p class="card-text"><?php echo e($service->description); ?></p>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div><?php /**PATH C:\evaluaciones\cuidado_mascotas\resources\views/visitor/servicios.blade.php ENDPATH**/ ?>