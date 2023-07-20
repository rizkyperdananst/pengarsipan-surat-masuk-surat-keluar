@extends('layouts.dashboard')
@section('title', 'Admin | Detail Surat Keluar')
    
@section('content')
<div class="row">
     <div class="col-md-12">
          <div class="card shadow">
               <div class="card-header">
                    <h4>Detail Surat Keluar</h4>
               </div>
               <div class="card-body">
                    <div class="table-responsive">
                         <table class="table table-hover table-bordered">
                              <tbody>
                                   <tr>
                                        <th>Nomor Surat</th>
                                        <td>{{ $sk->nomor_surat }}</td>
                                   </tr>
                                   <tr>
                                        <th>File Surat</th>
                                        <td><a href="{{ url('storage/file-surat-keluar/'. $sk->file_surat) }}" target="_blank">{{ $sk->file_surat }}</a></td>
                                   </tr>
                                   <tr>
                                        <th>Kategori Surat</th>
                                        <td>{{ $sk->kategori_surat }}</td>
                                   </tr>
                                   <tr>
                                        <th>Tanggal Surat</th>
                                        <td>{{ $sk->tanggal_surat }}</td>
                                   </tr>
                                   <tr>
                                        <th>Tujuan Surat</th>
                                        <td>{{ $sk->tujuan_surat }}</td>
                                   </tr>
                                   <tr>
                                        <th>Perihal</th>
                                        <td>{{ $sk->perihal }}</td>
                                   </tr>
                                   <tr>
                                        <th>Keterangan</th>
                                        <td>{{ $sk->keterangan }}</td>
                                   </tr>
                              </tbody>
                         </table>
                    </div>
               </div>
               <div class="card-footer">
                    <a href="{{ route('surat-keluar.index') }}" class="btn btn-secondary float-end">Kembali</a>
               </div>
          </div>
     </div>
</div>
@endsection