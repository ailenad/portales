<header id="header">
    <?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</header>
<section id="blog" class="blog">
  <div class="px-4 py-5 my-5 text-center">
      <img class="d-block mx-auto mb-4" src="<?php echo e(asset('/img/consejos.png')); ?>" >
      <h1 class="display-5 fw-bold text-body-emphasis">Bienvenido a nuestro blog</h1>
      <div class="col-lg-6 mx-auto">
        <p class="lead mb-4">¡Bienvenidos a nuestro blog dedicado al amor y cuidado de nuestras mascotas! Acá encontrarás consejos útiles y recursos esenciales.</p>
      </div>
  </div>
</section>
<section>
  <div class="container">
      <div class="row">
    
          <?php $__currentLoopData = $article; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $articulo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="col-md-4">
                  <div class="card mb-5">
                      <div class="card-body">
                          <h5 class="card-title"><?php echo e($articulo->title); ?></h5>
                          <p class="card-text"><?php echo e($articulo->content); ?></p> 
                      </div>
                  </div>
              </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
  </div>
</section>
<footer id="footer" class="footer">

  <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</footer><?php /**PATH C:\evaluaciones\cuidado_mascotas\resources\views/visitor/blog.blade.php ENDPATH**/ ?>