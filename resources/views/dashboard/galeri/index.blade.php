@extends('layouts.dashboard')
@section('title', 'Admin | Data Galeri')
    
@section('content')
<div class="container mt-5">
    <div class="row mb-2">
        <div class="col-md-12">
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ session('success') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header d-flex justify-content-between">
                    <h4>Data Galeri</h4>
                    {{-- <a href="#" class="btn btn-primary">Tambah</a> --}}
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>File Surat Keluar</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no=1;
                                @endphp
                                @foreach ($surat_keluar as $sk)
                                <tr>
                                    <td width="5%">{{ $no++ }}</td>
                                    <td><a href="{{ url('storage/file-surat-keluar/'. $sk->file_surat) }}" target="_blank">{{ $sk->file_surat }}</a></td>
                                    <td width="7%">
                                        <a href="{{ url('storage/file-surat-keluar/'. $sk->file_surat) }}" target="_blank"
                                             class="btn btn-info">
                                             <i class="fa-solid fa-eye"></i>
                                         </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>File Surat Masuk</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no=1;
                                @endphp
                                @foreach ($surat_masuk as $sm)
                                <tr>
                                    <td width="5%">{{ $no++ }}</td>
                                    <td><a href="{{ url('storage/file-surat-masuk/'. $sm->file_surat) }}" target="_blank">{{ $sm->file_surat }}</a></td>
                                    <td width="7%">
                                        <a href="{{ url('storage/file-surat-masuk/'. $sm->file_surat) }}" target="_blank"
                                             class="btn btn-info">
                                             <i class="fa-solid fa-eye"></i>
                                         </a>
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
</div>
@endsection