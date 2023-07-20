<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\SuratKeluar;
use App\Models\SuratMasuk;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function index()
    {
        $surat_masuk = SuratMasuk::orderBy('id', 'desc')->get();
        $surat_keluar = SuratKeluar::orderBy('id', 'desc')->get();

        return view('dashboard.galeri.index', compact('surat_masuk', 'surat_keluar'));
    }
}
