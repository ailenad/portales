<header id="header">
    <?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</header>
<div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
      <div class="col-lg-7 text-center text-lg-start">
        <h1 class="display-4 fw-bold lh-1 mb-3">Editar el articulo</h1>
        <p class="col-lg-10 fs-4">Tu voz importa! Siempre estamos en busca de la información más actualizada y los consejos más efectivos sobre el cuidado de mascotas. Si tienes alguna corrección, actualización o información adicional que crees que sería valiosa para nuestra comunidad, te invitamos a editar este contenido. Juntos, podemos garantizar que nuestros recursos sean siempre precisos y útiles. ¡Gracias por tu contribución y por hacer que este blog sea aún mejor!</p>
      </div>
      <div class="col-md-10 mx-auto col-lg-5">
        <form method="POST" action="<?php echo e(route('articles.update', $article->id)); ?>" class="p-4 p-md-5 border rounded-3 bg-light">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PATCH'); ?>

          <div class="form-floating mb-3">
            <input type="text" name="title" value="<?php echo e(old('title', optional($article)->title)); ?>"  id="title" required  class="form-control" id="floatingPassword">
            <label for="title">Titulo</label>
            <p><?php echo e($errors->first('title')); ?></p>
          </div>
          <div class="form-floating mb-3">
         <textarea class="form-control" name="content" id="content" rows="3"><?php echo e(old('content', optional($article)->content)); ?></textarea>
         <label for="content" class="form-label">Descripción:</label>
         <p><?php echo e($errors->first('content')); ?></p>
        </div>
          <button class="w-100 btn btn-lg btn-primary" type="submit">Publicar</button>
        </form>
      </div>
    </div>
  </div>
   


<?php /**PATH C:\evaluaciones\cuidado_mascotas\resources\views/admin/edit_article.blade.php ENDPATH**/ ?>