@extends('dashboard.master.master-admin')
@section('title')
    About
@endsection

@section('header')
@endsection

@section('navbar')
    @parent
@endsection

@section('menunya')
    Data About
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



<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Data About</h4>
                <div>
                    <a href="{{ route('about.edit') }}" class="btn btn-primary btn-sm ml-auto">
                        <i class="fas fa-edit"></i> Edit About
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="card shadow">
                            <div class="card-body">
                                <label>Judul 1</label>
                                <h4>{{ $about->judul1 }}</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="card shadow">
                            <div class="card-body">
                                <label>Judul 2</label>
                                <h4>{{ $about->judul2 }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Bagian 1 -->
                    <div class="col-md-6 mb-4">
                        <div class="card shadow">
                            <div class="card-header">
                                <h4>deskripsi 1</h4>
                            </div>
                            <div class="card-body">
                                @if($about->image1)
                                <img src="{{ asset('storage/about/' . $about->image1) }}" 
                                     class="img-fluid rounded mb-4" 
                                     style="max-height: 300px; width: 100%; object-fit: cover;">
                                @endif
                                <div class="content">
                                    {!! $about->deskripsi1 !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Bagian 2 -->
                    <div class="col-md-6 mb-4">
                        <div class="card shadow">
                            <div class="card-header">
                                <h4>deskripsi 2</h4>
                            </div>
                            <div class="card-body">
                                @if($about->image2)
                                <img src="{{ asset('storage/about/' . $about->image2) }}" 
                                     class="img-fluid rounded mb-4" 
                                     style="max-height: 300px; width: 100%; object-fit: cover;">
                                @endif
                                <div class="content">
                                    {!! $about->deskripsi2 !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Visi dan Misi -->
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="card shadow">
                            <div class="card-body">
                                <label>Visi</label>
                                <h4>{{ $about->visi }}</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="card shadow">
                            <div class="card-body">
                                <label>Misi</label>
                                <h4>{{ $about->misi }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection