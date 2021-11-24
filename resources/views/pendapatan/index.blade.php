<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body class="container mt-5 m-6">
 

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
    
 
 
</body>
</html>

