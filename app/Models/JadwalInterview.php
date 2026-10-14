<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalInterview extends Model
{
    use HasFactory;

    // @dbml-sync:table-property
    protected $table = 'jadwal_interview';
    // @enddbml-sync:table-property

    // @dbml-sync:fillable
    protected $fillable = [
        'id_lamaran',
		'id_pewawancara',
		'waktu',
		'lokasi_tautan',
		'status_jadwal'
    ];
    // @enddbml-sync:fillable

    // @dbml-sync:casts
    protected $casts = [
        'waktu' => 'date'
    ];
    // @enddbml-sync:casts

    // @dbml-sync:relations
    public function lamaran()
    {
        return $this->belongsTo(Lamaran::class, 'id_lamaran', 'id_lamaran');
    }

    public function pengguna()
    {
        return $this->belongsTo(Pengguna::class, 'id_pewawancara', 'id_pengguna');
    }

    public function penilaianInterviews()
    {
        return $this->hasMany(PenilaianInterview::class, 'id_jadwal_interview', 'id_jadwal_interview');
    }

    // @enddbml-sync:relations
}