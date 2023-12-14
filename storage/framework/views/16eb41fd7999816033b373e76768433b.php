<header id="header">
    <?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</header>
<div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
      <div class="col-lg-7 text-center text-lg-start">
        <h1 class="display-4 fw-bold lh-1 mb-3">Editar servicio</h1>
      <div class="col-md-10 mx-auto col-lg-5">
        <form method="POST" action="<?php echo e(route('services.update', $service->id)); ?>" class="p-4 p-md-5 border rounded-3 bg-light">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PATCH'); ?>

          <div class="form-floating mb-3">
            <input type="text" name="title" value="<?php echo e(old('title', optional($service)->title)); ?>"  id="title" required  class="form-control" id="floatingPassword">
            <label for="title">Titulo</label>
            <p><?php echo e($errors->first('title')); ?></p>
          </div>
          <div class="form-floating mb-3">
         <textarea class="form-control" name="description" id="description" rows="3"><?php echo e(old('description', optional($service)->description)); ?></textarea>
         <label for="content" class="form-label">Descripción:</label>
         <p><?php echo e($errors->first('description')); ?></p>
        </div>
          <button class="w-100 btn btn-lg btn-primary" type="submit">Guardar cambios</button>
        </form>
      </div>
    </div>
  </div><?php /**PATH C:\evaluaciones\cuidado_mascotas\resources\views/admin/edit_service.blade.php ENDPATH**/ ?>