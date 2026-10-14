<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenilaianInterview extends Model
{
    use HasFactory;

    // @dbml-sync:table-property
    protected $table = 'penilaian_interview';
    // @enddbml-sync:table-property

    // @dbml-sync:fillable
    protected $fillable = [
        'id_jadwal_interview',
		'id_penilai',
		'skor',
		'rekomendasi',
		'catatan'
    ];
    // @enddbml-sync:fillable

    // @dbml-sync:casts
    protected $casts = [
        
    ];
    // @enddbml-sync:casts

    // @dbml-sync:relations
    public function jadwalInterview()
    {
        return $this->belongsTo(JadwalInterview::class, 'id_jadwal_interview', 'id_jadwal_interview');
    }

    public function pengguna()
    {
        return $this->belongsTo(Pengguna::class, 'id_penilai', 'id_pengguna');
    }

    // @enddbml-sync:relations
}