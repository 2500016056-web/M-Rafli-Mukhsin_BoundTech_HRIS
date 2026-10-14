<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TahapSeleksi extends Model
{
    use HasFactory;

    // @dbml-sync:table-property
    protected $table = 'tahap_seleksi';
    // @enddbml-sync:table-property

    // @dbml-sync:fillable
    protected $fillable = [
        'id_lamaran',
		'tahap_lama',
		'tahap_baru',
		'id_pelaku',
		'waktu',
		'alasan_perubahan'
    ];
    // @enddbml-sync:fillable

    // @dbml-sync:casts
    protected $casts = [
        'waktu' => 'datetime'
    ];
    // @enddbml-sync:casts

    // @dbml-sync:relations
    public function lamaran()
    {
        return $this->belongsTo(Lamaran::class, 'id_lamaran', 'id_lamaran');
    }

    public function pengguna()
    {
        return $this->belongsTo(Pengguna::class, 'id_pelaku', 'id_pengguna');
    }

    public function lamarans()
    {
        return $this->hasMany(Lamaran::class, 'id_tahap_saat_ini', 'id_tahap');
    }

    // @enddbml-sync:relations
}