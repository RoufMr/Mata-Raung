@extends('dashboard.master.master-admin')
@section('title')
    Edit About
@endsection

@section('header')
@endsection

@section('navbar')
    @parent
@endsection

@section('menunya')
    Edit About
@endsection

@section('menu')
     <!-- Sesuaikan dengan menu Anda -->
@endsection

@section('content')
<section>
    <div class="card p-4">
        <div>
            <a href="{{ route('about.index') }}"><i class="fas fa-arrow-left fa-2x"></i></a>
        </div>

        <h3 class="text-center">Edit About</h3>

        <form action="{{ route('about.update') }}" method="POST" enctype="multipart/form-data">
            @method('put')
            @csrf

            <!-- Judul 1 dan Image 1 -->
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="card shadow">
                        <div class="card-body">
                            <label>Judul 1</label>
                            <input type="text" class="form-control @error('judul1') is-invalid @enderror" name="judul1"
                                value="{{ old('judul1', $about->judul1) }}">
                            @error('judul1')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-4">
                    <div class="card shadow">
                        <div class="card-body">
                            <label>Judul 2</label>
                            <input type="text" class="form-control @error('judul2') is-invalid @enderror" name="judul2"
                                value="{{ old('judul2', $about->judul2) }}">
                            @error('judul2')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <!-- Deskripsi 1 dengan WYSIWYG -->
            <div class="mb-4">
                <div class="card shadow">
                    <div class="card-body">
                        <label>Deskripsi 1</label>
                        <textarea id="your_summernote" name="deskripsi1">
                            {!! $about->deskripsi1 !!}
                        </textarea>
                        @error('deskripsi1')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <!-- Judul 2 dan Image 2 -->
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="card shadow">
                        <div class="card-body">
                            <label>Gambar 1</label>
                            <input type="hidden" name="old_image1" value="{{ $about->image1 }}">
                            @if($about->image1)
                            <div class="mb-3">
                                <img src="{{ asset('storage/about/' . $about->image1) }}" alt="" class="img-fluid" style="max-height: 200px;">
                            </div>
                            @endif
                            <input type="file" class="form-control @error('image1') is-invalid @enderror" name="image1">
                            @error('image1')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-4">
                    <div class="card shadow">
                        <div class="card-body">
                            <label>Gambar 2</label>
                            <input type="hidden" name="old_image2" value="{{ $about->image2 }}">
                            @if($about->image2)
                            <div class="mb-3">
                                <img src="{{ asset('storage/about/' . $about->image2) }}" alt="" class="img-fluid" style="max-height: 200px;">
                            </div>
                            @endif
                            <input type="file" class="form-control @error('image2') is-invalid @enderror" name="image2">
                            @error('image2')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <!-- Deskripsi 2 dengan WYSIWYG -->
            <div class="mb-4">
                <div class="card shadow">
                    <div class="card-body">
                        <label>Deskripsi 2</label>
                        <textarea id="your_summernote2" name="deskripsi2">
                            {!! $about->deskripsi2 !!}
                        </textarea>
                        @error('deskripsi2')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <!-- Visi dan Misi -->
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="card shadow">
                        <div class="card-body">
                            <label>Visi</label>
                            <input type="text" class="form-control @error('visi') is-invalid @enderror" name="visi"
                                value="{{ old('visi', $about->visi) }}">
                            @error('visi')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-4">
                    <div class="card shadow">
                        <div class="card-body">
                            <label>Visi</label>
                            <input type="text" class="form-control @error('misi') is-invalid @enderror" name="misi"
                                value="{{ old('misi', $about->misi) }}">
                            @error('misi')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- Telepon/WhatsApp -->
                <div class="col-md-6 mb-4">
                    <div class="card shadow">
                        <div class="card-body">
                            <label>Nomor WhatsApp</label>
                            <input type="text" class="form-control @error('telepon') is-invalid @enderror" name="telepon"
                                value="{{ old('telepon', $about->telepon) }}">
                            @error('telepon')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- Alamat -->
                <div class="col-md-6 mb-4">
                    <div class="card shadow">
                        <div class="card-body">
                            <label>Alamat</label>
                            <textarea class="form-control @error('alamat') is-invalid @enderror" name="alamat" rows="3">{{ old('alamat', $about->alamat) }}</textarea>
                            @error('alamat')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- Email -->
                <div class="col-md-6 mb-4">
                    <div class="card shadow">
                        <div class="card-body">
                            <label>Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                                value="{{ old('email', $about->email) }}">
                            @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- Instagram -->
                <div class="col-md-6 mb-4">
                    <div class="card shadow">
                        <div class="card-body">
                            <label>Instagram</label>
                            <input type="url" class="form-control @error('instagram') is-invalid @enderror" name="instagram"
                                value="{{ old('instagram', $about->instagram) }}" placeholder="https://instagram.com/username">
                            @error('instagram')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- YouTube -->
                <div class="col-md-6 mb-4">
                    <div class="card shadow">
                        <div class="card-body">
                            <label>YouTube</label>
                            <input type="url" class="form-control @error('youtube') is-invalid @enderror" name="youtube"
                                value="{{ old('youtube', $about->youtube) }}" placeholder="https://youtube.com/username">
                            @error('youtube')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- TikTok -->
                <div class="col-md-6 mb-4">
                    <div class="card shadow">
                        <div class="card-body">
                            <label>TikTok</label>
                            <input type="url" class="form-control @error('tiktok') is-invalid @enderror" name="tiktok"
                                value="{{ old('tiktok', $about->tiktok) }}" placeholder="https://tiktok.com/@username">
                            @error('tiktok')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- Facebook -->
                <div class="col-md-6 mb-4">
                    <div class="card shadow">
                        <div class="card-body">
                            <label>Facebook</label>
                            <input type="url" class="form-control @error('facebook') is-invalid @enderror" name="facebook"
                                value="{{ old('facebook', $about->facebook) }}" placeholder="https://facebook.com/username">
                            @error('facebook')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- Waktu Layanan -->
                <div class="col-md-6 mb-4">
                    <div class="card shadow">
                        <div class="card-body">
                            <label>Waktu Layanan</label>
                            <input type="text" class="form-control @error('waktu_layanan') is-invalid @enderror" name="waktu_layanan"
                                value="{{ old('waktu_layanan', $about->waktu_layanan) }}" placeholder="Contoh: Senin-Jumat, 08:00-17:00">
                            @error('waktu_layanan')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group text-center">
                <button type="submit" class="btn btn-primary btn-lg">
                    <i class="fas fa-save"></i> Simpan Perubahan
                </button>
            </div>
        </form>
    </div>
</section>
@endsection

@section('footer')
@endsection