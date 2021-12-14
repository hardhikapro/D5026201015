@extends('layout.happy') 
@section('Konten')
	<h3>Edit Pegawai</h3>

	<a href="/pegawai"> Kembali</a>
	
	<br/>
	<br/>

	@foreach($pegawai as $p)
	<div class="container-fluid">
            <div style="margin-left: 2cm; margin-right: 2cm;" class="card">
                <form id="forms" class="row g-3" action="/pegawai/" method="GET">
				{{ csrf_field() }}
                    <div class="card-header text-center" style="font-size: 30px;">
                        Form Edit Data Pegawai
                    </div>
                    <div class="card-body">
                        <div class="row">
							<input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>
                            <label for="namabarang" class="col-sm-3 col-form-label col-form-label-lg">Nama
                                </label>
								<span class="col-sm-1">:</span>
                            <div class="col-sm-8">
                                <label type="text" class="form-control form-control-lg" id="namabarang"
                                    placeholder="" name="nama" required="required" value="{{ $p->pegawai_nama }}">{{ $p->pegawai_nama }}</label>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <label for="harga" class="col-sm-3 col-form-label col-form-label-lg">Jabatan</label>
							<span class="col-sm-1">:</span>
                            <div class="col-sm-8">
                                <label type="text" class="form-control form-control-lg" id="harga"
                                    placeholder="" name="jabatan" value="{{ $p->pegawai_jabatan }}">{{ $p->pegawai_jabatan }}</label>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <label for="jenisbarang" class="col-sm-3 col-form-label col-form-label-lg">Umur</label>
							<span class="col-sm-1">:</span>
							<div class="col-sm-8">
                                <label type="number" class="form-control form-control-lg" id=""
                                    placeholder="" name="umur" required="required" value="{{ $p->pegawai_umur }}">{{ $p->pegawai_umur }}<label>
                            </div>
                        </div>
                        <br>
						<div class="row">
                            <label for="barcode" class="col-sm-3 col-form-label col-form-label-lg">Alamat</label>
							<span class="col-sm-1">:</span>
                            <div class="col-sm-8">
							<label name="alamat" required="required">{{ $p->pegawai_alamat }}</label> <br/>
                            </div>
                        </div>
                        
                        <div class="row">
                        <div class="col-3 ">
                            <button  type="submit" class="btn btn-primary my-4 form-control" id="kirim">Kembali</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
	@endforeach
		

@endsection

