<?php $__env->startSection('title', 'Tambah Transaksi'); ?>
<?php $__env->startSection('subtitle', 'Tambah Transaksi'); ?>
<?php $__env->startSection('content'); ?>

<div class="card shadow mb-4">
	<div class="card-body">
		<p><strong>Data Transaksi</strong> <?php echo e(date('Y-m-d H:m:s')); ?> </p> 
		<p><strong>Admin</strong> <?php echo e(session('username')); ?> </p>
	</div>
</div>

<div class="card shadow mb-4">
	<form action="/transaction/store" method="post">
		<div class="card-body">
			<?php echo csrf_field(); ?>
			<input type="hidden" name="tanggal" value="<?php echo e(date('Y-m-d H:m:s')); ?>" />
			<input type="hidden" name="user_id" value="<?php echo e(session('id')); ?>" />
			<div class="form-group">
				<label class="form-label">Nama Customer</label>
				<input type="text" class="form-control" name="nama_customer" />
				<?php $__errorArgs = ['nama_customer'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <small class="text-danger"> <?php echo e($message); ?> </small> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
			</div>
			<div class="row">
				<div class="form-group col-md-6">
					<label class="form-label">Obat</label>
					<select class="choose-drug form-control select2" name="kode_obat">
						<option selected disabled>Pilih Obat</option>
						<?php $__currentLoopData = $drugs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $drug): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<option value="<?php echo e($drug->kode); ?>" data-price="<?php echo e($drug->harga); ?>"><?php echo e($drug->nama_obat); ?></option>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</select>
					<?php $__errorArgs = ['kode_obat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <small class="text-danger"> <?php echo e($message); ?> </small> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
				</div>
				<div class="form-group col-md-3">
					<label class="form-label">Jumlah</label>
					<input type="number" class="form-control qty" name="qty">
					<?php $__errorArgs = ['qty'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <small class="text-danger"> <?php echo e($message); ?> </small> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
				</div>
				<div class="form-group col-md-3">
					<label class="form-label">Total Harga</label>
					<input type="text" name="total" class="total form-control" readonly>
				</div>
			</div>
		</div>
		<div class="card-footer">
			<button type="submit" class="btn btn-primary">Tambah</button>
			<a href="/transaction" class="btn btn-secondary">Kembali</a>
		</div>
	</form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Coding_Irfan\applications\apotek-telang\resources\views/data/transaction/add.blade.php ENDPATH**/ ?>