@extends('layout.happy') 
@section('Konten')

	<h3>Data Pendapatan</h3>
	<a class="btn btn-warning" href="/pendapatan/tambah"> + Tambah Pendapatan Baru</a>
	<br><br>
	<p>Cari Data Pendapatan berdasarkan nama :</p>
	<form action="/pendapatan/cari" method="GET">
		<input type="text" name="cari" placeholder="Cari Nama .." value="{{ old('cari') }}">
		<input class="btn btn-warning" type="submit" value="CARI">
	<br/>
	<br/>
 
	<table  class="table table-hover">
		<tr class="table-warning">
			
			<th>Nama Pegawai</th>
			<th>Bulan</th>
			<th>Tahun</th>
			<th>Gaji</th>
            <th>Tunjangan</th>
            <th>Opsi</th>
		</tr>
		@foreach($pendapatan as $p)
		<tr>
            <div class="table-secondary">
			
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->Bulan }}</td>
			<td>{{ $p->Tahun }}</td>
            <td>{{ $p->Gaji }}</td>
            <td>{{ $p->Tunjangan }}</td>
            </div>
			<td>
				<a href="/pendapatan/edit/{{ $p->ID }}">Edit</a>
				|
				<a href="/pendapatan/hapus/{{ $p->ID }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
	{{ $pendapatan->links() }}

@endsection


