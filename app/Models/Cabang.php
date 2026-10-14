<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cabang extends Model
{
    use HasFactory;

    // @dbml-sync:table-property
    protected $table = 'cabang';
    // @enddbml-sync:table-property

    // @dbml-sync:fillable
    protected $fillable = [
        'nama_cabang',
		'lokasi'
    ];
    // @enddbml-sync:fillable

    // @dbml-sync:casts
    protected $casts = [
        
    ];
    // @enddbml-sync:casts

    // @dbml-sync:relations
    public function penggunas()
    {
        return $this->hasMany(Pengguna::class, 'id_cabang', 'id_cabang');
    }

    public function lowongans()
    {
        return $this->hasMany(Lowongan::class, 'id_cabang', 'id_cabang');
    }

    // @enddbml-sync:relations
}