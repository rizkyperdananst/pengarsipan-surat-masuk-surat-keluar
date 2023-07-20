<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\SuratMasuk;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class SuratMasukController extends Controller
{
    public function index()
    {
        $surat_masuk = SuratMasuk::orderBy('id', 'desc')->get();

        return view('dashboard.surat-masuk.index', compact('surat_masuk'));
    }

    public function create()
    {
        return view('dashboard.surat-masuk.create');
    }

    public function store(Request $request)
    {
        $validator = $request->validate([
            'nomor_surat' => 'required',
            'file_surat' => 'required|file|max:5120|mimes:pdf',
            'kategori_surat' => 'required',
            'sifat_surat' => 'required',
            'asal_surat' => 'required',
            'tanggal_surat' => 'required',
            'tanggal_diterima' => 'required',
            'perihal' => 'required',
            'keterangan' => 'required',
        ]);

        $extension = $request->file('file_surat')->getClientOriginalExtension();
        $nama_file_surat = 'file-surat' .'-'. rand() .'.'. $extension;
        $path = $request->file('file_surat')->storeAs('file-surat-masuk', $nama_file_surat, 'public');

        $surat_masuk = SuratMasuk::create([
            'nomor_surat' => $request->nomor_surat,
            'file_surat' => $nama_file_surat,
            'kategori_surat' => $request->kategori_surat,
            'sifat_surat' => $request->sifat_surat,
            'asal_surat' => $request->asal_surat,
            'tanggal_surat' => $request->tanggal_surat,
            'tanggal_diterima' => $request->tanggal_diterima,
            'perihal' => $request->perihal,
            'keterangan' => $request->keterangan,
        ]);

        return redirect()->route('surat-masuk.index')->with('success', 'Data Surat Masuk Berhasil Di Tambahkan');
    }

    public function show($id)
    {
        $sm = SuratMasuk::find($id);

        return view('dashboard.surat-masuk.detail', compact('sm'));
    }

    public function edit($id)
    {
        $sm = SuratMasuk::find($id);

        return view('dashboard.surat-masuk.edit', compact('sm'));
    }

    public function update(Request $request, $id)
    {
        $validator = $request->validate([
            'nomor_surat' => 'required',
            'file_surat' => 'nullable|file|max:5120|mimes:pdf',
            'kategori_surat' => 'required',
            'sifat_surat' => 'required',
            'asal_surat' => 'required',
            'tanggal_surat' => 'required',
            'tanggal_diterima' => 'required',
            'perihal' => 'required',
            'keterangan' => 'required',
        ]);

        $surat_masuk = SuratMasuk::find($id);

        if($request->file('file_surat')) {
            $nama_file_surat_lama = 'storage/file-surat-masuk/'. $surat_masuk->file_surat;
            if(File::exists($nama_file_surat_lama)) {
                File::delete($nama_file_surat_lama);

                $extension = $request->file('file_surat')->getClientOriginalExtension();
                $nama_file_surat = 'file-surat' .'-'. rand() .'.'. $extension;
                $path = $request->file('file_surat')->storeAs('file-surat-masuk', $nama_file_surat, 'public');
            }
        } else {
            $nama_file_surat = $surat_masuk->file_surat;
        }

        $surat_masuk = SuratMasuk::find($id)->update([
            'nomor_surat' => $request->nomor_surat,
            'file_surat' => $nama_file_surat,
            'kategori_surat' => $request->kategori_surat,
            'sifat_surat' => $request->sifat_surat,
            'asal_surat' => $request->asal_surat,
            'tanggal_surat' => $request->tanggal_surat,
            'tanggal_diterima' => $request->tanggal_diterima,
            'perihal' => $request->perihal,
            'keterangan' => $request->keterangan,
        ]);

        return redirect()->route('surat-masuk.index')->with('success', 'Data Surat Masuk Berhasil Di Tambahkan');
    }

    public function destroy($id)
    {
        $surat_masuk = SuratMasuk::find($id);
        $nama_file_surat_lama = File::delete('storage/file-surat-masuk/'. $surat_masuk->file_surat);
        $surat_masuk->delete();

        return redirect()->route('surat-masuk.index')->with('success', 'Data Surat Masuk Berhasil Di Hapus');
    }
}
