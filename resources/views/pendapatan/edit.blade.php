@extends('layout.happy') 
@section('Konten')
	<h3>Data Pendapatan</h3>
	<a href="/pendapatan"> Kembali</a>
	
	<br/>

	@foreach($pendapatan as $p)
	
	<div class="container-fluid">
            <div style="margin-left: 2cm; margin-right: 2cm;" class="card">
                <form id="forms" class="row g-3" action="/pendapatan/update" method="post">
				{{ csrf_field() }}
                    <div class="card-header text-center" style="font-size: 30px;">
                        Form Edit Data Pendapatan Pegawai
                    </div>
                    <div class="card-body">
                        <div class="row">
							<input type="hidden" name="id" value="{{ $p->ID }}"> <br/>
                            <label for="namabarang" class="col-sm-3 col-form-label col-form-label-lg">ID
                                </label>
								<span class="col-sm-1">:</span>
                            <div class="col-sm-8">
                                <input type="number" class="form-control form-control-lg" id="namabarang"
                                    placeholder="" name="ID" required="required" value="{{ $p->ID }}">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <label for="harga" class="col-sm-3 col-form-label col-form-label-lg">IDPegawai</label>
							<span class="col-sm-1">:</span>
                            <div class="col-sm-8">
                                <input type="text" class="form-control form-control-lg" id="harga"
                                    placeholder="" name="IDPegawai" value="{{ $p->IDPegawai }}">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <label for="jenisbarang" class="col-sm-3 col-form-label col-form-label-lg">Bulan</label>
							<span class="col-sm-1">:</span>
							<div class="col-sm-8">
                                <input type="number" class="form-control form-control-lg" id=""
                                    placeholder="" name="Bulan" required="required" value="{{ $p->Bulan }}">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <label for="barcode" class="col-sm-3 col-form-label col-form-label-lg">Tahun</label>
							<span class="col-sm-1">:</span>
                            <div class="col-sm-8">
                                <input type="" class="form-control form-control-lg" id="barcode"
                                    placeholder="" name="Tahun" required="required" value="{{ $p->Tahun }}">
                            </div>
                        </div>
                        <br>
						<div class="row">
                            <label for="barcode" class="col-sm-3 col-form-label col-form-label-lg">Gaji</label>
							<span class="col-sm-1">:</span>
                            <div class="col-sm-8">
                                <input type="number" class="form-control form-control-lg" id="barcode"
                                    placeholder="" name="Gaji" required="required" value="{{ $p->Gaji }}">
                            </div>
                        </div>
						<br>
						<div class="row">
                            <label for="barcode" class="col-sm-3 col-form-label col-form-label-lg">Tunjangan</label>
							<span class="col-sm-1">:</span>
                            <div class="col-sm-8">
                                <input type="number" class="form-control form-control-lg" id="barcode"
                                    placeholder="" name="Tunjangan" required="required" value="{{ $p->Tunjangan }}">
                            </div>
                        </div>
                        
                        <div class="row">
                        <div class="col-3 ">
                            <button  type="submit" class="btn btn-primary my-4 form-control" id="kirim" value="Simpan Data">Edit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
	@endforeach
		
@endsection

