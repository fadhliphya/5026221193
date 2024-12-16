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
        @foreach($agens as $agen)
        <tr>
            <td>{{ $agen->kodeagen }}</td>
            <td>{{ $agen->namaagen }}</td>
            <td>{{ $agen->jumlahagen }}</td>
            <td>{{ $agen->tersedia == 'Y' ? 'Ya' : 'Tidak' }}</td>

            <td>
                <a href="/agen/edit/{{ $agen->kodeagen }}" class="btn btn-danger"><i class="fa-solid fa-pen-to-square"></i></a>
                |
                <a href="/agen/hapus/{{ $agen->kodeagen }}" class="btn btn-info"><i class="fa-solid fa-trash"></i></a>
            </td>
        </tr>
        @endforeach
    </table>

    <br/>
    Halaman : {{ $agens->currentPage() }} <br/>
    Jumlah Data : {{ $agens->total() }} <br/>
    Data Per Halaman : {{ $agens->perPage() }} <br/>

    {{ $agens->links() }}
@endsection
