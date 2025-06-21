@extends('dashboard.master.master-admin')
{{-- @section('title', 'Dashboard') --}}
@section('title')
    Mata Raung
@endsection

@section('header')
@endsection

@section('navbar')
    @parent
@endsection


@section('menunya')
    Data Team
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
                    <li><a href="">Jadwal Kegiatan</a></li>
                </ul>
            </li>
    
    </ul>

    
@endsection


@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Data Team</h4>

                <!-- center modal -->
                <div>
                    {{-- <button class="btn btn-info waves-effect waves-light mb-4" onclick="printDiv('cetak')"><i class="fa fa-print"> </i></button> --}}
                    <a href="{{ route("team.create") }}" type="bottom" class="btn btn-primary btn-sm ml-auto">
                        <i class="fas fa-plus"></i>
                        Tambah
                    </a>
                </div>
            </div>
            <div class="card-body" id="cetak">
                <div class="table-responsive">
                    {{-- {{ csrf_field() }} --}}

                    <table id="example" class="display" style="min-width: 845px">
                        <thead>
                            <tr class="text-center">
                                <th>No</th>
                                <th>Nama</th>
                                <th>Jabatan</th>
                                <th>Foto</th>
                                <th>Aksi</th>
                                <th>Status Upload</th>
                            </tr>
                        </thead>

                        <tbody class="text-center">
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($teams as $team)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>
                                    {{ $team->nama }}
                                </td>
                                <td>
                                    {{ $team->jabatan }}
                                </td>
                                <td>
                                    <img src="{{ asset('storage/team/' . $team->image) }}" height="100px" alt="">
                                </td>
                                <td>
                                    <a href="{{ route('team.edit',$team->id) }}" class="btn btn-warning">Edit</a>
                                    <form action="{{ route('team.destroy', $team->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                    </form>
                                </td>
                                <td>
                                    <input type="checkbox" class="toggle-status" data-id="{{ $team->id }}"
                                        {{ $team->status ? 'checked' : '' }} data-toggle="toggle">
                                </td>
                            </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


    <!-- /.container-fluid -->
@include('sweetalert::alert')

@endsection

@section('footer')
@endsection
