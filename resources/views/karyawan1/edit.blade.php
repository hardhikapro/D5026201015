@extends('layout.happy') 
@section('Konten')
	<h3>Edit Data Karyawan1</h3>

	<a href="/karyawan1"> Kembali</a>
	
	<br/>
	<br/>

	@foreach($karyawan1 as $p)
	<div class="container-fluid">
            <div style="margin-left: 2cm; margin-right: 2cm;" class="card">
                <form id="forms" class="row g-3" action="/karyawan1/update" method="post">
				{{ csrf_field() }}
                    <div class="card-header text-center" style="font-size: 30px;">
                        Form Edit Data Karyawan1
                    </div>
                    <div class="card-body">
                        <div class="row">
                        
							<input type="hidden" name="id" value="{{ $p->NIP }}"> <br/>
                            <!-- <label for="NIP" class="col-sm-3 col-form-label col-form-label-lg">NIP
                                </label>
								<span class="col-sm-1">:</span>
                            <div class="col-sm-8">
                                <input type="text" class="form-control form-control-lg" id="NIP"
                                    placeholder="" name="NIP" required="required" value="{{ $p->NIP }}">
                            </div> -->
                        </div>
                        <br>
                        <div class="row">
                            <label for="Nama" class="col-sm-3 col-form-label col-form-label-lg">Nama</label>
							<span class="col-sm-1">:</span>
                            <div class="col-sm-8">
                                <input type="text" class="form-control form-control-lg" id="Nama"
                                    placeholder="" name="Nama" value="{{ $p->Nama }}">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <label for="Pangkat" class="col-sm-3 col-form-label col-form-label-lg">Pangkat</label>
							<span class="col-sm-1">:</span>
                            <div class="col-sm-8">
                                <input type="text" class="form-control form-control-lg" id="Pangkat"
                                    placeholder="" name="Pangkat" value="{{ $p->Pangkat }}">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <label for="Gaji" class="col-sm-3 col-form-label col-form-label-lg">Gaji</label>
							<span class="col-sm-1">:</span>
                            <div class="col-sm-8">
                                <input type="text" class="form-control form-control-lg" id="Gaji"
                                    placeholder="" name="Gaji" value="{{ $p->Gaji }}">
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
