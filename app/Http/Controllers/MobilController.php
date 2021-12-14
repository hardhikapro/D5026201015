<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MobilController extends Controller
{
    public function index()
    {
    	// mengambil data dari table mobil
		$mobil = DB::table('mobil')->paginate(5) ;


    	// mengirim data pegawai ke view index
    	return view('mobil.index',['mobil' => $mobil]);

    }



    // method untuk menampilkan view form tambah mobil
public function tambah()
{

	// memanggil view tambah
	return view('mobil.tambah');

}



// method untuk insert data ke table pegawai
public function store(Request $request)
{
	// insert data ke table pegawai
	DB::table('mobil')->insert([
		'merkmobil' => $request->merk,
		'stockmobil' => $request->stock,
		'tersedia' => $request->tersedia
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/mobil');

}



// method untuk edit data pegawai
public function edit($id)
{
	// mengambil data pegawai berdasarkan id yang dipilih
	$mobil = DB::table('mobil')->where('kodemobil',$id)->get();
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('mobil.edit',['mobil' => $mobil]);
 
}


// update data pegawai
public function update(Request $request)
{
	// update data pegawai
	DB::table('mobil')->where('kodemobil',$request->id)->update([
		'merkmobil' => $request->merk,
		'stockmobil' => $request->stock,
		'tersedia' => $request->tersedia
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/mobil');
}




// method untuk hapus data pegawai
public function hapus($id)
{
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('mobil')->where('kodemobil',$id)->delete();
		
	// alihkan halaman ke halaman pegawai
	return redirect('/mobil');
}



public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
    		// mengambil data dari table pegawai sesuai pencarian data
		$mobil = DB::table('mobil')
		->where('merkmobil','like',"%".$cari."%")
		->paginate();
 
    		// mengirim data pegawai ke view index
		return view('mobil.index',['mobil' => $mobil]);
 
	}


	public function view($id)
{
	// mengambil data pegawai berdasarkan id yang dipilih
	$mobil = DB::table('mobil')->where('kodemobil',$id)->get();
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('mobil.detail',['mobil' => $mobil]);

}


}