@extends('templates/app')
@section('title', 'Edit Supplier')
@section('subtitle', 'Edit Supplier')
@section('content')

<div class="card shadow mb-4">
	<form action="/supplier/update/{{ $supplier->id }}" method="post">
		<div class="card-body">
			@method('put')
			@csrf
			<div class="row">
				<div class="form-group col-md-6">
					<label class="form-label">Nama Supplier</label>
					<input type="text" class="form-control" name="nama_supplier" value="{{ $supplier->nama_supplier }}" />
					@error('nama_supplier') <small class="text-danger"> {{ $message }} </small> @enderror
				</div>
				<div class="form-group col-md-6">
					<label class="form-label">Alamat</label>
					<input type="text" class="form-control" name="alamat" value="{{ $supplier->alamat }}"/>
					@error('alamat') <small class="text-danger"> {{ $message }} </small> @enderror
				</div>
			</div>
			<div class="row">
				<div class="form-group col-md-6">
					<label class="form-label">Kota</label>
					<input type="text" class="form-control" name="kota" value="{{ $supplier->kota }}"/>
					@error('kota') <small class="text-danger"> {{ $message }} </small> @enderror
				</div>
				<div class="form-group col-md-6">
					<label class="form-label">No. Telepon</label>
					<input type="text" class="form-control" name="no_telp" value="{{ $supplier->no_telp }}"/>
					@error('no_telp') <small class="text-danger"> {{ $message }} </small> @enderror
				</div>
			</div>
		</div>
		<div class="card-footer">
			<button type="submit" class="btn btn-primary">Update</button>
			<a href="/supplier" class="btn btn-secondary">Back</a>
		</div>
	</form>
</div>
@stop