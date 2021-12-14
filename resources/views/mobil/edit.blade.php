@extends('layout.happy') 
@section('Konten')
	<h3>Edit Data Mobil</h3>

	<a href="/mobil"> Kembali</a>
	
	<br/>
	<br/>

	@foreach($mobil as $p)
	<div class="container-fluid">
            <div style="margin-left: 2cm; margin-right: 2cm;" class="card">
                <form id="forms" class="row g-3" action="/mobil/update" method="post">
				{{ csrf_field() }}
                    <div class="card-header text-center" style="font-size: 30px;">
                        Form Edit Data Mobil
                    </div>
                    <div class="card-body">
                        <div class="row">
							<input type="hidden" name="id" value="{{ $p->kodemobil }}"> <br/>
                            <label for="merk" class="col-sm-3 col-form-label col-form-label-lg">Merk
                                </label>
								<span class="col-sm-1">:</span>
                            <div class="col-sm-8">
                                <input type="text" class="form-control form-control-lg" id="merk"
                                    placeholder="" name="merk" required="required" value="{{ $p->merkmobil }}">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <label for="harga" class="col-sm-3 col-form-label col-form-label-lg">Stock</label>
							<span class="col-sm-1">:</span>
                            <div class="col-sm-8">
                                <input type="number" class="form-control form-control-lg" id="stock"
                                    placeholder="" name="stock" value="{{ $p->stockmobil }}">
                            </div>
                        </div>
                        <br>
                        <div class="row mb-3 justify-content-around">
                            <label class="col-lg-3 form-label">
                             Tersedia 
                            </label>
                            <span class="col-sm-1">:</span>
                            <div class="col-lg-8">
                                <input type="radio" id="y" name="tersedia" value="Y" @if($p->tersedia==='Y') checked="checked" @endif>
                                <label for="y">Iya</label><br>
                                <input type="radio" id="n" name="tersedia" value="N"   @if($p->tersedia==='N') checked="checked" @endif>
                                <label for="n">Tidak</label><br>           
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



