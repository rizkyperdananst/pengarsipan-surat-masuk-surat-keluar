@extends('layouts.dashboard')
@section('title', 'Admin | Data Surat Masuk')
    
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
                    <h4>Data Surat Masuk</h4>
                    <a href="{{ route('surat-masuk.create') }}" class="btn btn-primary">Tambah</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>File Surat</th>
                                    <th>Asal Surat</th>
                                    <th>Nomor Surat</th>
                                    <th>Tanggal Surat</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no=1;
                                @endphp
                                @foreach ($surat_masuk as $sm)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td><a href="{{ url('storage/file-surat-masuk/'. $sm->file_surat) }}" target="_blank">{{ $sm->file_surat }}</a></td>
                                    <td>{{ $sm->asal_surat }}</td>
                                    <td>{{ $sm->nomor_surat }}</td>
                                    <td>{{ $sm->tanggal_surat }}</td>
                                    <td width="19%">
                                        <a href="{{ route('surat-masuk.show', $sm->id) }}"
                                             class="btn btn-info">
                                             <i class="fa-solid fa-eye"></i>
                                         </a>
                                        <a href="{{ route('surat-masuk.edit', $sm->id) }}"
                                             class="btn btn-warning">
                                             <i class="fa-solid fa-pen-to-square"></i>
                                         </a>
                                         <form action="{{ route('surat-masuk.destroy', $sm->id) }}"
                                             method="POST" class="d-inline mb-1">
                                             @csrf
                                             @method('delete')
                                             <button type="submit" class="btn btn-danger"><i
                                                     class="fa-solid fa-trash"></i></button>
                                         </form>
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