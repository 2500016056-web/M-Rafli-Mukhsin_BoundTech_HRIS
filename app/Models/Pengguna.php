<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    use HasFactory;

    // @dbml-sync:table-property
    protected $table = 'pengguna';
    // @enddbml-sync:table-property

    // @dbml-sync:fillable
    protected $fillable = [
        'nama',
		'email',
		'akun',
		'peran',
		'status_akun',
		'id_cabang',
		'id_departemen'
    ];
    // @enddbml-sync:fillable

    // @dbml-sync:casts
    protected $casts = [
        
    ];
    // @enddbml-sync:casts

    // @dbml-sync:relations
    public function cabang()
    {
        return $this->belongsTo(Cabang::class, 'id_cabang', 'id_cabang');
    }

    public function departeman()
    {
        return $this->belongsTo(Departeman::class, 'id_departemen', 'id_departemen');
    }

    public function lowongans()
    {
        return $this->hasMany(Lowongan::class, 'id_pengaju', 'id_pengguna');
    }

    public function lamarans()
    {
        return $this->hasMany(Lamaran::class, 'id_recruiter', 'id_pengguna');
    }

    public function tahapSeleksis()
    {
        return $this->hasMany(TahapSeleksi::class, 'id_pelaku', 'id_pengguna');
    }

    public function jadwalInterviews()
    {
        return $this->hasMany(JadwalInterview::class, 'id_pewawancara', 'id_pengguna');
    }

    public function penilaianInterviews()
    {
        return $this->hasMany(PenilaianInterview::class, 'id_penilai', 'id_pengguna');
    }

    public function offers()
    {
        return $this->hasMany(Offer::class, 'id_recruiter', 'id_pengguna');
    }

    public function logAudits()
    {
        return $this->hasMany(LogAudit::class, 'id_pelaku', 'id_pengguna');
    }

    // @enddbml-sync:relations
}