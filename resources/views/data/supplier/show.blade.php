@extends('templates/app')
@section('title', 'Detail Supplier')
@section('subtitle', 'Detail Supplier')
@section('content')

<div class="card shadow mb-4">
	<div class="card-header d-flex">
		<a class="btn btn-secondary" href="/supplier">Kembali</a>
		<a class="btn btn-success mx-2" href="/supplier/edit/{{ $supplier->id }}">Edit</a>
		<form action="/supplier/delete/{{ $supplier->id }}" method="post">
			@method("delete")
			@csrf
			<button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin untuk menghapus supplier?');">Hapus</button>
		</form>
	</div>
	<div class="card-body">
		<div class="row">
			<ul class="list-group col-md-2 font-weight-bolder">
				<li class="list-group-item">Nama Supplier</li>
				<li class="list-group-item">Alamat</li>
				<li class="list-group-item">Kota</li>
				<li class="list-group-item">No. Telepon</li>
			</ul>
			<ul class="list-group col-md-5">
				<li class="list-group-item">{{ $supplier->nama_supplier }}</li>
				<li class="list-group-item">{{ $supplier->alamat }}</li>
				<li class="list-group-item">{{ $supplier->kota }}</li>
				<li class="list-group-item">{{ $supplier->no_telp }}</li>
			</ul>
		</div>
	</div>
</div>
@stop