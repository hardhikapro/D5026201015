<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	
	<h3>Edit Pendapatan</h3>

	<a href="/pendapatan"> Kembali</a>
	
	<br/>
	<br/>

	@foreach($pendapatan as $p)
	<form action="/pendapatan/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->ID }}"> <br/>
        ID <input type="number" name="ID" required="required" value="{{ $p->ID }}"> <br/>
		IDPegawai <input type="number" name="IDPegawai" required="required" value="{{ $p->IDPegawai }}"> <br/>
		Bulan <input type="number" name="Bulan" required="required" value="{{ $p->Bulan }}"> <br/>
        Tahun <input type="" name="Tahun" required="required" value="{{ $p->Tahun }}"> <br/>
        Gaji <input type="number" name="Gaji" required="required" value="{{ $p->Gaji }}"> <br/>
        Tunjangan <input type="number" name="Tunjangan" required="required" value="{{ $p->Tunjangan }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
		

</body>
</html>