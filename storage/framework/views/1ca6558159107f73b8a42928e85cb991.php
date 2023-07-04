

<?php $__env->startSection('contenidorrhh'); ?>
    <div>
        <form action=" <?php echo e(Route('ciudades.update',$ciudades->idciudad)); ?>" method="put">
            <?php echo csrf_field(); ?>
            <div>
                <select name="iddpto" id="">
                    <?php $__currentLoopData = $departamentos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $undepa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($ciudades->iddepartamento==$undepa->iddepartamento): ?>
                            <option value="<?php echo e($undepa->iddepartamento); ?>" selected> <?php echo e($undepa->nombre); ?> </option>
                        <?php else: ?>
                            <option value="<?php echo e($undepa->iddepartamento); ?>"> <?php echo e($undepa->nombre); ?> </option>
                        <?php endif; ?>    
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div>
                <label for="">Nombre
                    <input type="text" name="nombreciudad" id="" value=" <?php echo e($ciudades -> nombre); ?> ">
                </label>
            </div>
                <button>Actualizar</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('../sesion', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\empresatt\resources\views/ciudades/edit.blade.php ENDPATH**/ ?>