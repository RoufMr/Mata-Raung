@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="login-box">
    <div class="login-header">
        <h2>Selamat Datang</h2>
        <p>Silakan masuk untuk melanjutkan</p>
    </div>
    
    <form method="POST" action="{{ route('login') }}">
        @csrf
        
        <div class="form-group">
            <label for="email">Email</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        
        <div class="form-group">
            <label for="password">Password</label>
            <div class="password-input">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                <i class="fas fa-eye-slash password-toggle"></i>
            </div>
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        
        <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="form-check-label" for="remember">
                    Ingat Saya
                </label>
            </div>
        </div>
        
        <button type="submit" class="btn-login">
            Masuk
        </button>
        
        <div class="login-footer">
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}">Lupa Password?</a>
            @endif
            <span> | </span>
            <a href="{{ route('register') }}">Buat Akun Baru</a>
        </div>
    </form>
</div>
@endsection