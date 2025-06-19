@extends('templates/app')
@section('title', 'Data Supplier')
@section('subtitle', 'Data Suppliers')
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
						<th>Nama Supplier</th>
						<th>Alamat</th>
						<th>Kota</th>
						<th>No. Telepon</th>
						<th>Opsi</th>
					</tr>
				</thead>
				<tbody>
					@foreach($supplier as $supplier)
					<tr>
						<td>{{ $supplier->nama_supplier }}</td>
						<td>{{ $supplier->alamat }}</td>
						<td>{{ $supplier->kota }}</td>
						<td>{{ $supplier->no_telp }}</td>
						<td>
							<a class="btn btn-info" href="/supplier/show/{{ $supplier->id }}">Detail</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@stop