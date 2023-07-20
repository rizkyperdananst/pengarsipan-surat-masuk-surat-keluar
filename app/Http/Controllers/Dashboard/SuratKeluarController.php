<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\SuratKeluar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SuratKeluarController extends Controller
{
    public function index()
    {
        $surat_keluar = SuratKeluar::orderBy('id', 'desc')->get();

        return view('dashboard.surat-keluar.index', compact('surat_keluar'));
    }

    public function create()
    {
        return view('dashboard.surat-keluar.create');
    }

    public function store(Request $request)
    {
        $validator = $request->validate([
            'nomor_surat' => 'required',
            'file_surat' => 'required|file|max:5120|mimes:pdf',
            'kategori_surat' => 'required',
            'tanggal_surat' => 'required',
            'tujuan_surat' => 'required',
            'perihal' => 'required',
            'keterangan' => 'required',
        ]);

        $extension = $request->file('file_surat')->getClientOriginalExtension();
        $nama_file_surat = 'file-surat' .'-'. rand() .'.'. $extension;
        $path = $request->file('file_surat')->storeAs('file-surat-keluar', $nama_file_surat, 'public');

        $surat_keluar = SuratKeluar::create([
            'nomor_surat' => $request->nomor_surat,
            'file_surat' => $nama_file_surat,
            'kategori_surat' => $request->kategori_surat,
            'tanggal_surat' => $request->tanggal_surat,
            'tujuan_surat' => $request->tujuan_surat,
            'perihal' => $request->perihal,
            'keterangan' => $request->keterangan,
        ]);

        return redirect()->route('surat-keluar.index')->with('success', 'Data Surat Keluar Berhasil Di Tambahkan');
    }

    public function show($id)
    {
        $sk = SuratKeluar::find($id);

        return view('dashboard.surat-keluar.detail', compact('sk'));
    }

    public function edit($id)
    {
        $sk = SuratKeluar::find($id);

        return view('dashboard.surat-keluar.edit', compact('sk'));
    }

    public function update(Request $request, $id)
    {
        $validator = $request->validate([
            'nomor_surat' => 'required',
            'file_surat' => 'nullable|file|max:5120|mimes:pdf',
            'kategori_surat' => 'required',
            'tanggal_surat' => 'required',
            'tujuan_surat' => 'required',
            'perihal' => 'required',
            'keterangan' => 'required',
        ]);

        $surat_keluar = SuratKeluar::find($id);

        if($request->file('file_surat')) {
            $nama_file_surat_lama = 'storage/file-surat-keluar/'. $surat_keluar->file_surat;
            if(File::exists($nama_file_surat_lama)) {
                File::delete($nama_file_surat_lama);

                $extension = $request->file('file_surat')->getClientOriginalExtension();
                $nama_file_surat = 'file-surat' .'-'. rand() .'.'. $extension;
                $path = $request->file('file_surat')->storeAs('file-surat-keluar', $nama_file_surat, 'public');
            }
        } else {
            $nama_file_surat = $surat_keluar->file_surat;
        }

        $surat_keluar = SuratKeluar::find($id)->update([
            'nomor_surat' => $request->nomor_surat,
            'file_surat' => $nama_file_surat,
            'kategori_surat' => $request->kategori_surat,
            'tanggal_surat' => $request->tanggal_surat,
            'tujuan_surat' => $request->tujuan_surat,
            'perihal' => $request->perihal,
            'keterangan' => $request->keterangan,
        ]);

        return redirect()->route('surat-keluar.index')->with('success', 'Data Surat Keluar Berhasil Di Update');
    }

    public function destroy($id)
    {
        $surat_keluar = SuratKeluar::find($id);
        $nama_file_surat_lama = File::delete('storage/file-surat-keluar/'. $surat_keluar->file_surat);
        $surat_keluar->delete();
     
        return redirect()->route('surat-keluar.index')->with('success', 'Data Surat Keluar Berhasil Di Hapus');
    }
}
