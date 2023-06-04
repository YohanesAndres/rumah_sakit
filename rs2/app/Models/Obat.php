<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'stok'];

    public function reseps()
    {
        return $this->hasMany(Resep::class);
    }
}
