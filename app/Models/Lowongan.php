<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lowongan extends Model
{
    use HasFactory;

    // @dbml-sync:table-property
    protected $table = 'lowongan';
    // @enddbml-sync:table-property

    // @dbml-sync:fillable
    protected $fillable = [
        'id_posisi',
		'id_departemen',
		'id_cabang',
		'jumlah_posisi',
		'status_lowongan',
		'tanggal_buka',
		'tanggal_tutup',
		'id_pengaju',
		'id_pembuka'
    ];
    // @enddbml-sync:fillable

    // @dbml-sync:casts
    protected $casts = [
        'tanggal_buka' => 'date',
		'tanggal_tutup' => 'date'
    ];
    // @enddbml-sync:casts

    // @dbml-sync:relations
    public function posisi()
    {
        return $this->belongsTo(Posisi::class, 'id_posisi', 'id_posisi');
    }

    public function departeman()
    {
        return $this->belongsTo(Departeman::class, 'id_departemen', 'id_departemen');
    }

    public function cabang()
    {
        return $this->belongsTo(Cabang::class, 'id_cabang', 'id_cabang');
    }

    public function pengguna()
    {
        return $this->belongsTo(Pengguna::class, 'id_pengaju', 'id_pengguna');
    }

    public function pengguna()
    {
        return $this->belongsTo(Pengguna::class, 'id_pembuka', 'id_pengguna');
    }

    public function lamarans()
    {
        return $this->hasMany(Lamaran::class, 'id_lowongan', 'id_lowongan');
    }

    // @enddbml-sync:relations
}