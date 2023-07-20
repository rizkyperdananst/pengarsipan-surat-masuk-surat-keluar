<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\SuratKeluar;
use App\Models\SuratMasuk;
use Illuminate\Http\Request;
use PDF;

class LaporanController extends Controller
{
    public function data()
    {
        return view('dashboard.laporan.data');
    }

    public function export(Request $request)
    {

        if($request->data) {
            if($request->data == 'Surat Keluar') {

                $surat_keluar = SuratKeluar::all();

                $data = PDF::loadview('dashboard.laporan.surat-keluar', compact('surat_keluar'))->setPaper('a4', 'landscape');
                return $data->download('laporan-surat-keluar.pdf');
            } elseif($request->data == 'Surat Masuk') {
                $surat_masuk = SuratMasuk::all();

                $data = PDF::loadview('dashboard.laporan.surat-masuk', compact('surat_masuk'))->setPaper('a4', 'landscape');
                return $data->download('laporan-surat-masuk.pdf');
            }
        }

        
    }
}
