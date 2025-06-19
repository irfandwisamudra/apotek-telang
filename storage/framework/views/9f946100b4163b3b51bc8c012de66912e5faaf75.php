<?php $__env->startSection('title', 'Data Supplier'); ?>
<?php $__env->startSection('subtitle', 'Data Suppliers'); ?>
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
						<th>Nama Supplier</th>
						<th>Alamat</th>
						<th>Kota</th>
						<th>No. Telepon</th>
						<th>Opsi</th>
					</tr>
				</thead>
				<tbody>
					<?php $__currentLoopData = $supplier; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $supplier): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr>
						<td><?php echo e($supplier->nama_supplier); ?></td>
						<td><?php echo e($supplier->alamat); ?></td>
						<td><?php echo e($supplier->kota); ?></td>
						<td><?php echo e($supplier->no_telp); ?></td>
						<td>
							<a class="btn btn-info" href="/supplier/show/<?php echo e($supplier->id); ?>">Detail</a>
						</td>
					</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Coding_Irfan\applications\apotek-telang\resources\views/data/supplier/index.blade.php ENDPATH**/ ?>