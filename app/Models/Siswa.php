<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    use HasFactory;

    protected $table = 'siswa';
    protected $PrimaryKey = 'nis';
    public $incrementing = false;

}
