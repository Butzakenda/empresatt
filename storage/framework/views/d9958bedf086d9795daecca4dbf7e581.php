

<?php $__env->startSection('contenidorrhh'); ?>
    <div>
        <form action=" <?php echo e(Route('departamentos.store')); ?> " method="POST">
            <?php echo csrf_field(); ?>
            <div>
                <label for="">Nombre
                    <input type="text" name="nombredepartamento" id="">
                </label>
            </div>
                <button>Guardar</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('../sesion', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\empresatt\resources\views/departamentos/create.blade.php ENDPATH**/ ?>