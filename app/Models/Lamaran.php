<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lamaran extends Model
{
    use HasFactory;

    // @dbml-sync:table-property
    protected $table = 'lamaran';
    // @enddbml-sync:table-property

    // @dbml-sync:fillable
    protected $fillable = [
        'id_kandidat',
		'id_lowongan',
		'id_recruiter',
		'sumber_lamaran',
		'id_tahap_saat_ini',
		'status_lamaran',
		'alasan_penolakan',
		'tanggal_lamaran',
		'tanggal_ditolak'
    ];
    // @enddbml-sync:fillable

    // @dbml-sync:casts
    protected $casts = [
        'tanggal_lamaran' => 'date',
		'tanggal_ditolak' => 'date'
    ];
    // @enddbml-sync:casts

    // @dbml-sync:relations
    public function kandidat()
    {
        return $this->belongsTo(Kandidat::class, 'id_kandidat', 'id_kandidat');
    }

    public function lowongan()
    {
        return $this->belongsTo(Lowongan::class, 'id_lowongan', 'id_lowongan');
    }

    public function pengguna()
    {
        return $this->belongsTo(Pengguna::class, 'id_recruiter', 'id_pengguna');
    }

    public function tahapSeleksi()
    {
        return $this->belongsTo(TahapSeleksi::class, 'id_tahap_saat_ini', 'id_tahap');
    }

    public function tahapSeleksis()
    {
        return $this->hasMany(TahapSeleksi::class, 'id_lamaran', 'id_lamaran');
    }

    public function jadwalInterviews()
    {
        return $this->hasMany(JadwalInterview::class, 'id_lamaran', 'id_lamaran');
    }

    public function offers()
    {
        return $this->hasMany(Offer::class, 'id_lamaran', 'id_lamaran');
    }

    // @enddbml-sync:relations
}