<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class KategoriStage extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $table = 'kategori_stage';

    protected $fillable = ([
        'name', 'slug',
    ]);
    protected $hidden = [];

    public function kategori()
    {
        return $this->hasMany(kategori::class, 'kategori_stage_id', 'id');
    }
}