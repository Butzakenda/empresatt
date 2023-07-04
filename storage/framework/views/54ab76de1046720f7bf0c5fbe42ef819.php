<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->startSection('contenido'); ?>
<div class="container">
    <h2>Iniciar sesión</h2>
    <form action="login.php" method="post">
      <label for="email">Correo electrónico</label>
      <input type="email" id="email" name="email" required>
      
      <label for="password">Contraseña</label>
      <input type="password" id="password" name="password" required>
      
      <input type="submit" value="Iniciar sesión">
    </form>
    <div class="reset-password-link">
      <a href="reset-password.php">¿Olvidaste tu contraseña?</a>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php /**PATH C:\laragon\www\empresatt\resources\views/password/index.blade.php ENDPATH**/ ?>