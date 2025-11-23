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
    <h2>Daftar User dengan Role</h2>
    <table class="tabel-struktur">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama User</th>
                <th>Email</th>
                <th>Role</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($userRole as $index => $item)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $item->user->nama ?? '-' }}</td>
                <td>{{ $item->user->email ?? '-' }}</td>
                <td>{{ $item->role->nama_role ?? '-' }}</td>
                <td>{{ ($item->status == 1) ? 'Aktif' : 'Nonaktif' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
