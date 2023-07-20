@extends('layouts.dashboard')
@section('title', 'Admin | Edit Surat Masuk')
    
@section('content')
<div class="container mt-5">
     <div class="row">
          <div class="col-md-12">
               <div class="card shadow">
                    <div class="card-header">
                         <h4>Edit Surat Masuk</h4>
                    </div>
                    <div class="card-body">
                         <form action="{{ route('surat-masuk.update', $sm->id) }}" method="POST" enctype="multipart/form-data">
                              @csrf
                              @method('put')
                              <div class="row mb-3">
                                   <div class="col-md-6">
                                        <label for="nomor_surat" class="form-label">Nomor Surat</label>
                                        <input type="text" name="nomor_surat" value="{{ $sm->nomor_surat }}" id="nomor_surat" class="form-control @error('nomor_surat') is-invalid @enderror" placeholder="masukkan nomor surat">
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
                                        <input type="text" name="kategori_surat" value="{{ $sm->kategori_surat }}" id="kategori_surat" class="form-control @error('kategori_surat') is-invalid @enderror" placeholder="masukkan kategori surat">
                                        @error('kategori_surat')
                                            <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                        @enderror
                                   </div>
                                   <div class="col-md-6">
                                        <label for="sifat_surat" class="form-label">Sifat Surat</label>
                                        <input type="text" name="sifat_surat" value="{{ $sm->sifat_surat }}" id="sifat_surat" class="form-control @error('sifat_surat') is-invalid @enderror" placeholder="masukkan sifat surat">
                                        @error('sifat_surat')
                                            <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                        @enderror
                                   </div>
                              </div>
                              <div class="row mb-3">
                                   <div class="col-md-6">
                                        <label for="asal_surat" class="form-label">Asal Surat</label>
                                        <input type="text" name="asal_surat" value="{{ $sm->asal_surat }}" id="asal_surat" class="form-control @error('asal_surat') is-invalid @enderror" placeholder="masukkan asal surat">
                                        @error('asal_surat')
                                            <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                        @enderror
                                   </div>
                                   <div class="col-md-6">
                                        <label for="tanggal_surat" class="form-label">Tanggal Surat</label>
                                        <input type="date" name="tanggal_surat" value="{{ $sm->tanggal_surat }}" id="tanggal_surat" class="form-control @error('tanggal_surat') is-invalid @enderror">
                                        @error('tanggal_surat')
                                            <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                        @enderror
                                   </div>
                              </div>
                              <div class="row mb-3">
                                   <div class="col-md-6">
                                        <label for="tanggal_diterima" class="form-label">Tanggal Diterima</label>
                                        <input type="date" name="tanggal_diterima" value="{{ $sm->tanggal_diterima }}" id="tanggal_diterima" class="form-control @error('tanggal_diterima') is-invalid @enderror">
                                        @error('tanggal_diterima')
                                            <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                        @enderror
                                   </div>
                                   <div class="col-md-6">
                                        <label for="perihal" class="form-label">Perihal</label>
                                        <input type="text" name="perihal" value="{{ $sm->perihal }}" id="perihal" class="form-control @error('perihal') is-invalid @enderror" placeholder="masukkan perihal">
                                        @error('perihal')
                                            <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                        @enderror
                                   </div>
                              </div>
                              <div class="row mb-3">
                                   <div class="col-md-12">
                                        <label for="keterangan" class="form-label">Keterangan</label>
                                        <textarea name="keterangan" id="keterangan" cols="30" rows="5" class="form-control @error('keterangan') is-invalid @enderror" placeholder="masukkan keterangan">{{ $sm->keterangan }}</textarea>
                                        @error('keterangan')
                                            <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                        @enderror
                                   </div>
                              </div>
                              <div class="row mb-3">
                                   <div class="col-md-12">
                                        <a href="{{ route('surat-masuk.index') }}" class="btn btn-secondary float-end ms-3">Kembali</a>
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