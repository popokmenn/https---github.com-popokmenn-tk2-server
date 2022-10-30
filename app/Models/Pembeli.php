<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembeli extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'username', 'alamat', 'password', 'jenis_kelamin', 'tempat_lahir', 'tanggal_lahir'];
}
