<?php $__env->startSection('title', 'Data Transaction'); ?>
<?php $__env->startSection('subtitle', 'Transactions List'); ?>
<?php $__env->startSection('content'); ?>

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
						<th>Date</th>
						<th>Name Customer</th>
						<th>Admin</th>
						<th>Opsi</th>
					</tr>
				</thead>
				<tbody>
					<?php $__currentLoopData = $transaction; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr>
						<td><?php echo e($transaction->date); ?></td>
						<td><?php echo e($transaction->name_customer); ?></td>
						<td><?php echo e($transaction->user->username); ?></td>
						<td>
							<a class="btn btn-info" href="/transaction/show/<?php echo e($transaction->id); ?>">detail</a>
						</td>
					</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Coding_Irfan\applications\apotek-laravel8\resources\views/data/transaction/index.blade.php ENDPATH**/ ?>