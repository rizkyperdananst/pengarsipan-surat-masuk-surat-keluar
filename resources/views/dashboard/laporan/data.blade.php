@extends('layouts.dashboard')
@section('title', 'Admin | Cetak Laporan')
    
@section('content')
<div class="row">
     <div class="col-md-12">
          <div class="card shadow">
               <div class="card-header">
                    <h4>Cetak Laporan</h4>
               </div>
               <div class="card-body">
                    <form action="{{ route('export') }}" method="POST">
                         @csrf
                         <div class="row mb-3">
                              <div class="col-md-12">
                                   <label for="data" class="form-label">Data</label>
                                   <select name="data" id="data" class="form-select @error('data') is-invalid @enderror">
                                        <option selected hidden>Pilih Data Laporan</option>
                                        <option value="Surat Masuk">Surat Masuk</option>
                                        <option value="Surat Keluar">Surat Keluar</option>
                                   </select>
                                   @error('data')
                                       <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                   @enderror
                              </div>
                              
                         </div>
                         <div class="row mb-3">
                              <div class="col-md-12">
                                   <button class="btn btn-primary float-end">Cetak Laporan</button>
                              </div>
                         </div>
                    </form>
               </div>
          </div>
     </div>
</div>
@endsection