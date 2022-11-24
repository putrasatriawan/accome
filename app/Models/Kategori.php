<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use PHPUnit\Framework\MockObject\Stub\ReturnReference;

class Kategori extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $table = 'kategori';

    protected $fillable =  [
        'name',
        // 'kategori_stage_id',
        'slug',

        'image',

        'is_active',

        'desc'
    ];

    protected $hidden = [];

    public function talent()
    {
        return $this->belongsToMany(Talent::class, 'talent_kategories');
    }
    public function kategoristage()
    {
        return $this->belongsTo(Kategoristage::class, 'kategori_stage_id', 'id');;
    }
    public function talentkategori()
    {
        return $this->hasMany(Talent::class);
    }
}