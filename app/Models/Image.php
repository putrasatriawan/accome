<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $table = 'Image';

    protected $fillable = [
        'image',
        'talent_id',
    ];

    public function talent()
    {
        return $this->belongsToMany(Talent::class);
    }
}