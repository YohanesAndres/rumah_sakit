<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'kategori_id', 'alamat', 'no_telp'];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
}
