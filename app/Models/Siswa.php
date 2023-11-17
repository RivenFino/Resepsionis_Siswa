<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    use HasFactory;

    protected $table = 'siswa';
    protected $PrimaryKey = 'id';
    public $incrementing = true;

    protected $fillable = [
        'nis',
        'nama',
        'jurusan',
        'angkatan',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
