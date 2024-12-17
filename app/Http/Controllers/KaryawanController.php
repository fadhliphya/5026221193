<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaryawanController extends Controller
{
    // Menampilkan data keranjang belanja dengan pagination
    public function indexKaryawan()
    {
        $karyawan1 = DB::table('karyawan1')->paginate(10); // Ambil data dengan pagination
        return view('indexKaryawan', ['karyawan' => $karyawan1]);
    }

    // Menampilkan form tambah data
    public function tambah()
    {
        return view('tambahKaryawan');
    }

    // Menyimpan data baru ke tabel keranjangbelanja
    public function store(Request $request)
    {
        DB::table('karyawan1')->insert([
            'NIP' => $request->NIP,
            'Nama' => $request->Nama,
            'Pangkat' => $request->Pangkat,
            'Gaji' => $request->Gaji,
        ]);

        return redirect('/karyawan');
    }

    // Menampilkan form edit data
    public function edit($id)
    {
        $karyawan1 = DB::table('karyawan1')->where('NIP', $id)->get();
        return view('edit', ['karyawan' => $karyawan1]);
    }

    // Mengupdate data di tabel keranjangbelanja
    public function update(Request $request)
    {
        DB::table('karyawan1')->where('NIP', $request->id)->update([
            'NIP' => $request->NIP,
            'Nama' => $request->Nama,
            'Pangkat' => $request->Pangkat,
            'Gaji' => $request->Gaji,
        ]);

        return redirect('/Karyawan');
    }

    // Menghapus data dari tabel keranjangbelanja
    public function hapus($id)
    {
        DB::table('karyawan1')->where('NIP', $id)->delete();
        return redirect('/karyawan');
    }
}
