<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;

    protected $fillable = ['nik', 'nama', 'tgl_lahir', 'jenis_kelamin', 'alamat'];

}
