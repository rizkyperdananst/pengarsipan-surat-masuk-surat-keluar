@extends('layouts.dashboard')
@section('title', 'Admin | Edit Surat Keluar')
    
@section('content')
<div class="container mt-5">
     <div class="row">
          <div class="col-md-12">
               <div class="card shadow">
                    <div class="card-header">
                         <h4>Edit Surat Keluar</h4>
                    </div>
                    <div class="card-body">
                         <form action="{{ route('surat-keluar.update', $sk->id) }}" method="POST" enctype="multipart/form-data">
                              @csrf
                              @method('put')
                              <div class="row mb-3">
                                   <div class="col-md-6">
                                        <label for="nomor_surat" class="form-label">Nomor Surat</label>
                                        <input type="text" name="nomor_surat" value="{{ $sk->nomor_surat }}" id="nomor_surat" class="form-control @error('nomor_surat') is-invalid @enderror" placeholder="masukkan nomor surat">
                                        @error('nomor_surat')
                                            <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                        @enderror
                                   </div>
                                   <div class="col-md-6">
                                        <label for="file_surat" class="form-label">File Surat</label>
                                        <input type="file" name="file_surat" id="file_surat" class="form-control @error('file_surat') is-invalid @enderror" placeholder="masukkan sifat surat">
                                        @error('file_surat')
                                            <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                        @enderror
                                   </div>
                              </div>
                              <div class="row mb-3">
                                   <div class="col-md-6">
                                        <label for="kategori_surat" class="form-label">Kategori Surat</label>
                                        <input type="text" name="kategori_surat" value="{{ $sk->kategori_surat }}" id="kategori_surat" class="form-control @error('kategori_surat') is-invalid @enderror" placeholder="masukkan kategori surat">
                                        @error('kategori_surat')
                                            <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                        @enderror
                                   </div>
                                   <div class="col-md-6">
                                        <label for="tanggal_surat" class="form-label">Tanggal Surat</label>
                                        <input type="date" name="tanggal_surat" value="{{ $sk->tanggal_surat }}" id="tanggal_surat" class="form-control @error('tanggal_surat') is-invalid @enderror">
                                        @error('tanggal_surat')
                                            <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                        @enderror
                                   </div>
                              </div>
                              <div class="row mb-3">
                                   <div class="col-md-6">
                                        <label for="tujuan_surat" class="form-label">Tujuan Surat</label>
                                        <input type="text" name="tujuan_surat" value="{{ $sk->tujuan_surat }}" id="tujuan_surat" class="form-control @error('tujuan_surat') is-invalid @enderror" placeholder="masukkan tujuan surat">
                                        @error('tujuan_surat')
                                            <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                        @enderror
                                   </div>
                                   <div class="col-md-6">
                                        <label for="perihal" class="form-label">Perihal</label>
                                        <input type="text" name="perihal" value="{{ $sk->perihal }}" id="perihal" class="form-control @error('perihal') is-invalid @enderror" placeholder="masukkan perihal">
                                        @error('perihal')
                                            <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                        @enderror
                                   </div>
                              </div>
                              <div class="row mb-3">
                                   <div class="col-md-12">
                                        <label for="keterangan" class="form-label">Keterangan</label>
                                        <textarea name="keterangan" id="keterangan" cols="30" rows="5" class="form-control @error('keterangan') is-invalid @enderror" placeholder="masukkan keterangan">{{ $sk->keterangan }}</textarea>
                                        @error('keterangan')
                                            <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                        @enderror
                                   </div>
                              </div>
                              <div class="row mb-3">
                                   <div class="col-md-12">
                                        <a href="{{ route('surat-keluar.index') }}" class="btn btn-secondary float-end ms-3">Kembali</a>
                                        <button class="btn btn-primary float-end">Update</button>
                                   </div>
                              </div>
                         </form>
                    </div>
               </div>
          </div>
     </div>
</div>
@endsection