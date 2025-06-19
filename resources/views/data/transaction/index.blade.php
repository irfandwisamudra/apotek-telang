@extends('templates/app')
@section('title', 'Data Transaksi')
@section('subtitle', 'Data Transaksi')
@section('content')

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
						<th>Tanggal</th>
						<th>Nama Customer</th>
						<th>Admin</th>
						<th>Opsi</th>
					</tr>
				</thead>
				<tbody>
					@foreach($transaction as $transaction)
					<tr>
						<td>{{ $transaction->tanggal }}</td>
						<td>{{ $transaction->nama_customer }}</td>
						<td>{{ $transaction->user->username }}</td>
						<td>
							<a class="btn btn-info" href="/transaction/show/{{ $transaction->id }}">Detail</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@stop