@extends('template')

@section('tulisan1','Beli')

@section('link1')
<a href="/keranjang"> Kembali</a>
@endsection

@section('konten')
	<form action="/keranjang/store" method="post">
		{{ csrf_field() }}
        <div class="row mb-3">
            <label for="kodeBarang" class="col-sm-2 col-form-label">Kode Barang</label>
            <div class="col-sm-10">
                <input type="text" name="kodeBarang" class="form-control" id="kodeBarang" required="required">
            </div>
        </div>
        <div class="row mb-3">
            <label for="jumlah" class="col-sm-2 col-form-label">Jumlah Pembelian</label>
            <div class="col-sm-10">
                <input type="number" name="jumlah" class="form-control" id="jumlah" required="required">
            </div>
        </div>
        <div class="row mb-3">
            <label for="harga" class="col-sm-2 col-form-label">Harga Per Item</label>
            <div class="col-sm-10">
                <input type="number" name="harga" class="form-control" id="harga" required="required">
            </div>
        </div>
        </div>
        </div>
        <div class="row mb-3">
            <div class="col-sm-12">
            <center><input type="submit" value="Simpan Data" class="btn btn-primary"></center>
        </div>
    </div>
	</form>
    @endsection


