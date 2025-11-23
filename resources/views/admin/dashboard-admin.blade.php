@extends('layouts.admin')

@section('content')
<h2>Selamat Datang, Admin!</h2>
<p>Anda login sebagai <b>{{ session('username') }}</b> dengan role <b>{{ session('userrolename') }}</b></p>
@endsection
