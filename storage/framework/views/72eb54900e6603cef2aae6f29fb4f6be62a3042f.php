<?php $__env->startSection('title', 'Edit Supplier'); ?>
<?php $__env->startSection('subtitle', 'Edit Supplier'); ?>
<?php $__env->startSection('content'); ?>

<div class="card shadow mb-4">
	<form action="/supplier/update/<?php echo e($supplier->id); ?>" method="post">
		<div class="card-body">
			<?php echo method_field('put'); ?>
			<?php echo csrf_field(); ?>
			<div class="row">
				<div class="form-group col-md-6">
					<label class="form-label">Nama Supplier</label>
					<input type="text" class="form-control" name="nama_supplier" value="<?php echo e($supplier->nama_supplier); ?>" />
					<?php $__errorArgs = ['nama_supplier'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <small class="text-danger"> <?php echo e($message); ?> </small> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
				</div>
				<div class="form-group col-md-6">
					<label class="form-label">Alamat</label>
					<input type="text" class="form-control" name="alamat" value="<?php echo e($supplier->alamat); ?>"/>
					<?php $__errorArgs = ['alamat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <small class="text-danger"> <?php echo e($message); ?> </small> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
				</div>
			</div>
			<div class="row">
				<div class="form-group col-md-6">
					<label class="form-label">Kota</label>
					<input type="text" class="form-control" name="kota" value="<?php echo e($supplier->kota); ?>"/>
					<?php $__errorArgs = ['kota'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <small class="text-danger"> <?php echo e($message); ?> </small> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
				</div>
				<div class="form-group col-md-6">
					<label class="form-label">No. Telepon</label>
					<input type="text" class="form-control" name="no_telp" value="<?php echo e($supplier->no_telp); ?>"/>
					<?php $__errorArgs = ['no_telp'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <small class="text-danger"> <?php echo e($message); ?> </small> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
				</div>
			</div>
		</div>
		<div class="card-footer">
			<button type="submit" class="btn btn-primary">Update</button>
			<a href="/supplier" class="btn btn-secondary">Back</a>
		</div>
	</form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Coding_Irfan\applications\apotek-telang-final\resources\views//data/supplier/edit.blade.php ENDPATH**/ ?>