@extends('layout.happy') 
@section('Konten')

	<h3>Data Absen</h3>

	<a class="btn btn-warning" href="/absen/tambah"> + Tambah Absen Baru</a>
	<br><br>
	<p>Cari Data Absen Pegawai berdasarkan nama:</p>
	<form action="/absen/cari" method="GET">
		<input type="text" name="cari" placeholder="Cari Nama Pegawai .." value="{{ old('cari') }}">
		<input class="btn btn-warning" type="submit" value="CARI">
	</form>
	<br/>
	<br/>

	<table class="table table-hover">
		<tr class="table-warning">
			<th>Nama Pegawai</th>
			<th>Tanggal</th>
			<th>Status</th>
			<th>Opsi</th>
		</tr>
		@foreach($absen as $a)
		<tr>
			<div class="table-secondary">
			<td>{{ $a->pegawai_nama }}</td>
			<td>{{ $a->Tanggal }}</td>
			<td>{{ $a->Status }}</td>
			</div>
			<td>
				<a href="/absen/detail/{{ $a->ID}}">Detail</a>
				|
				<a href="/absen/edit/{{ $a->ID}}">Edit</a>
				|
				<a href="/absen/hapus/{{ $a->ID}}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
	{{ $absen->links() }}

@endsection