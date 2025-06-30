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
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="card-title mb-0">Data About</h4>
                <a href="{{ route('about.edit') }}" class="btn btn-primary btn-sm">
                    <i class="fas fa-edit"></i> Edit About
                </a>
            </div>
            <div class="card-body p-3">

                <!-- Judul Section -->
                <div class="row">
                    <div class="col-sm-6 col-12">
                        <div class="card shadow-sm">
                            <div class="card-body p-3">
                                <label class="text-muted small mb-1">
                                    <i class="fas fa-map-marker-alt fa-sm"></i> Judul 1
                                </label>
                                <p class="mb-0" style="line-height: 1.4;">{{ $about->judul1 }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="card shadow-sm">
                            <div class="card-body p-3">
                                <label class="text-muted small mb-1">
                                    <i class="fas fa-map-marker-alt fa-sm"></i> Judul 2
                                </label>
                                <p class="mb-0" style="line-height: 1.4;">{{ $about->judul2 }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Deskripsi Section -->
                <div class="row">
                    <div class="col-sm-6 col-12">
                        <div class="card shadow-sm">
                            <div class="card-body p-3">
                                <label class="text-muted small mb-1">
                                    <i class="fas fa-map-marker-alt fa-sm"></i> Deskripsi 1
                                </label>
                                <div class="content-scroll" style="max-height: 200px; overflow-y: auto; font-size: 0.9rem;">
                                    {!! $about->deskripsi1 !!}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-12">
                        <div class="card shadow-sm">
                            <div class="card-body p-3">
                                <label class="text-muted small mb-1">
                                    <i class="fas fa-map-marker-alt fa-sm"></i> Deskripsi 2
                                </label>
                                <div class="content-scroll" style="max-height: 200px; overflow-y: auto; font-size: 0.9rem;">
                                    {!! $about->deskripsi2 !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Alamat Section -->
                <div class="row">
                    <div class="col-sm-6 col-12">
                        <div class="card shadow-sm">
                            <div class="card-body p-3">
                                <label class="text-muted small mb-1">
                                    <i class="fas fa-map-marker-alt fa-sm"></i> Visi
                                </label>
                                <p class="mb-0" style="line-height: 1.4;">{{ $about->visi }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-12">
                        <div class="card shadow-sm">
                            <div class="card-body p-3">
                                <label class="text-muted small mb-1">
                                    <i class="fas fa-map-marker-alt fa-sm"></i> Misi
                                </label>
                                <p class="mb-0" style="line-height: 1.4;">{{ $about->misi }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3 col-12">
                        <div class="card shadow-sm">
                            <div class="card-body p-3">
                                <label class="text-muted small mb-1">
                                    <i class="fas fa-map-marker-alt fa-sm"></i> Instagram
                                </label>
                                <p class="mb-0" style="line-height: 1.4;">{{ Str::limit($about->instagram, 40) }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3 col-12">
                        <div class="card shadow-sm">
                            <div class="card-body p-3">
                                <label class="text-muted small mb-1">
                                    <i class="fas fa-map-marker-alt fa-sm"></i> TikTok
                                </label>
                                <p class="mb-0" style="line-height: 1.4;">{{ Str::limit($about->tiktok, 40) }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3 col-12">
                        <div class="card shadow-sm">
                            <div class="card-body p-3">
                                <label class="text-muted small mb-1">
                                    <i class="fas fa-map-marker-alt fa-sm"></i> Youtube
                                </label>
                                <p class="mb-0" style="line-height: 1.4;">{{ Str::limit($about->youtube, 40) }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3 col-12">
                        <div class="card shadow-sm">
                            <div class="card-body p-3">
                                <label class="text-muted small mb-1">
                                    <i class="fas fa-map-marker-alt fa-sm"></i> Facebook
                                </label>
                                <p class="mb-0" style="line-height: 1.4;">{{ Str::limit($about->facebook, 40) }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-12">
                        <div class="card shadow-sm">
                            <div class="card-body p-3">
                                <label class="text-muted small mb-1">
                                    <i class="fas fa-map-marker-alt fa-sm"></i> Alamat
                                </label>
                                <p class="mb-0" style="line-height: 1.4;">{{ $about->alamat }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-2 col-12">
                        <div class="card shadow-sm">
                            <div class="card-body p-3">
                                <label class="text-muted small mb-1">
                                    <i class="fas fa-map-marker-alt fa-sm"></i> Phone/Whatsapp
                                </label>
                                <p class="mb-0" style="line-height: 1.4;">{{ $about->telepon }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-2 col-12">
                        <div class="card shadow-sm">
                            <div class="card-body p-3">
                                <label class="text-muted small mb-1">
                                    <i class="fas fa-map-marker-alt fa-sm"></i> Email
                                </label>
                                <p class="mb-0" style="line-height: 1.4;">{{ $about->email }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-2 col-12">
                        <div class="card shadow-sm">
                            <div class="card-body p-3">
                                <label class="text-muted small mb-1">
                                    <i class="fas fa-map-marker-alt fa-sm"></i> Waktu Pelayanan
                                </label>
                                <p class="mb-0" style="line-height: 1.4;">{{ $about->waktu_layanan }}</p>
                            </div>
                        </div>
                    </div>
                </div>



                <!-- Gambar dan Visi Misi Section -->
                <div class="d-flex justify-content-center align-items-center">
                    <div class="col-md-2 col-sm-6 mb-2">
                        <div class="card shadow-sm h-100">
                            <div class="card-body p-3 text-center">
                                <label class="text-muted small mb-2 d-block">Gambar 1</label>
                                <img src="{{ asset('storage/about/' . $about->image1) }}"
                                     class="img-fluid rounded" style="height: 80px; object-fit: cover;" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6 mb-2">
                        <div class="card shadow-sm h-100">
                            <div class="card-body p-3 text-center">
                                <label class="text-muted small mb-2 d-block">Gambar 2</label>
                                <img src="{{ asset('storage/about/' . $about->image2) }}"
                                     class="img-fluid rounded" style="height: 80px; object-fit: cover;" alt="">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

{{-- <style>
/* Custom scrollbar untuk deskripsi */
.content-scroll::-webkit-scrollbar {
    width: 4px;
}

.content-scroll::-webkit-scrollbar-track {
    background: #f1f1f1;
    border-radius: 2px;
}

.content-scroll::-webkit-scrollbar-thumb {
    background: #c1c1c1;
    border-radius: 2px;
}

.content-scroll::-webkit-scrollbar-thumb:hover {
    background: #a8a8a8;
}

/* Optimasi spacing */
.card-body {
    padding: 0.75rem !important;
}

.card-header {
    padding: 0.5rem 0.75rem !important;
}

/* Responsive font sizes */
@media (max-width: 768px) {
    .card-body h5 {
        font-size: 1rem;
    }

    .card-body h6 {
        font-size: 0.9rem;
    }

    .small {
        font-size: 0.8rem !important;
    }
}

/* Hover effects */
.card:hover {
    box-shadow: 0 4px 8px rgba(0,0,0,0.12) !important;
    transition: box-shadow 0.3s ease;
}
</style> --}}
@endsection