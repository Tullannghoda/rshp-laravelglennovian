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
    <h2>Daftar Jenis Hewan</h2>
    <table class="tabel-struktur"> <!-- Gunakan class tabel-struktur dari CSS-mu -->
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Jenis Hewan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($jenisHewan as $index => $hewan)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $hewan->nama_jenis_hewan }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
