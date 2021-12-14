@extends('layout.happy') 
@section('Konten')

	<h3>Data Pegawai</h3>
 
	<a class="btn btn-warning" href="/pegawai/tambah"> + Tambah Pegawai Baru</a>
	
	<br/>
	<br/>
	
	<p>Cari Data Pegawai berdasarkan nama dan alamat :</p>
	<form action="/pegawai/cari" method="GET">
		<input type="text" name="cari" placeholder="Cari nama dan alamat. . ." value="{{ old('cari') }}">
		<input class="btn btn-warning" type="submit" value="CARI">
	</form>

	<table class="table table-hover">
		<tr class="table-warning">
			<th>No</th>
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Umur</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		@foreach($pegawai as $p)
		<tr>
		<div class="table-secondary">
			<td>{{ $loop->iteration }}</td>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->pegawai_jabatan }}</td>
			<td>{{ $p->pegawai_umur }}</td>
			<td>{{ $p->pegawai_alamat }}</td>
			</div>
			<td>
				<a href="/pegawai/detail/{{ $p->pegawai_id }}">Detail</a>
				|
				<a href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>
				|
				<a href="/pegawai/hapus/{{ $p->pegawai_id }}">Hapus</a>
			</td>
		</tr>

		@endforeach
	</table>	
	{{ $pegawai->links()  }}
 @endsection
 



