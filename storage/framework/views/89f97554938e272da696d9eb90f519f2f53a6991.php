<?php $__env->startSection('title', 'Detail Transaksi'); ?>
<?php $__env->startSection('subtitle', 'Detail Transaksi'); ?>
<?php $__env->startSection('content'); ?>

<div class="card shadow mb-4">
	<div class="card-header d-flex">
		<a class="btn btn-secondary" href="/transaction">Kembali</a>
		<form action="/transaction/delete/<?php echo e($transaction->id); ?>" method="post">
			<?php echo method_field("delete"); ?>
			<?php echo csrf_field(); ?>
			<button type="submit" class="btn btn-danger ml-2" onclick="return confirm('Apakah Anda yakin untuk menghapus transaksi?');">Hapus</button>
		</form>
	</div>
	<div class="card-body">
		<div class="row">
			<ul class="list-group col-md-3 font-weight-bolder">
				<li class="list-group-item">Tanggal Transaksi</li>
				<li class="list-group-item">Admin</li>
				<li class="list-group-item">Nama Customer</li>
				<li class="list-group-item">Kode Obat</li>
				<li class="list-group-item">Jumlah</li>
				<li class="list-group-item">Total Harga</li>
			</ul>
			<ul class="list-group col-md-5">
				<li class="list-group-item"><?php echo e($transaction->tanggal); ?></li>
				<li class="list-group-item"><?php echo e($transaction->user->username); ?></li>
				<li class="list-group-item"><?php echo e($transaction->nama_customer); ?></li>
				<li class="list-group-item"><?php echo e($transaction->kode_obat); ?></li>
				<li class="list-group-item"><?php echo e($transaction->qty); ?></li>
				<li class="list-group-item">Rp. <?php echo e($transaction->total); ?></li>
			</ul>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Coding_Irfan\applications\apotek-telang\resources\views/data/transaction/show.blade.php ENDPATH**/ ?>