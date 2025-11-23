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
    <h2>Daftar Pemilik</h2>
    <table class="tabel-struktur">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Pemilik</th>
                <th>No WhatsApp</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pemilik as $index => $owner)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $owner->user->nama ?? '-' }}</td>
                <td>{{ $owner->no_wa }}</td>
                <td>{{ $owner->alamat }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
