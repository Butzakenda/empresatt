

<?php $__env->startSection('contenido'); ?>
    <h1>Listado de las Ofertas</h1>

    <?php $__empty_1 = true; $__currentLoopData = $programas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <p> <?php echo e($item['nombre']); ?> </p>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <p>Sin oferta</p>
    <?php endif; ?>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\empresatt\resources\views/ofertas.blade.php ENDPATH**/ ?>