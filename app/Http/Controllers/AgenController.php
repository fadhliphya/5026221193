<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
// use App\Models\Agen; // Pastikan model Agen diimpor
use Illuminate\Support\Facades\DB;
class AgenController extends Controller
{
    public function indexAgen()
    {
        // Mengambil semua data dari tabel agen
        $agen = DB::table('agen')->paginate(10); // Ambil data dengan pagination
        // Mengirim data agen ke view
        return view('indexAgen', ['agen' => $agen]);
    }
    public function tambah()
    {
        // Menampilkan form untuk menambahkan agen
        return view('tambahagen');
    }
    public function store(Request $request)
    {
        DB::table('agen')->insert([
            'namaagen' => $request->namaagen,
            'jumlahagen' => $request->jumlahagen,
            'tersedia' => $request->tersedia,
        ]);

        return redirect('/agen');
    }
}


