<?php $__env->startSection('title', 'Data Supplier'); ?>
<?php $__env->startSection('subtitle', 'Add Supplier'); ?>
<?php $__env->startSection('content'); ?>

<div class="card shadow mb-4">
	<form action="/supplier/store" method="post">
		<div class="card-body">
			<?php echo csrf_field(); ?>
			<div class="row">
				<div class="form-group col-md-6">
					<label class="form-label">Name Supplier</label>
					<input type="text" class="form-control" name="name_supplier" />
					<?php $__errorArgs = ['name_supplier'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <small class="text-danger"> <?php echo e($message); ?> </small> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
				</div>
				<div class="form-group col-md-6">
					<label class="form-label">Address</label>
					<input type="text" class="form-control" name="address" />
					<?php $__errorArgs = ['address'];
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
					<label class="form-label">City</label>
					<input type="text" class="form-control" name="city" />
					<?php $__errorArgs = ['city'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <small class="text-danger"> <?php echo e($message); ?> </small> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
				</div>
				<div class="form-group col-md-6">
					<label class="form-label">Phone</label>
					<input type="text" class="form-control" name="phone" />
					<?php $__errorArgs = ['phone'];
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
			<button type="submit" class="btn btn-primary">Add</button>
			<a href="/supplier" class="btn btn-secondary">Back</a>
		</div>
	</form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Coding_Irfan\applications\apotek-laravel8\resources\views/data/supplier/add.blade.php ENDPATH**/ ?>