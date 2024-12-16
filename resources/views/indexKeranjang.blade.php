@extends('template')

@section('tulisan1', 'Data Keranjang Belanja')

@section('link1')
    <a href="/keranjang/tambah" class="btn btn-primary">+ Tambah Barang Baru</a>
@endsection

@section('konten')

    <br/>
    <form action="/keranjang/cari" method="GET">
        <div class="row mb-3">
            <label for="cari" class="col-sm-2 col-form-label">Cari Kode Barang:</label>
            <div class="col-sm-6">
                <input type="text" name="cari" class="form-control" id="cari" placeholder="Cari Barang .." value="{{ old('cari') }}">
            </div>
            <div class="col-sm-4">
                <input type="submit" value="CARI" class="btn btn-success">
            </div>
        </div>
    </form>
    <br/>

    <table class="table table-striped table-hover">
        <tr>
            <th>ID</th>
            <th>Kode Barang</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Total</th>
            <th>Opsi</th>
        </tr>
        @foreach($keranjang as $item)
        <tr>
            <td>{{ $item->ID }}</td>
            <td>{{ $item->KodeBarang }}</td>
            <td>{{ $item->Jumlah }}</td>
            <td>{{ number_format($item->Harga, 0, ',', '.') }}</td>
            <td>{{ number_format($item->Jumlah * $item->Harga, 0, ',', '.') }}</td>
            <td>
                <a href="/keranjang/edit/{{ $item->ID }}" class="btn btn-danger">
                    <i class="fa-solid fa-pen-to-square"></i> Beli
                </a>
                |
                <a href="/keranjang/hapus/{{ $item->ID }}" class="btn btn-info">
                    <i class="fa-solid fa-trash"></i> Batal
                </a>
            </td>
        </tr>
        @endforeach
    </table>

    <br/>
    Halaman : {{ $keranjang->currentPage() }} <br/>
    Jumlah Data : {{ $keranjang->total() }} <br/>
    Data Per Halaman : {{ $keranjang->perPage() }} <br/>

    {{ $keranjang->links() }}

@endsection
