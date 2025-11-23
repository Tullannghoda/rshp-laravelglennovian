<<<<<<< HEAD
@extends('layouts.admin')
=======
@extends('layout.main')
>>>>>>> 5e085fd831cde74431a314b458a49ae861b2b87c

@section('content')
<div class="content">
    <h2>Daftar Kode Tindakan Terapi</h2>
    <table class="tabel-struktur">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Deskripsi</th>
                <th>Kategori</th>
                <th>Kategori Klinis</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kodeTindakan as $index => $item)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $item->kode }}</td>
                <td>{{ $item->deskripsi_tindakan_terapi }}</td>
                <td>{{ $item->kategori->nama_kategori ?? '-' }}</td>
                <td>{{ $item->kategoriKlinis->nama_kategori_klinis ?? '-' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
