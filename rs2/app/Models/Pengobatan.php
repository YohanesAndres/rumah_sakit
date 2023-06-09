<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengobatan extends Model
{
    use HasFactory;

    protected $fillable = ['pasien_id', 'dokter_id', 'keterangan'];

    public function pasien()
    {
        return $this->belongsTo(Pasien::class);
    }

    public function dokter()
    {
        return $this->belongsTo(Dokter::class);
    }

    public function reseps()
    {
        return $this->hasMany(Resep::class);
    }
}
