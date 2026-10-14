<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;

    // @dbml-sync:table-property
    protected $table = 'offer';
    // @enddbml-sync:table-property

    // @dbml-sync:fillable
    protected $fillable = [
        'id_lamaran',
		'rincian_offer',
		'id_recruiter',
		'id_pengonfirmasi',
		'id_penyetuju',
		'hasil_verifikasi_anggaran',
		'tanggal_penyusun',
		'tanggal_pengirim',
		'tanggal_respons'
    ];
    // @enddbml-sync:fillable

    // @dbml-sync:casts
    protected $casts = [
        'tanggal_penyusun' => 'date',
		'tanggal_pengirim' => 'date',
		'tanggal_respons' => 'date'
    ];
    // @enddbml-sync:casts

    // @dbml-sync:relations
    public function lamaran()
    {
        return $this->belongsTo(Lamaran::class, 'id_lamaran', 'id_lamaran');
    }

    public function pengguna()
    {
        return $this->belongsTo(Pengguna::class, 'id_recruiter', 'id_pengguna');
    }

    public function pengguna()
    {
        return $this->belongsTo(Pengguna::class, 'id_pengonfirmasi', 'id_pengguna');
    }

    public function pengguna()
    {
        return $this->belongsTo(Pengguna::class, 'id_penyetuju', 'id_pengguna');
    }

    // @enddbml-sync:relations
}