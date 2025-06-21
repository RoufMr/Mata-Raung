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

        <form action="{{ route('team.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
              <!-- Kolom nama -->
              <div class="col-md-6 mb-4">
                <div class="card shadow">  <!-- Perhatikan shadow-lg di sini -->
                  <div class="card-body">
                    <label for="">Masukkan Nama</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}">
                    @error('nama')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
              </div>

              <!-- Kolom email -->
              <div class="col-md-6 mb-4">
                <div class="card shadow">  <!-- Perhatikan shadow-lg di sini -->
                  <div class="card-body">
                    <label for="">Masukkan Email</label>
                    <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}">
                    @error('email')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
              </div>

              <!-- Kolom jabatan -->
              <div class="col-md-6 mb-4">
                <div class="card shadow">  <!-- Perhatikan shadow-lg di sini -->
                  <div class="card-body">
                    <label for="">Masukkan Jabatan</label>
                    <input type="text" class="form-control @error('jabatan') is-invalid @enderror" name="jabatan" value="{{ old('jabatan') }}">
                    @error('jabatan')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
              </div>

              <!-- Kolom phone -->
              <div class="col-md-6 mb-4">
                <div class="card shadow">  <!-- Perhatikan shadow-lg di sini -->
                  <div class="card-body">
                    <label for="">Masukkan Wa/Phone</label>
                    <input type="number" class="form-control @error('notelp') is-invalid @enderror" name="notelp" value="{{ old('notelp') }}">
                    @error('notelp')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
              </div>

              <!-- Kolom tempat lahir -->
              <div class="col-md-6 mb-4">
                <div class="card shadow">  <!-- Perhatikan shadow-lg di sini -->
                  <div class="card-body">
                    <label for="">Tempat Lahir</label>
                    <input type="text" class="form-control @error('tempatlahir') is-invalid @enderror" name="tempatlahir" value="{{ old('tempatlahir') }}">
                    @error('tempatlahir')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
              </div>

            <!-- tangal lahir -->
              <div class="col-md-6 mb-4">
                <div class="card shadow">  <!-- Perhatikan shadow-lg di sini -->
                  <div class="card-body">
                    <label for="">Tempat Lahir</label>
                    <input type="date" class="form-control @error('tanggallahir') is-invalid @enderror" name="tanggallahir" value="{{ old('tanggallahir') }}">
                    @error('tanggallahir')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
              </div>

            <!-- Kolom alamat -->
              <div class="col-md-6 mb-4">
                <div class="card shadow">  <!-- Perhatikan shadow-lg di sini -->
                  <div class="card-body">
                    <label for="">Masukkan Alamat</label>
                    <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat') }}">
                    @error('alamat')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
              </div>

                <!-- Kolom Gambar -->
              <div class="col-md-6 mb-4">
                <div class="card shadow">  <!-- Shadow yang sama -->
                  <div class="card-body">
                    <label for="">Masukkan Foto</label>
                    <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">
                    @error('image')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
              </div>
                <!-- <div class="form-group mb-4">
                  <label for="">Masukkan Alamat</label>
                  <div class="bg-white">
                  <textarea name="address" id="your_summernote">
                      {{ old('address') }}
                  </textarea>
              </div>

                  @error('address')
                  <div class="text-danger">
                      {{ $message }}
                  </div>
                  @enderror
              </div> -->

              <!-- Kolom deskripsi -->
                <div class="form-group mb-4">
                  <label for="">Masukkan Deskripsi</label>
                  <div class="bg-white">
                  <textarea name="deskripsi" id="your_summernote">
                      {{ old('deskripsi') }}
                  </textarea>
              </div>

                  @error('deskripsi')
                  <div class="text-danger">
                      {{ $message }}
                  </div>
                  @enderror
              </div>

            <!-- Kolom yt -->
              <div class="col-md-6 mb-4">
                <div class="card shadow">  <!-- Perhatikan shadow-lg di sini -->
                  <div class="card-body">
                    <label for="">Masukkan Yt</label>
                    <input type="text" class="form-control @error('youtube') is-invalid @enderror" name="youtube" value="{{ old('youtube') }}">
                    @error('youtube')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
              </div>

              <!-- Kolom ig -->
              <div class="col-md-6 mb-4">
                <div class="card shadow">  <!-- Perhatikan shadow-lg di sini -->
                  <div class="card-body">
                    <label for="">Masukkan ig</label>
                    <input type="text" class="form-control @error('instagram') is-invalid @enderror" name="instagram" value="{{ old('instagram') }}">
                    @error('instagram')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
              </div>

              <!-- Kolom fb -->
              <div class="col-md-6 mb-4">
                <div class="card shadow">  <!-- Perhatikan shadow-lg di sini -->
                  <div class="card-body">
                    <label for="">Masukkan fb</label>
                    <input type="text" class="form-control @error('facebook') is-invalid @enderror" name="facebook" value="{{ old('facebook') }}">
                    @error('facebook')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
              </div>

              <!-- Kolom tiktok -->
              <div class="col-md-6 mb-4">
                <div class="card shadow">  <!-- Perhatikan shadow-lg di sini -->
                  <div class="card-body">
                    <label for="">Masukkan tiktok</label>
                    <input type="text" class="form-control @error('tiktok') is-invalid @enderror" name="tiktok" value="{{ old('tiktok') }}">
                    @error('tiktok')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
              </div>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>

</section>
@endsection

