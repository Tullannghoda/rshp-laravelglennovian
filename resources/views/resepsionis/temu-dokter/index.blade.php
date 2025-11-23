@extends('layouts.resepsionis')

@section('content')
<div class="content">

    <h2>Data Temu Dokter</h2>
    <table class="tabel-struktur">
        <thead>
            <tr>
                <th>No. Urut</th>
                <th>Nama Pet</th>
                <th>Nama Dokter</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($temuDokters as $td)
            <tr>
                <td>{{ $td->no_urut }}</td>
                <td>{{ $td->pet->nama ?? '-' }}</td>
                <td>{{ $td->roleUser->user->nama ?? '-' }}</td>
                <td>@if($td->status == 0) Menunggu @else Selesai @endif</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
