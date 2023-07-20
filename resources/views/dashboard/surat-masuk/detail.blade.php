@extends('layouts.dashboard')
@section('title', 'Admin | Detail Surat Masuk')
    
@section('content')
<div class="row">
     <div class="col-md-12">
          <div class="card shadow">
               <div class="card-header">
                    <h4>Detail Surat Masuk</h4>
               </div>
               <div class="card-body">
                    <div class="table-responsive">
                         <table class="table table-hover table-bordered">
                              <tbody>
                                   <tr>
                                        <th>Nomor Surat</th>
                                        <td>{{ $sm->nomor_surat }}</td>
                                   </tr>
                                   <tr>
                                        <th>File Surat</th>
                                        <td><a href="{{ url('storage/file-surat-masuk/'. $sm->file_surat) }}" target="_blank">{{ $sm->file_surat }}</a></td>
                                   </tr>
                                   <tr>
                                        <th>Kategori Surat</th>
                                        <td>{{ $sm->kategori_surat }}</td>
                                   </tr>
                                   <tr>
                                        <th>Sifat Surat</th>
                                        <td>{{ $sm->sifat_surat }}</td>
                                   </tr>
                                   <tr>
                                        <th>Asal Surat</th>
                                        <td>{{ $sm->asal_surat }}</td>
                                   </tr>
                                   <tr>
                                        <th>Tanggal Surat</th>
                                        <td>{{ $sm->tanggal_surat }}</td>
                                   </tr>
                                   <tr>
                                        <th>Tanggal Diterima</th>
                                        <td>{{ $sm->tanggal_diterima }}</td>
                                   </tr>
                                   <tr>
                                        <th>Perihal</th>
                                        <td>{{ $sm->perihal }}</td>
                                   </tr>
                                   <tr>
                                        <th>Keterangan</th>
                                        <td>{{ $sm->keterangan }}</td>
                                   </tr>
                              </tbody>
                         </table>
                    </div>
               </div>
               <div class="card-footer">
                    <a href="{{ route('surat-masuk.index') }}" class="btn btn-secondary float-end">Kembali</a>
               </div>
          </div>
     </div>
</div>
@endsection