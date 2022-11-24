<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Domisili extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $table = 'domisili';

    protected $fillable =  [
        'nama_domisili', 'slug'
    ];

    protected $hidden = [];
}