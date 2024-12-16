@extends('template')
@section('tulisan1','Data Agen')
@section('link1')
<a href="/agen"> Kembali</a>
@endsection

@section('konten')
    <form action="/agen/store" method="post">
        {{ csrf_field() }}  <!-- CSRF token should be inside the form tag -->
        <div class="row mb-3">
            <label for="namaagen" class="col-sm-2 col-form-label">Nama Agen</label>
            <div class="col-sm-10">
                <input type="text" name="namaagen" class="form-control" id="namaagen" required="required">
            </div>
        </div>
        <div class="row mb-3">
            <label for="jumlahagen" class="col-sm-2 col-form-label">Jumlah Agen</label>
            <div class="col-sm-10">
                <input type="number" name="jumlahagen" class="form-control" id="jumlahagen" required="required">
            </div>
        </div>
        <div class="row mb-3">
            <label for="tersedia" class="col-sm-2 col-form-label">Tersedia</label>
            <div class="col-sm-10">
                <select name="tersedia" class="form-control" id="tersedia" required="required">
                    <option value="Y">Ya</option>
                    <option value="N">Tidak</option>
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-sm-12">
                <center><input type="submit" value="Simpan Data" class="btn btn-primary"></center>
            </div>
        </div>
    </form>
@endsection
