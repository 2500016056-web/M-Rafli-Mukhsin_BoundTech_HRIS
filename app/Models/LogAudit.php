<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogAudit extends Model
{
    use HasFactory;

    // @dbml-sync:table-property
    protected $table = 'log_audit';
    // @enddbml-sync:table-property

    // @dbml-sync:fillable
    protected $fillable = [
        'objek',
		'id_pelaku',
		'status_lama',
		'status_baru',
		'alasan',
		'jenis_perubahan'
    ];
    // @enddbml-sync:fillable

    // @dbml-sync:casts
    protected $casts = [
        
    ];
    // @enddbml-sync:casts

    // @dbml-sync:relations
    public function pengguna()
    {
        return $this->belongsTo(Pengguna::class, 'id_pelaku', 'id_pengguna');
    }

    // @enddbml-sync:relations
}