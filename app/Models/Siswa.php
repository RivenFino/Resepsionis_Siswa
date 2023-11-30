<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Keperluan;

class Siswa extends Model
{
    use HasFactory;

    protected $table = 'siswa';
    protected $primaryKey = 'id';
    public $incrementing = true;


    protected $fillable = [
        'id',
        'nis',
        'nama',
        'jurusan',
        'angkatan',
    ];

    public function keperluan() {
        return $this->hasMany(Keperluan::class, 'nis', 'nis');
    }
}
