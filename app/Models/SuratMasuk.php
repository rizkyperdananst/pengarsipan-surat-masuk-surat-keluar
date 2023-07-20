<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratMasuk extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomor_surat',
        'file_surat',
        'kategori_surat',
        'sifat_surat',
        'asal_surat',
        'tanggal_surat',
        'tanggal_diterima',
        'perihal',
        'keterangan',
    ];
}
