<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departeman extends Model
{
    use HasFactory;

    // @dbml-sync:table-property
    
    // @enddbml-sync:table-property

    // @dbml-sync:fillable
    protected $fillable = [
        'nama_departemen'
    ];
    // @enddbml-sync:fillable

    // @dbml-sync:casts
    protected $casts = [
        
    ];
    // @enddbml-sync:casts

    // @dbml-sync:relations
    public function posisis()
    {
        return $this->hasMany(Posisi::class, 'id_departemen', 'id_departemen');
    }

    public function penggunas()
    {
        return $this->hasMany(Pengguna::class, 'id_departemen', 'id_departemen');
    }

    public function lowongans()
    {
        return $this->hasMany(Lowongan::class, 'id_departemen', 'id_departemen');
    }

    // @enddbml-sync:relations
}