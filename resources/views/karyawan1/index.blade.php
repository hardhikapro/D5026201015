@extends('layout.happy') 
@section('Konten')

	<h3>Data Karyawan1</h3>
 

	
	<br/>
	<br/>
	
	<p>Cari Data Karyawan1 berdasarkan nama:</p>
	<form action="/karyawan1/cari" method="GET">
		<input type="text" name="cari" placeholder="Cari Nama Karyawan1 .." value="{{ old('cari') }}">
		<input class="btn btn-warning" type="submit" value="CARI">
	</form>

	<table class="table table-hover">
		<tr class="table-warning">
            <th>No.</th>
			<th>NIP</th>
			<th>Nama</th>
			<th>Pangkat</th>
			<th>Gaji</th>
            <th>Opsi</th>
		</tr>
		@foreach($karyawan1 as $p)
		<tr>
		<div class="table-secondary">
			<td>{{ $loop->iteration }}</td>
            <td>{{ $p->NIP }}</td>
			<td>{{ $p->Nama }}</td>
			<td>{{ $p->Pangkat }}</td>
            <td>Rp. {{ number_format($p->Gaji) }}</td>
			</div>
			<td>
                <a href="/karyawan1/detail/{{ $p->NIP }}">View</a>
				|
				<a href="/karyawan1/edit/{{ $p->NIP }}">Edit</a>
				|
				<a href="/karyawan1/hapus/{{ $p->NIP }}">Hapus</a>
			</td>
		</tr>

		@endforeach
	</table>		 
       {{ $karyawan1->links() }}

 @endsection
 



