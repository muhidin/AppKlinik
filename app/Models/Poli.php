<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;

class Poli extends Model
{
    use HasFactory;
    use SearchableTrait;

    protected $fillable = ['nama', 'biaya'];
    protected $searchable = [
        'columns' => [
            'polis.nama' => 1,
        ],
        'joins' => [
            'daftars' => ['polis.id','daftars.poli_id'],
        ],
    ];
}
