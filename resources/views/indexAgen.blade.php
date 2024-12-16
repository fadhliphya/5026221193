@extends('template')
@section('tulisan1', 'Data Agen')
@section('link1')
    <a href="/agen/tambah" class="btn btn-primary"> + Tambah Agen Baru</a>
@endsection
@section('konten')
    <br/>
    <form action="/agen/cari" method="GET">
        <div class="row mb-3">
            <label for="cari" class="col-sm-2 col-form-label">Cari Nama Agen :</label>
            <div class="col-sm-6">
                <input type="text" name="cari" class="form-control" id="cari" placeholder="Cari Agen .." value="{{ old('cari') }}">
            </div>
            <div class="col-sm-4">
                <input type="submit" value="CARI" class="btn btn-success">
            </div>
        </div>
    </form>
    <br/>
    <table class="table table-striped table-hover">
        <tr>
            <th>Kode Agen</th>
            <th>Nama Agen</th>
            <th>Jumlah Agen</th>
            <th>Tersedia</th>
            <th>Opsi</th>
        </tr>
        @foreach($agen as $item)  <!-- Changed $agens to $agen -->
        <tr>
            <td>{{ $item->kodeagen }}</td>
            <td>{{ $item->namaagen }}</td>
            <td>{{ $item->jumlahagen }}</td>
            <td>{{ $item->tersedia == 'Y' ? 'Ya' : 'Tidak' }}</td>
            <td>
                <a href="/agen/edit/{{ $item->kodeagen }}" class="btn btn-danger"><i class="fa-solid fa-pen-to-square"></i>Edit</a>
                |
                <a href="/agen/hapus/{{ $item->kodeagen }}" class="btn btn-info"><i class="fa-solid fa-trash"></i>Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>
    <br/>
    Halaman : {{ $agen->currentPage() }} <br/>
    Jumlah Data : {{ $agen->total() }} <br/>
    Data Per Halaman : {{ $agen->perPage() }} <br/>
    {{ $agen->links() }}
@endsection
