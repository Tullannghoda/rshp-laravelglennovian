<!DOCTYPE html>
<html lang="id">
<head>
    ...
</head>
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<body>
    <header>
        <h1>Rumah Sakit Hewan Pendidikan Unair</h1>
        <p><i>“Melayani dengan profesional, peduli pada satwa dan lingkungan.”</i></p>       
    </header>
    <nav>
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('struktur') }}">Struktur</a></li>
            <li><a href="{{ route('layanan') }}">Layanan Umum</a></li>
            <li><a href="{{ route('visi') }}">Visi Misi</a></li>
            <li><a href="{{ route('login') }}">Login</a></li>
        </ul>
    </nav>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
