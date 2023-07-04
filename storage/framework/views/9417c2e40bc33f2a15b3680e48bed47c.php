

<?php $__env->startSection('contenidorrhh'); ?>
    <div>
        <form action=" <?php echo e(Route('departamentos.update',$departamentos->iddepartamento)); ?> " method="put">
            <?php echo csrf_field(); ?>
            <div>
                <label for="">Nombre
                    <input type="text" name="nombredepartamento" id="" value=" <?php echo e($departamentos -> nombre); ?> ">
                </label>
            </div>
                <button>Actualizar</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('../sesion', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\empresatt\resources\views/departamentos/edit.blade.php ENDPATH**/ ?>