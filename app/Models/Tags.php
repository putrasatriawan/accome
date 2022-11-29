<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tags extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $fillable = ['name', 'slug'];

    public function talent()
    {
        return $this->belongsToMany(Talent::class);
    }

    public function tagsTalent()
    {
        return $this->hashMany(TagsTalent::class);
    }
}