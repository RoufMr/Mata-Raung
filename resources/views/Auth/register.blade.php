@extends('layouts.app')

@section('title', 'Registrasi')

@section('content')
<div class="login-box">
    <div class="login-header">
        <h2>Buat Akun Baru</h2>
        <p>Isi form berikut untuk mendaftar</p>
    </div>
    
    <form method="POST" action="{{ route('register') }}">
        @csrf
        
        <div class="form-group">
            <label for="name">Nama Lengkap</label>
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        
        <div class="form-group">
            <label for="email">Email</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        
        <div class="form-group">
            <label for="password">Password</label>
            <div class="password-input">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                <i class="fas fa-eye-slash password-toggle"></i>
            </div>
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        
        <div class="form-group">
            <label for="password-confirm">Konfirmasi Password</label>
            <div class="password-input">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                <i class="fas fa-eye-slash password-toggle"></i>
            </div>
        </div>
        
        <button type="submit" class="btn-login">
            Daftar
        </button>
        
        <div class="login-footer">
            Sudah punya akun? <a href="{{ route('login') }}">Masuk disini</a>
        </div>
    </form>
</div>
@endsection