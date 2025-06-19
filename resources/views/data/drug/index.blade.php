@extends('templates/app')
@section('title', 'Data Obat')
@section('subtitle', 'Data Obat')
@section('content')
<!-- DataTales Example -->
<div class="card shadow mb-4">
	<div class="card-body">
		@if (session('created'))
			<div class="alert alert-success">
				{{ session('created') }}
			</div>
		@elseif (session('updated'))
			<div class="alert alert-success">
				{{ session('updated') }}
			</div>
		@elseif (session('deleted'))
			<div class="alert alert-success">
				{{ session('deleted') }}
			</div>
		@endif
		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th>Icon</th>
						<th>Kode</th>
						<th>Supplier ID</th>
						<th>Nama Obat</th>
						<th>Produser</th>
						<th>Stok</th>
						<th>Harga</th>
						<th>Opsi</th>
					</tr>
				</thead>
				<tbody>
					@foreach($drugs as $drug)
					<tr>
						<td>
							<img width="60" height="60" src="{{ asset('storage/' . $drug->icon) }}">
						</td>
						<td>{{ $drug->kode }}</td>
						<td>{{ $drug->supplier_id }} - {{ $drug->supplier->nama_supplier }}</td>
						<td>{{ $drug->nama_obat }}</td>
						<td>{{ $drug->produser }}</td>
						<td>{{ $drug->stok }}</td>
						<td>Rp. {{ $drug->harga }}</td>
						<td>
							<a href="/drug/show/{{ $drug->id }}" class="btn btn-info">Detail</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@stop