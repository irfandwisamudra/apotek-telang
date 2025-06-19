<?php $__env->startSection('title', 'Detail Obat'); ?>
<?php $__env->startSection('subtitle', 'Detail Obat'); ?>
<?php $__env->startSection('content'); ?>
<!-- DataTales Example -->
<div class="card shadow mb-4">
	<div class="card-header d-flex">
		<a class="btn btn-secondary" href="/drug">Kembali</a>
		<a class="btn btn-success mx-2" href="/drug/edit/<?php echo e($drug->id); ?>">Edit</a>
		<form action="/drug/delete/<?php echo e($drug->id); ?>" method="post">
			<?php echo method_field("delete"); ?>
			<?php echo csrf_field(); ?>
			<button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin untuk menghapus obat?');">Hapus</button>
		</form>
	</div>
	<div class="card-body">
		<div class="row">
			<ul class="list-group col-md-2 font-weight-bolder">
				<li class="list-group-item">Kode</li>
				<li class="list-group-item">Supplier ID</li>
				<li class="list-group-item">Nama Obat</li>
				<li class="list-group-item">Produser</li>
				<li class="list-group-item">Stok</li>
				<li class="list-group-item">Harga</li>
			</ul>
			<ul class="list-group col-md-5">
				<li class="list-group-item"><?php echo e($drug->kode); ?></li>
				<li class="list-group-item"><?php echo e($drug->supplier_id); ?></li>
				<li class="list-group-item"><?php echo e($drug->nama_obat); ?></li>
				<li class="list-group-item"><?php echo e($drug->produser); ?></li>
				<li class="list-group-item"><?php echo e($drug->stok); ?></li>
				<li class="list-group-item"><?php echo e($drug->harga); ?></li>
			</ul>
			<img width="200" height="200" src="<?php echo e(asset('storage/' . $drug->icon)); ?>" alt="<?php echo e($drug->nama_drug); ?>">
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Coding_Irfan\applications\apotek-telang\resources\views//data/drug/show.blade.php ENDPATH**/ ?>