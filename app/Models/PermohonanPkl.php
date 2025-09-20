<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PermohonanPkl extends Model
{
    use HasFactory;

    protected $table = 'permohonan_pkl';
    
    protected $fillable = [
        'siswa_id',
        'nama_dudi',
        'alamat_dudi',
        'kontak_dudi',
        'bidang_usaha',
        'tanggal_mulai',
        'tanggal_selesai',
        'guru_pembimbing',
        'status',
        'catatan'
    ];

    protected $casts = [
        'tanggal_mulai' => 'date',
        'tanggal_selesai' => 'date',
    ];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }
}