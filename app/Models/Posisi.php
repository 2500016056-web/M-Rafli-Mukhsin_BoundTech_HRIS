<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posisi extends Model
{
    use HasFactory;

    // @dbml-sync:table-property
    protected $table = 'posisi';
    // @enddbml-sync:table-property

    // @dbml-sync:fillable
    protected $fillable = [
        'nama_posisi',
		'id_departemen'
    ];
    // @enddbml-sync:fillable

    // @dbml-sync:casts
    protected $casts = [
        
    ];
    // @enddbml-sync:casts

    // @dbml-sync:relations
    public function departeman()
    {
        return $this->belongsTo(Departeman::class, 'id_departemen', 'id_departemen');
    }

    public function lowongans()
    {
        return $this->hasMany(Lowongan::class, 'id_posisi', 'id_posisi');
    }

    // @enddbml-sync:relations
}