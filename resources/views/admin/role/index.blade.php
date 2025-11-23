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
    <h2>Daftar Role</h2>
    <table class="tabel-struktur">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Role</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($role as $index => $item)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $item->nama_role }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
