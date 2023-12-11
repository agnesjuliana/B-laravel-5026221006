<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
 
class SepedamotorController extends Controller
{
	public function index()
	{
    	// mengambil data dari table sepedamotor
		// $sepedamotor = DB::table('sepedamotor')->get();
		$sepedamotor = DB::table('sepedamotor')
				->orderBy('kodesepedamotor', 'asc')
				->paginate(10);

		
 
    	// mengirim data sepedamotor ke view index
		return view('indexSepedamotor',['sepedamotor' => $sepedamotor]);
 
	}

	public function viewSepedamotor($id)
	{
		// mengambil data sepedamotor berdasarkan id yang dipilih
		$sepedamotor = DB::table('sepedamotor')->where('kodesepedamotor',$id)->get();
		// passing data sepedamotor yang didapat ke view edit.blade.php
		return view('lihatSepedamotor',['sepedamotor' => $sepedamotor]);
 
	}
 
	// method untuk menampilkan view form tambah sepedamotor
	public function tambah()
	{
 
		// memanggil view tambah
		return view('tambahSepedamotor');
 
	}
 
	// method untuk insert data ke table sepedamotor
	public function store(Request $request)
	{
		// insert data ke table sepedamotor
		DB::table('sepedamotor')->insert([
			'merksepedamotor' => $request->merksepedamotor,
			'stocksepedamotor' => $request->stocksepedamotor,
			'tersedia' => $request->stocksepedamotor > 0 ? 'Y' : 'T',
		]);
		// alihkan halaman ke halaman sepedamotor
		return redirect('/sepedamotor');
 
	}
 
	// method untuk edit data sepedamotor
	public function edit($id)
	{
		// mengambil data sepedamotor berdasarkan id yang dipilih
		$sepedamotor = DB::table('sepedamotor')
			->where('kodesepedamotor',$id)->get();
		// passing data sepedamotor yang didapat ke view edit.blade.php
		return view('editSepedamotor',['sepedamotor' => $sepedamotor]);
 
	}
 
	// update data sepedamotor
	public function update(Request $request)
	{
		// update data sepedamotor
		DB::table('sepedamotor')->where('kodesepedamotor',$request->kodesepedamotor)->update([
			'merksepedamotor' => $request->merksepedamotor,
			'stocksepedamotor' => $request->stocksepedamotor,
			'tersedia' => $request->stocksepedamotor > 0 ? 'Y' : 'T',
		]);
		// alihkan halaman ke halaman sepedamotor
		return redirect('/sepedamotor');
	}
 
	// method untuk hapus data sepedamotor
	public function hapus($id)
	{
		// menghapus data sepedamotor berdasarkan id yang dipilih
		DB::table('sepedamotor')->where('kodesepedamotor',$id)->delete();
		
		// alihkan halaman ke halaman sepedamotor
		return redirect('/sepedamotor');
	}

	public function cari(Request $request)
	{
		$cari = $request->cari;
 
		$sepedamotor = DB::table('sepedamotor')
		->where('merksepedamotor','like',"%".$cari."%")
		->paginate();
 
		return view('indexSepedamotor',['sepedamotor' => $sepedamotor]);
 
	}
}