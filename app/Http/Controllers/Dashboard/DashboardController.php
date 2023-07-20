<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\SuratKeluar;
use App\Models\SuratMasuk;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $surat_masuk = SuratMasuk::all()->count();
        $surat_keluar = SuratKeluar::all()->count();

        return view('dashboard.dashboard', compact('surat_masuk', 'surat_keluar'));
    }

}
