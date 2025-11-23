@extends('layouts.dokter')

@section('content')
<h2>Selamat Datang, Dokter!</h2>
<p>Anda login sebagai <b>{{ session('username') }}</b> dengan role <b>{{ session('userrolename') }}</b></p>
@endsection
