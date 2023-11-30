<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Keperluan;
use Illuminate\Database\Eloquent\Model;

class Staf extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    use HasFactory;

    protected $table = 'staf';
    protected $primaryKey = 'id';

    protected $fillable = [
        'nip',
        'nama',
        'no_telepon',
        'password',
    ];

    public function keperluan() {
        return $this->hasMany(Keperluan::class, 'nip', 'nip');
    }

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
