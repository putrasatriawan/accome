<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use PHPUnit\Framework\MockObject\ReturnValueNotConfiguredException;

class Talent extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $table = 'talent';

    protected $fillable = ([
        'name', 'slug', 'body', 'rate', 'domisili_id', 'kategori_id', 'user_id', 'picture', 'cv', 'is_active', 'views'
    ]);

    protected $hidden = [];

    // public function kategori()
    // {
    //     return $this->belongsTO(TalentKategori::class, 'talent_kategories', 'talent_id', 'kategori_id');
    // }
    public function kategori()
    {
        return $this->belongsTo(kategori::class, 'kategori_id', 'id');
    }
    public function users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function domisili()
    {
        return $this->belongsTo(domisili::class, 'domisili_id', 'id');
    }
    // public function talenkategori()
    // {
    //     return $this->hasMany(TalentKategori::class);
    // }

    public function tags()
    {
        return $this->belongsToMany(Tags::class);
    }
}