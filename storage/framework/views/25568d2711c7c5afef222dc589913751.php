

<?php $__env->startSection('contenido'); ?>
    <h1>Listado de la saga</h1>

    <?php $__empty_1 = true; $__currentLoopData = $darksouls; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $NombreJuego): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <p> <?php echo e($NombreJuego['Nombre']); ?> </p>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <p>No encontrado</p>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\empresatt\resources\views/darksouls.blade.php ENDPATH**/ ?>