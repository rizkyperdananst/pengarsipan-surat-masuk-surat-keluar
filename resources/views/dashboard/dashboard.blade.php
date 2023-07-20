@extends('layouts.dashboard')
@section('title', 'Admin | Dashboard')
    
@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div>

<!-- Content Row -->

<div class="row mb-3">
    <div class="col-md-12">
        <h2>Hai! {{ Auth::user()->name }}</h2>
        <h4>Selamat Datang Di Website Sistem Informasi Pengarsipan Surat <i class="text-warning">Kecamatan Medan Amplas</i></h4>
    </div>
</div>

<div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-6 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase fs-4 mb-3">
                            Surat Masuk</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $surat_masuk }}</div>
                        <button class="btn btn-primary mt-3">More Info</button>
                    </div>
                    <div class="col-auto">
                        <i class="fa-solid fa-envelope fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase fs-4 mb-3">
                            Surat Keluar</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $surat_keluar }}</div>
                        <button class="btn btn-primary mt-3">More Info</button>
                    </div>
                    <div class="col-auto">
                        <i class="fa-solid fa-envelope fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- End Content Row -->
@endsection