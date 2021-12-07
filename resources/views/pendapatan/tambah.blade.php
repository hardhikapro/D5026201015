@extends('layout.happy') 
@section('Konten')
<h3>Data Pendapatan</h3>
	<a href="/pendapatan"> Kembali</a>
	
	<br>

	<div class="container-fluid">
            <div style="margin-left: 2cm; margin-right: 2cm;" class="card">
                <form id="forms" class="row g-3" action="/pendapatan/store" method="post">
				{{ csrf_field() }}
                    <div class="card-header text-center" style="font-size: 30px;">
                        Form Tambah Data Pendapatan Pegawai
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <label for="namabarang" class="col-sm-3 col-form-label col-form-label-lg">ID
                                </label>
								<span class="col-sm-1">:</span>
                            <div class="col-sm-8">
                                <input type="number" class="form-control form-control-lg" id="namabarang"
                                    placeholder="" name="ID" required="required">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <label for="harga" class="col-sm-3 col-form-label col-form-label-lg">IDPegawai</label>
							<span class="col-sm-1">:</span>
                            <div class="col-sm-8">
                                <input type="text" class="form-control form-control-lg" id="harga"
                                    placeholder="" name="IDPegawai">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <label for="jenisbarang" class="col-sm-3 col-form-label col-form-label-lg">Bulan</label>
							<span class="col-sm-1">:</span>
							<div class="col-sm-8">
                                <input type="number" class="form-control form-control-lg" id=""
                                    placeholder="" name="Bulan" required="required">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <label for="barcode" class="col-sm-3 col-form-label col-form-label-lg">Tahun</label>
							<span class="col-sm-1">:</span>
                            <div class="col-sm-8">
                                <input type="" class="form-control form-control-lg" id="barcode"
                                    placeholder="" name="Tahun" required="required">
                            </div>
                        </div>
                        <br>
						<div class="row">
                            <label for="barcode" class="col-sm-3 col-form-label col-form-label-lg">Gaji</label>
							<span class="col-sm-1">:</span>
                            <div class="col-sm-8">
                                <input type="number" class="form-control form-control-lg" id="barcode"
                                    placeholder="" name="Gaji" required="required">
                            </div>
                        </div>
						<br>
						<div class="row">
                            <label for="barcode" class="col-sm-3 col-form-label col-form-label-lg">Tunjangan</label>
							<span class="col-sm-1">:</span>
                            <div class="col-sm-8">
                                <input type="number" class="form-control form-control-lg" id="barcode"
                                    placeholder="" name="Tunjangan" required="required">
                            </div>
                        </div>
                        
                        <div class="row">
                        <div class="col-3 ">
                            <button  type="submit" class="btn btn-primary my-4 form-control" id="kirim" value="Simpan Data">Tambah</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

@endsection

