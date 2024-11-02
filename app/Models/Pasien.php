<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pasien extends Model
{
    use HasFactory;
    // Muhidin
    protected $guarded = [];

    public function daftar(): HasMany
    {
        return $this->hasMany(Daftar::class);
    }
}
