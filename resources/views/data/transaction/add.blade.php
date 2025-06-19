@extends('templates/app')
@section('title', 'Tambah Transaksi')
@section('subtitle', 'Tambah Transaksi')
@section('content')

<div class="card shadow mb-4">
	<div class="card-body">
		<p><strong>Data Transaksi</strong> {{ date('Y-m-d H:m:s') }} </p> 
		<p><strong>Admin</strong> {{ session('username') }} </p>
	</div>
</div>

<div class="card shadow mb-4">
	<form action="/transaction/store" method="post">
		<div class="card-body">
			@csrf
			<input type="hidden" name="tanggal" value="{{ date('Y-m-d H:m:s') }}" />
			<input type="hidden" name="user_id" value="{{ session('id') }}" />
			<div class="form-group">
				<label class="form-label">Nama Customer</label>
				<input type="text" class="form-control" name="nama_customer" />
				@error('nama_customer') <small class="text-danger"> {{ $message }} </small> @enderror
			</div>
			<div class="row">
				<div class="form-group col-md-6">
					<label class="form-label">Obat</label>
					<select class="choose-drug form-control select2" name="kode_obat">
						<option selected disabled>Pilih Obat</option>
						@foreach($drugs as $drug)
						<option value="{{ $drug->kode }}" data-price="{{ $drug->harga }}">{{ $drug->nama_obat }}</option>
						@endforeach
					</select>
					@error('kode_obat') <small class="text-danger"> {{ $message }} </small> @enderror
				</div>
				<div class="form-group col-md-3">
					<label class="form-label">Jumlah</label>
					<input type="number" class="form-control qty" name="qty">
					@error('qty') <small class="text-danger"> {{ $message }} </small> @enderror
				</div>
				<div class="form-group col-md-3">
					<label class="form-label">Total Harga</label>
					<input type="text" name="total" class="total form-control" readonly>
				</div>
			</div>
		</div>
		<div class="card-footer">
			<button type="submit" class="btn btn-primary">Tambah</button>
			<a href="/transaction" class="btn btn-secondary">Kembali</a>
		</div>
	</form>
</div>
@stop