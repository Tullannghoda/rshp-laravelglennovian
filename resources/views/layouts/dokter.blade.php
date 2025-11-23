<!DOCTYPE html>
<html lang="id">
<head>
    <title>Dashboard Dokter - RSH Unair</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @yield('styles')
</head>
<body>
    <header>
        <h1>Dashboard Dokter</h1>
        <p>Selamat datang, <b>{{ session('username') }}</b></p>
    </header>
    <nav>
        <ul>
            <li><a href="{{ route('dokter.dashboard') }}">Dashboard</a></li>
            <li><a href="#">Data Kunjungan</a></li>
            <li><a href="#">Rekam Medis</a></li>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li>
                <a href="{{ route('logout') }}"
                    class="logout-link"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;">
                    @csrf
                </form>
            </li>
        </ul>
    </nav>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
