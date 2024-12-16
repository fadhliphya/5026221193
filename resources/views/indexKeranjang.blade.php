@extends('template')

@section('tulisan1', 'Data Keranjang Belanja')

@section('link1')
    <a href="/keranjang/tambah" class="btn btn-primary">+ Beli Barang Baru</a>
@endsection

@section('konten')

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
