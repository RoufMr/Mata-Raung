@extends('dashboard.master.master-admin')
{{-- @section('title', 'Dashboard') --}}
@section('content')
<section>
    <div class="card p-4">
        <div>
            <a href="{{ route('team') }}"><i class="fas fa-arrow-left fa-2x"></i></a>
            {{-- <div class="mx-2">.</div> --}}
            {{-- <a href="">Buat Artikel</a> --}}
        </div>

        <h3 class="text-center">Halaman Buat Team</h3>

        <form action="{{ route('team.update',$team->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
            <!-- nama -->
            <div class="col-md-6 mb-4">
            <div class="card shadow">  <!-- Perhatikan shadow-lg di sini -->
            <div class="card-body">
                <label for="">Masukkan Nama</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama"
                value="{{ old('nama',$team->nama) }}">

                @error('nama')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            </div>
            </div>
            

            <!-- email -->
            <div class="col-md-6 mb-4">
            <div class="card shadow">  <!-- Perhatikan shadow-lg di sini -->
            <div class="card-body">
                <label for="">Masukkan Email</label>
                <input type="text" class="form-control @error('email') is-invalid @enderror" name="email"
                value="{{ old('email',$team->email) }}">

                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            </div>
            </div>

            <!-- jabatan -->
            <div class="col-md-6 mb-4">
            <div class="card shadow">  <!-- Perhatikan shadow-lg di sini -->
            <div class="card-body">
                <label for="">Masukkan Jabatan</label>
                <input type="text" class="form-control @error('jabatan') is-invalid @enderror" name="jabatan"
                value="{{ old('jabatan',$team->jabatan) }}">

                @error('jabatan')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            </div>
            </div>

            <!-- phone -->
            <div class="col-md-6 mb-4">
            <div class="card shadow">  <!-- Perhatikan shadow-lg di sini -->
            <div class="card-body">
                <label for="">Masukkan Wa/phone</label>
                <input type="number" class="form-control @error('notelp') is-invalid @enderror" name="notelp"
                value="{{ old('notelp',$team->notelp) }}">

                @error('notelp')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            </div>
            </div>

            <!-- tempat lahir -->
            <div class="col-md-6 mb-4">
            <div class="card shadow">  <!-- Perhatikan shadow-lg di sini -->
            <div class="card-body">
                <label for="">Tempat Lahir</label>
                <input type="text" class="form-control @error('tempatlahir') is-invalid @enderror" name="tempatlahir"
                value="{{ old('tempatlahir',$team->tempatlahir) }}">

                @error('tempatlahir')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            </div>
            </div>

            <!-- tanggal lahir -->
            <div class="col-md-6 mb-4">
            <div class="card shadow">  <!-- Perhatikan shadow-lg di sini -->
            <div class="card-body">
                <label for="">Tanggal Lahir</label>
                <input type="date" class="form-control @error('tanggallahir') is-invalid @enderror" name="tanggallahir"
                value="{{ old('tanggallahir',$team->tanggallahir) }}">

                @error('tanggallahir')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            </div>
            </div>

            <!-- alamat -->
            <div class="col-md-6 mb-4">
            <div class="card shadow">  <!-- Perhatikan shadow-lg di sini -->
            <div class="card-body">
                <label for="">Masukkan Alamat Lengkap</label>
                <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat"
                value="{{ old('alamat',$team->alamat) }}">

                @error('alamat')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            </div>
            </div>

            <!-- yt -->
            <div class="col-md-6 mb-4">
            <div class="card shadow">  <!-- Perhatikan shadow-lg di sini -->
            <div class="card-body">
                <label for="">link yt</label>
                <input type="text" class="form-control @error('youtube') is-invalid @enderror" name="youtube"
                value="{{ old('youtube',$team->youtube) }}">

                @error('youtube')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            </div>
            </div>
            <!-- ig -->
            <div class="col-md-6 mb-4">
            <div class="card shadow">  <!-- Perhatikan shadow-lg di sini -->
            <div class="card-body">
                <label for="">Link Ig</label>
                <input type="text" class="form-control @error('instagram') is-invalid @enderror" name="instagram"
                value="{{ old('instagram',$team->instagram) }}">

                @error('instagram')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            </div>
            </div>
            <!-- fb -->
            <div class="col-md-6 mb-4">
            <div class="card shadow">  <!-- Perhatikan shadow-lg di sini -->
            <div class="card-body">
                <label for="">Facebook</label>
                <input type="text" class="form-control @error('facebook') is-invalid @enderror" name="facebook"
                value="{{ old('facebook',$team->facebook) }}">

                @error('facebook')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            </div>
            </div>
            <!-- tt -->
            <div class="col-md-6 mb-4">
            <div class="card shadow">  <!-- Perhatikan shadow-lg di sini -->
            <div class="card-body">
                <label for="">Tiktok</label>
                <input type="text" class="form-control @error('tiktok') is-invalid @enderror" name="tiktok"
                value="{{ old('tiktok',$team->tiktok) }}">

                @error('tiktok')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            </div>
            </div>

            <!-- gambar -->
            <div class="mb-4 ">
            <div class="card shadow">  <!-- Perhatikan shadow-lg di sini -->
            <div class="card-body">
                <label for="">Masukkan Foto</label>
                <input type="hidden" name="old_image" value="{{ $team->image }}">
                <div>
                    <img src="{{ asset('storage/team/' . $team->image) }}" alt="" class="col-lg-2">
                </div>
                <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">

                @error('image')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            </div>
            </div>

            <!-- deskripsi -->
            <div class="mb-4">
            <div class="card shadow">  <!-- Perhatikan shadow-lg di sini -->
            <div class="card-body">
                <label for="">Masukkan Deskripsi</label>
                <textarea name="deskripsi" id="your_summernote">
                    {!! $team->deskripsi !!}
                </textarea>

                @error('deskripsi')
                <div class="text-danger">
                    {{ $message }}
                </div>
                @enderror
            </div>
            </div>
            </div>
            

            <div class="form-group">
            <button type="submit" class="btn btn-primary">Simpan</button>
            </div>  
        </form>
    </div>

{{-- summernote --}}
{{-- <script>
$('#summernote').summernote({
    tabsize: 2,
    height: 100
    });
    </script> --}}

</section>
@endsection
{{-- @section('menu')
    @include('dashboard')
@endsection --}}
