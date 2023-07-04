

<?php $__env->startSection('contenidorrhh'); ?>
    <div>
        <form action=" <?php echo e(Route('ciudades.store')); ?> " method="POST">
            <?php echo csrf_field(); ?>
            <div>
                <select name="iddpto" id="iddpto">
                    
                    <?php $__currentLoopData = $departamentos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $undepa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value=" <?php echo e($undepa->iddepartamento); ?> "> <?php echo e($undepa->nombre); ?> </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <br>
            <div>
                <label for="">Nombre Ciudad: 
                    <input type="text" name="nombreciudad" id="">
                </label>
            </div>
                <button>Guardar</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('../sesion', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\empresatt\resources\views/ciudades/create.blade.php ENDPATH**/ ?>