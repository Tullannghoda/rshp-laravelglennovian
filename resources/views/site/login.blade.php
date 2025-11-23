@extends('layout.main')

@section('title', 'Login')

@section('content')
<div class="form-container">
    <h2>Login Pengguna</h2>
    <form action="#" method="post">
        @csrf
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" class="form-input" required>
        </div>

        <div class="form-group">
            <label for="password">Kata Sandi:</label>
            <input type="password" id="password" name="password" class="form-input" required>
        </div>

        <button type="submit" class="form-button">Masuk</button>
    </form>
</div>
@endsection
