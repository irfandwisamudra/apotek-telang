@extends('templates/app')
@section('title', 'Detail Obat')
@section('subtitle', 'Detail Obat')
@section('content')
<!-- DataTales Example -->
<div class="card shadow mb-4">
	<div class="card-header d-flex">
		<a class="btn btn-secondary" href="/drug">Kembali</a>
		<a class="btn btn-success mx-2" href="/drug/edit/{{ $drug->id }}">Edit</a>
		<form action="/drug/delete/{{ $drug->id }}" method="post">
			@method("delete")
			@csrf
			<button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin untuk menghapus obat?');">Hapus</button>
		</form>
	</div>
	<div class="card-body">
		<div class="row">
			<ul class="list-group col-md-2 font-weight-bolder">
				<li class="list-group-item">Kode</li>
				<li class="list-group-item">Supplier ID</li>
				<li class="list-group-item">Nama Obat</li>
				<li class="list-group-item">Produser</li>
				<li class="list-group-item">Stok</li>
				<li class="list-group-item">Harga</li>
			</ul>
			<ul class="list-group col-md-5">
				<li class="list-group-item">{{ $drug->kode }}</li>
				<li class="list-group-item">{{ $drug->supplier_id }}</li>
				<li class="list-group-item">{{ $drug->nama_obat }}</li>
				<li class="list-group-item">{{ $drug->produser }}</li>
				<li class="list-group-item">{{ $drug->stok }}</li>
				<li class="list-group-item">{{ $drug->harga }}</li>
			</ul>
			<img width="200" height="200" src="{{ asset('storage/' . $drug->icon) }}" alt="{{ $drug->nama_drug }}">
		</div>
	</div>
</div>
@stop