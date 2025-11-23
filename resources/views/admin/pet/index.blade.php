<<<<<<< HEAD
@extends('layouts.admin')

@section('content')
<div class="content">
    <a href="{{ route('admin.data-master') }}" class="btn btn-secondary" style="margin-bottom:1rem;">&larr; Kembali ke Data Master</a>
=======
@extends('layout.main')

@section('content')
<div class="content">
>>>>>>> 5e085fd831cde74431a314b458a49ae861b2b87c
    <h2>Daftar Pet</h2>
    <table class="tabel-struktur">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Pet</th>
                <th>Tanggal Lahir</th>
                <th>Warna/Tanda</th>
                <th>Jenis Kelamin</th>
                <th>Nama Pemilik</th>
                <th>Ras Hewan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pet as $index => $item)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->tanggal_lahir }}</td>
                <td>{{ $item->warna_tanda }}</td>
                <td>{{ $item->jenis_kelamin }}</td>
                <td>{{ $item->pemilik->user->nama ?? '-' }}</td>
                <td>{{ $item->rasHewan->nama_ras ?? '-' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
