@extends('layout.happy') 
@section('Konten')

	<h3>Data Mobil</h3>
 
	<a class="btn btn-warning" href="/mobil/tambah"> + Tambah Data Mobil</a>
	
	<br/>
	<br/>
	
	<p>Cari Data Mobil berdasarkan nama:</p>
	<form action="/mobil/cari" method="GET">
		<input type="text" name="cari" placeholder="Cari Nama Mobil .." value="{{ old('cari') }}">
		<input class="btn btn-warning" type="submit" value="CARI">
	</form>

	<table class="table table-hover">
		<tr class="table-warning">
			<th>No.</th>
			<th>Merk</th>
			<th>Stock</th>
			<th>Tersedia</th>
			<th>Opsi</th>
		</tr>
		@foreach($mobil as $p)
		<tr>
		<div class="table-secondary">
			<td>{{ $loop->iteration }}</td>
            <td>{{ $p->merkmobil }}</td>
			<td>{{ $p->stockmobil }}</td>
			<td>{{ $p->tersedia }}</td>
			</div>
			<td>
                <a href="/mobil/detail/{{ $p->kodemobil }}">Details</a>
				|
				<a href="/mobil/edit/{{ $p->kodemobil }}">Edit</a>
				|
				<a href="/mobil/hapus/{{ $p->kodemobil }}">Hapus</a>
			</td>
		</tr>

		@endforeach
	</table>		 
       {{ $mobil->links() }}

 @endsection
 



