@extends('templates/app')
@section('title', 'Tambah Supplier')
@section('subtitle', 'Tambah Supplier')
@section('content')

<div class="card shadow mb-4">
	<form action="/supplier/store" method="post">
		<div class="card-body">
			@csrf
			<div class="row">
				<div class="form-group col-md-6">
					<label class="form-label">Nama Supplier</label>
					<input type="text" class="form-control" name="nama_supplier" />
					@error('nama_supplier') <small class="text-danger"> {{ $message }} </small> @enderror
				</div>
				<div class="form-group col-md-6">
					<label class="form-label">Alamat</label>
					<input type="text" class="form-control" name="alamat" />
					@error('alamat') <small class="text-danger"> {{ $message }} </small> @enderror
				</div>
			</div>
			<div class="row">
				<div class="form-group col-md-6">
					<label class="form-label">Kota</label>
					<input type="text" class="form-control" name="kota" />
					@error('kota') <small class="text-danger"> {{ $message }} </small> @enderror
				</div>
				<div class="form-group col-md-6">
					<label class="form-label">No. Telepon</label>
					<input type="text" class="form-control" name="no_telp" />
					@error('no_telp') <small class="text-danger"> {{ $message }} </small> @enderror
				</div>
			</div>
		</div>
		<div class="card-footer">
			<button type="submit" class="btn btn-primary">Tambah</button>
			<a href="/supplier" class="btn btn-secondary">Kembali</a>
		</div>
	</form>
</div>
@stop