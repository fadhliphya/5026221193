<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeranjangBelanjaController extends Controller
{
    // Menampilkan data keranjang belanja dengan pagination
    public function indexKeranjang()
    {
        $keranjangbelanja = DB::table('keranjangbelanja')->paginate(10); // Ambil data dengan pagination
        return view('indexKeranjang', ['keranjang' => $keranjangbelanja]);
    }

    // Menampilkan form tambah data
    public function tambah()
    {
        return view('tambahKeranjang');
    }

    // Menyimpan data baru ke tabel keranjangbelanja
    public function store(Request $request)
    {
        DB::table('keranjangbelanja')->insert([
            'KodeBarang' => $request->kodeBarang,
            'Jumlah' => $request->jumlah,
            'Harga' => $request->harga,
        ]);

        return redirect('/keranjang');
    }

    // Menampilkan form edit data
    public function edit($id)
    {
        $keranjangbelanja = DB::table('keranjangbelanja')->where('ID', $id)->get();
        return view('edit', ['keranjang' => $keranjangbelanja]);
    }

    // Mengupdate data di tabel keranjangbelanja
    public function update(Request $request)
    {
        DB::table('keranjangbelanja')->where('ID', $request->id)->update([
            'KodeBarang' => $request->kodeBarang,
            'Jumlah' => $request->jumlah,
            'Harga' => $request->harga,
        ]);

        return redirect('/keranjang');
    }

    // Menghapus data dari tabel keranjangbelanja
    public function hapus($id)
    {
        DB::table('keranjangbelanja')->where('ID', $id)->delete();
        return redirect('/keranjang');
    }

    // Mencari data berdasarkan kode barang
    public function cari(Request $request)
    {
        $cari = $request->cari;
        $keranjangbelanja = DB::table('keranjangbelanja')
            ->where('KodeBarang', 'like', "%" . $cari . "%")
            ->paginate(10);

        return view('indexKeranjang', ['keranjang' => $keranjangbelanja]);
    }
}
