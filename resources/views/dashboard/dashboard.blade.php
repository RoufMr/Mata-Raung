@extends('dashboard.master.master-admin')

@section('title')
    Mata Raung
@endsection

@section('header')
@endsection

@section('navbar')
    @parent
@endsection


@section('menunya')
    Beranda
@endsection

@section('menu')
    <ul class="metismenu" id="menu">
        <li class="mm-active"><a href="dashboard">
                <i class="fas fa-home"></i>
                <span class="nav-text">Beranda</span>
            </a>
        </li>

        {{-- NAVBAR ADMIN --}}
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="fa fa-book"></i>
                    <span class="nav-text">Data Master </span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('blog') }}">Berita</a></li>
                    <li><a href="{{ route('team') }}">Team</a></li>
                    <li><a href="{{ route('photo') }}">Photo</a></li>
                    <li><a href="{{ route('about.index') }}">About</a></li>
                </ul>
            </li>
         
    
    </ul>

    
@endsection

@section('content')
    <!--Buat Admin-->

            @include('dashboard.beranda.dashboard-admin')

@endsection

@section('footer')
@endsection
