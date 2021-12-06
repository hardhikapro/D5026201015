@extends('layout.happy') 
@section('Konten')

	<h3>Data Pendapatan</h3>
	<a class="btn btn-warning" href="/pendapatan/tambah"> + Tambah Pendapatan Baru</a>
	
	<br/>
	<br/>
 
	<table  class="table table-hover">
		<tr class="table-warning">
			<th>ID</th>
			<th>IDPegawai</th>
			<th>Bulan</th>
			<th>Tahun</th>
			<th>Gaji</th>
            <th>Tunjangan</th>
            <th>Opsi</th>
		</tr>
		@foreach($pendapatan as $p)
		<tr>
            <div class="table-secondary">
			<td>{{ $p->ID }}</td>
			<td>{{ $p->IDPegawai }}</td>
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
@endsection

