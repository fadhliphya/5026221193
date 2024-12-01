<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agen; // Pastikan model Agen diimpor

class AgenController extends Controller
{
    public function indexAgen()
    {
        // Mengambil semua data dari tabel agen
        $agens = Agen::paginate(10); // Tambahkan pagination jika diperlukan

        // Mengirim data agen ke view
        return view('indexAgen', compact('agens')); // Pastikan view sesuai
    }

    public function tambahAgen()
    {
        // Menampilkan form untuk menambahkan agen
        return view('tambahagen');
    }

    public function storeAgen(Request $request)
    {
        // Validasi input
        $request->validate([
            'kodeagen' => 'required|string|max:10',
            'namaagen' => 'required|string|max:30',
            'jumlahagen' => 'required|integer',
            'tersedia' => 'required|in:Y,N',
        ]);

        // Menyimpan data agen baru
        $agen = new Agen;
        $agen->kodeagen = $request->input('kodeagen');
        $agen->namaagen = $request->input('namaagen');
        $agen->jumlahagen = $request->input('jumlahagen');
        $agen->tersedia = $request->input('tersedia');
        $agen->save();

        // Redirect ke halaman index agen dengan pesan sukses
        return redirect('/agen')->with('success', 'Agen berhasil ditambahkan!');
    }
}
