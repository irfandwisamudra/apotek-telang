@extends('templates/app')
@section('title', 'Edit Obat')
@section('subtitle', 'Edit Obat')
@section('content')
<!-- DataTales Example -->
<div class="card shadow mb-4">
	<form action="/drug/update/{{ $drug->id }}" method="post" enctype="multipart/form-data">
		<div class="card-body">
			@method('put')
			@csrf
			<div class="row">
				<div class="form-group col-md-6">
					<label class="form-label">Icon</label>
					<input type="file" class="form-control pb-5" name="icon" />
					@error('icon') <small class="text-danger"> {{ $message }} </small> @enderror
				</div>
				<div class="form-group col-md-6">
					<label class="form-label">Kode</label>
					<input type="text" class="form-control" name="kode" value="{{ $drug->kode }}" />
					@error('kode') <small class="text-danger"> {{ $message }} </small> @enderror
				</div>
				<div class="form-group col-md-6">
					<label class="form-label">Supplier ID</label>
					<select class="form-control select2" name="supplier_id">
						<option selected disabled>Pilih Supplier</option>
						@foreach($suppliers as $supplier)
						<option {{ ($supplier->id === $supplier->id) ? 'selected' : '' }} value="{{ $supplier->id }}">{{ $supplier->id }} - {{ $supplier->nama_supplier }}</option>
						@endforeach
					</select>
					@error('supplier_id') <small class="text-danger"> {{ $message }} </small> @enderror
				</div>
			</div>
			<div class="form-group">
				<label class="form-label">Name Obat</label>
				<input type="text" class="form-control" name="nama_obat" value="{{ $drug->nama_obat }}"/>
				@error('nama_obat') <small class="text-danger"> {{ $message }} </small> @enderror
			</div>
			<div class="form-group">
				<label class="form-label">Produser</label>
				<input type="text" class="form-control" name="produser" value="{{ $drug->produser }}"/>
				@error('produser') <small class="text-danger"> {{ $message }} </small> @enderror
			</div>
			<div class="row">
				<div class="form-group col-md-6">
					<label class="form-label">Stok</label>
					<input type="number" class="form-control" name="stok" value="{{ $drug->stok }}"/>
					@error('stok') <small class="text-danger"> {{ $message }} </small> @enderror
				</div>
				<div class="form-group col-md-6">
					<label class="form-label">Harga</label>
					<input type="number" class="form-control" name="harga" value="{{ $drug->harga }}"/>
					@error('harga') <small class="text-danger"> {{ $message }} </small> @enderror
				</div>
			</div>
		</div>
		<div class="card-footer">
			<button type="submit" class="btn btn-primary">Update</button>
			<a href="/drug" class="btn btn-secondary">Kembali</a>
		</div>
	</form>
</div>
@stop