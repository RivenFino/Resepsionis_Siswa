<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Siswa;

class Keperluan extends Model
{
    use HasFactory;

    protected $table = 'keperluan';
    protected $primaryKey = 'id';
    public $incrementing = true;

    protected $fillable = [
        'kode_keperluan',
        'id_siswa',
        'keperluan',
        'keterangan',
        'tanggal',
        'waktu',
        'status',
    ];

    public function siswa() {   
        return $this->belongsTo(Siswa::class, 'id_siswa', 'id');
    }
    
    
}
