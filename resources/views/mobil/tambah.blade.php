@extends('layout.happy') 
@section('Konten')
	<h3>Tambah Data Mobil</h3>

	<a href="/mobil"> Kembali</a>
	
	<br/>
	<br/>

	<div class="container-fluid">
            <div style="margin-left: 2cm; margin-right: 2cm;" class="card">
                <form id="forms" class="row g-3" action="/mobil/store" method="post">
				{{ csrf_field() }}
                    <div class="card-header text-center" style="font-size: 30px;">
                        Form Tambah Data Mobil
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <label for="merk" class="col-sm-3 col-form-label col-form-label-lg">Merk
                                </label>
								<span class="col-sm-1">:</span>
                            <div class="col-sm-8">
                                <input type="text" class="form-control form-control-lg" id="merk"
                                    placeholder="" name="merk" required="required">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <label for="stock" class="col-sm-3 col-form-label col-form-label-lg">Stock</label>
							<span class="col-sm-1">:</span>
                            <div class="col-sm-8">
                                <input type="number" class="form-control form-control-lg" id="stock"
                                    placeholder="" name="stock">
                            </div>
                        </div>
                        <br>
                        <div class="row mb-3 justify-content-around">
                        <label class="col-lg-3 form-label">
                             Tersedia
                        </label>
                        <span class="col-sm-1">:</span>
                        <div class="col-lg-8">
                            <input type="radio" id="y" name="tersedia" value="Y">
                            <label for="y">Iya</label><br>
                            <input type="radio" id="n" name="tersedia" value="N" checked="checked">
                            <label for="n">Tidak</label><br>
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

