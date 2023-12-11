<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
 
class KaryawanController extends Controller
{
	public function index()
	{
		$karyawan = DB::table('karyawan')
				->orderBy('kodepegawai', 'asc')->get(); 
		return view('indexKaryawan',['karyawan' => $karyawan]);
	}
 
	// method untuk menampilkan view form tambah karyawan
	public function tambah()
	{
 		return view('tambahKaryawan');

	}
 
	// method untuk insert data ke table karyawan
	public function store(Request $request)
	{
		$checkExistingIndex = DB::table('karyawan')->where('kodepegawai',$request->kodepegawai)->count();
		if($checkExistingIndex > 0){
			return redirect('/karyawan')->with('error', 'Kode Pegawai sudah ada!');
		}

		// insert data ke table karyawan
		DB::table('karyawan')->insert([
			'kodepegawai' => $request->kodepegawai,
			'namalengkap' => $request->namalengkap,
			'divisi' => $request->divisi,
			'departemen' => $request->departemen,
		]);
		// alihkan halaman ke halaman karyawan
		return redirect('/karyawan');
	}

 
	// method untuk hapus data karyawan
	public function hapus($id)
	{
		// menghapus data karyawan berdasarkan id yang dipilih
		DB::table('karyawan')->where('kodepegawai',$id)->delete();
		
		// alihkan halaman ke halaman karyawan
		return redirect('/karyawan');
	}
}