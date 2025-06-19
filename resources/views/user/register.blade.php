@extends('templates/auth')
@section('title', 'Register')
@section('content')
<div class="card o-hidden border-0 shadow-lg my-5">
	<div class="card-body p-0">
		<!-- Nested Row within Card Body -->
		<div class="row">
			<div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
			<div class="col-lg-7">
				<div class="p-5">
					<div class="text-center">
						<h1 class="h4 text-gray-900 mb-4">Register</h1>
					</div>
					<form class="user" action="/registered" method="post">
						@csrf
						<div class="form-group">
							<input type="text" name="username" class="form-control form-control-user" value="{{ old('username') }}" placeholder="Username">
							@error('username') <small class="text-danger"> {{ $message }} </small> @enderror
						</div>
						<div class="form-group">
							<input type="text" name="email" class="form-control form-control-user" value="{{ old('email') }}" placeholder="Alamat Email">
							@error('email') <small class="text-danger"> {{ $message }} </small> @enderror
						</div>
						<div class="form-group row">
							<div class="col-sm-6 mb-3 mb-sm-0">
								<input type="password" name="password1" class="form-control form-control-user" placeholder="Password">
								@error('password1') <small class="text-danger"> {{ $message }} </small> @enderror
							</div>
							<div class="col-sm-6">
								<input type="password" name="password2" class="form-control form-control-user" placeholder="Ulangi Password">
								@error('password2') <small class="text-danger"> {{ $message }} </small> @enderror
							</div>
						</div>
						<button type="submit" class="btn btn-primary btn-user btn-block">
							Daftar Akun
						</button>
					</form>
					<hr>
					<div class="text-center">
						<span class="small">Sudah punya akun? <a href="/login">Login!</a></span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop