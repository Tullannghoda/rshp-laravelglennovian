@extends('layouts.admin')

@section('content')
<div class="master-nav-box">
    <h2>Data Master</h2>
    <ul class="master-menu-list">
        <li><a href="{{ route('admin.user-role.index') }}">User</a></li>
        <li><a href="{{ route('admin.role.index') }}">Role</a></li>
        <li><a href="{{ route('admin.jenis-hewan.index') }}">Jenis Hewan</a></li>
        <li><a href="{{ route('admin.ras-hewan.index') }}">Ras Hewan</a></li>
        <li><a href="{{ route('admin.pemilik.index') }}">Data Pemilik</a></li>
        <li><a href="{{ route('admin.pet.index') }}">Master Pet</a></li>
        <li><a href="{{ route('admin.kategori.index') }}">Data Kategori</a></li>
        <li><a href="{{ route('admin.kategori-klinis.index') }}">Kategori Klinis</a></li>
        <li><a href="{{ route('admin.kode-tindakan-terapi.index') }}">Kode Tindakan Terapi</a></li>
    </ul>
</div>
@endsection
