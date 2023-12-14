<body>
  <header id="header">
    <?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </header>
 <section>
 <img class="d-block mx-auto mb-4" src="<?php echo e(asset('/img/home.png')); ?>" alt="">
 </section>
  <main id="main">
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
  </div>
</main>
<section>
  <section class="container">
    <div class="row">
      <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
        <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
          <img src="<?php echo e(asset('/img/perro-home-3.jpg')); ?>" class="w-100"/>
        </div>
      </div>

      <div class="col-lg-4 mb-4 mb-lg-0">
        <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
          <img src="<?php echo e(asset('/img/perro-home-4.jpg')); ?>" class="w-100"/>
        </div>
      </div>

      <div class="col-lg-4 mb-4 mb-lg-0">
        <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
          <img src="<?php echo e(asset('/img/perro-home.jpg')); ?>" class="w-100"/>
        </div>
      </div>
    </div>
  </section>
</section>
<footer id="footer" class="footer mt-5">

  <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</footer>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
<?php /**PATH C:\evaluaciones\cuidado_mascotas\resources\views/visitor/index.blade.php ENDPATH**/ ?>