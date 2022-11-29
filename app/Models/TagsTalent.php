<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TagsTalent extends Model
{
    use HasFactory;
    protected $table = "tags_talent";
    protected $fillable = ['talent_id', 'tags_id'];

    public function tags()
    {
        return $this->belongsTo(Tags::class, 'tags_id');
    }

    public function talent()
    {
        return $this->belongsTo(Talent::class, 'talent_id', 'id');
    }
}