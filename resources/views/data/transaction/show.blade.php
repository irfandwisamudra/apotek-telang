@extends('templates/app')
@section('title', 'Detail Transaksi')
@section('subtitle', 'Detail Transaksi')
@section('content')

<div class="card shadow mb-4">
	<div class="card-header d-flex">
		<a class="btn btn-secondary" href="/transaction">Kembali</a>
		<form action="/transaction/delete/{{ $transaction->id }}" method="post">
			@method("delete")
			@csrf
			<button type="submit" class="btn btn-danger ml-2" onclick="return confirm('Apakah Anda yakin untuk menghapus transaksi?');">Hapus</button>
		</form>
	</div>
	<div class="card-body">
		<div class="row">
			<ul class="list-group col-md-3 font-weight-bolder">
				<li class="list-group-item">Tanggal Transaksi</li>
				<li class="list-group-item">Admin</li>
				<li class="list-group-item">Nama Customer</li>
				<li class="list-group-item">Kode Obat</li>
				<li class="list-group-item">Jumlah</li>
				<li class="list-group-item">Total Harga</li>
			</ul>
			<ul class="list-group col-md-5">
				<li class="list-group-item">{{ $transaction->tanggal }}</li>
				<li class="list-group-item">{{ $transaction->user->username }}</li>
				<li class="list-group-item">{{ $transaction->nama_customer }}</li>
				<li class="list-group-item">{{ $transaction->kode_obat }}</li>
				<li class="list-group-item">{{ $transaction->qty }}</li>
				<li class="list-group-item">Rp. {{ $transaction->total }}</li>
			</ul>
		</div>
	</div>
</div>
@stop