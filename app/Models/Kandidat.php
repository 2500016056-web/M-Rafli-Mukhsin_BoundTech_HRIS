<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kandidat extends Model
{
    use HasFactory;

    // @dbml-sync:table-property
    protected $table = 'kandidat';
    // @enddbml-sync:table-property

    // @dbml-sync:fillable
    protected $fillable = [
        'nama',
		'nik',
		'email',
		'telepon',
		'tanggal_anonimisasi'
    ];
    // @enddbml-sync:fillable

    // @dbml-sync:casts
    protected $casts = [
        'tanggal_anonimisasi' => 'datetime'
    ];
    // @enddbml-sync:casts

    // @dbml-sync:relations
    public function lamarans()
    {
        return $this->hasMany(Lamaran::class, 'id_kandidat', 'id_kandidat');
    }

    // @enddbml-sync:relations
}