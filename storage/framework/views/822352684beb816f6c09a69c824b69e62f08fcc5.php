<?php $__env->startSection('title', 'Data Obat'); ?>
<?php $__env->startSection('subtitle', 'Data Obat'); ?>
<?php $__env->startSection('content'); ?>
<!-- DataTales Example -->
<div class="card shadow mb-4">
	<div class="card-body">
		<?php if(session('created')): ?>
			<div class="alert alert-success">
				<?php echo e(session('created')); ?>

			</div>
		<?php elseif(session('updated')): ?>
			<div class="alert alert-success">
				<?php echo e(session('updated')); ?>

			</div>
		<?php elseif(session('deleted')): ?>
			<div class="alert alert-success">
				<?php echo e(session('deleted')); ?>

			</div>
		<?php endif; ?>
		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th>Icon</th>
						<th>Kode</th>
						<th>Supplier ID</th>
						<th>Nama Obat</th>
						<th>Produser</th>
						<th>Stok</th>
						<th>Harga</th>
						<th>Opsi</th>
					</tr>
				</thead>
				<tbody>
					<?php $__currentLoopData = $drugs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $drug): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr>
						<td>
							<img width="60" height="60" src="<?php echo e(asset('storage/' . $drug->icon)); ?>">
						</td>
						<td><?php echo e($drug->kode); ?></td>
						<td><?php echo e($drug->supplier_id); ?> - <?php echo e($drug->supplier->nama_supplier); ?></td>
						<td><?php echo e($drug->nama_obat); ?></td>
						<td><?php echo e($drug->produser); ?></td>
						<td><?php echo e($drug->stok); ?></td>
						<td>Rp. <?php echo e($drug->harga); ?></td>
						<td>
							<a href="/drug/show/<?php echo e($drug->id); ?>" class="btn btn-info">Detail</a>
						</td>
					</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Coding_Irfan\applications\apotek-telang-final\resources\views/data/drug/index.blade.php ENDPATH**/ ?>