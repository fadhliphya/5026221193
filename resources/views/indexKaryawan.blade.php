@extends('template')

@section('tulisan1', 'Data Karyawan')

@section('link1')
    <a href="/karyawan/tambah" class="btn btn-primary">+ Tambah Karyawan Baru</a>
@endsection

@section('konten')

    <br/>

    <table class="table table-striped table-hover">
        <tr>
            <th>NIP</th>
            <th>Nama</th>
            <th>Pangkat</th>
            <th>Gaji</th>
            <th>Opsi</th>
        </tr>
        @foreach($karyawan as $item)
        <tr>
            <td>{{ $item->NIP }}</td>
            <td>{{ $item->Nama }}</td>
            <td>{{ $item->Pangkat }}</td>
            <td>{{ number_format($item->Gaji, 0, ',', '.') }}</td>
            <td>
                <a href="/karyawan/hapus/{{ $item->NIP }}" class="btn btn-danger">
                    <i class="fa-solid fa-pen-to-square"></i> Hapus
                </a>
            </td>
        </tr>
        @endforeach
    </table>

    <br/>
    {{ $karyawan->links() }}

@endsection
