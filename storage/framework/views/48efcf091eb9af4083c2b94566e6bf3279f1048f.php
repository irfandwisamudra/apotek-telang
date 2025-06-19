<?php $__env->startSection('title', 'Login'); ?>
<?php $__env->startSection('content'); ?>
<!-- Outer Row -->
<div class="row justify-content-center">

	<div class="col-xl-10 col-lg-12 col-md-9">

		<div class="card o-hidden border-0 shadow-lg my-5">
			<div class="card-body p-0">
				<!-- Nested Row within Card Body -->
				<div class="row">
					<div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
					<div class="col-lg-6">
						<div class="p-5">
							<div class="text-center">
								<h1 class="h4 text-gray-900 mb-4">Login</h1>
							</div>
							<?php if(session('success')): ?>
							<div class="alert alert-success">
								<?php echo e(session('success')); ?>

							</div>
							<?php elseif(session('error')): ?>
							<div class="alert alert-danger">
								<?php echo e(session('error')); ?>

							</div>
							<?php endif; ?>
							<form class="user" action="/logged" method="post">
								<?php echo csrf_field(); ?>
								<div class="form-group">
									<input type="text" name="username" class="form-control form-control-user" placeholder="Masukkan Username">
									<?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <small class="text-danger"> <?php echo e($message); ?> </small> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
								</div>
								<div class="form-group">
									<input type="password" name="password1" class="form-control form-control-user" placeholder="Masukkan Password">
									<?php $__errorArgs = ['password1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <small class="text-danger"> <?php echo e($message); ?> </small> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
								</div>
								<button type="submit" class="btn btn-primary btn-user btn-block">
									Login
								</button>
							</form>
							<hr>
							<div class="text-center">
								<span class="small">Belum punya akun? <a href="/register">Register sekarang!</a></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates/auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Coding_Irfan\applications\apotek-telang\resources\views/user/login.blade.php ENDPATH**/ ?>