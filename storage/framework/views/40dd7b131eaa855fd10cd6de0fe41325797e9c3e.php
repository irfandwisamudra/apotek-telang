<?php $__env->startSection('title', 'Detail Supplier'); ?>
<?php $__env->startSection('subtitle', 'Detail Supplier'); ?>
<?php $__env->startSection('content'); ?>

<div class="card shadow mb-4">
	<div class="card-header d-flex">
		<a class="btn btn-secondary" href="/supplier">Kembali</a>
		<a class="btn btn-success mx-2" href="/supplier/edit/<?php echo e($supplier->id); ?>">Edit</a>
		<form action="/supplier/delete/<?php echo e($supplier->id); ?>" method="post">
			<?php echo method_field("delete"); ?>
			<?php echo csrf_field(); ?>
			<button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin untuk menghapus supplier?');">Hapus</button>
		</form>
	</div>
	<div class="card-body">
		<div class="row">
			<ul class="list-group col-md-2 font-weight-bolder">
				<li class="list-group-item">Nama Supplier</li>
				<li class="list-group-item">Alamat</li>
				<li class="list-group-item">Kota</li>
				<li class="list-group-item">No. Telepon</li>
			</ul>
			<ul class="list-group col-md-5">
				<li class="list-group-item"><?php echo e($supplier->nama_supplier); ?></li>
				<li class="list-group-item"><?php echo e($supplier->alamat); ?></li>
				<li class="list-group-item"><?php echo e($supplier->kota); ?></li>
				<li class="list-group-item"><?php echo e($supplier->no_telp); ?></li>
			</ul>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Coding_Irfan\applications\apotek-telang-final\resources\views/data/supplier/show.blade.php ENDPATH**/ ?>