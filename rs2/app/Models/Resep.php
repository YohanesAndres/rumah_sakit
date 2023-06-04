<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resep extends Model
{
    use HasFactory;

    protected $fillable = ['pengobatan_id', 'obat_id'];

    public function pengobatan()
    {
        return $this->belongsTo(Pengobatan::class);
    }

    public function obat()
    {
        return $this->belongsTo(Obat::class);
    }
}
