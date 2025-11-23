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
    <h2>Daftar Ras Hewan</h2>
    <table class="tabel-struktur">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Ras</th>
                <th>Jenis Hewan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($rasHewan as $index => $ras)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $ras->nama_ras }}</td>
                <td>{{ $ras->jenisHewan->nama_jenis_hewan ?? '-' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
