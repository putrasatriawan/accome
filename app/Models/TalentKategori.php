<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PHPUnit\Framework\MockObject\ReturnValueNotConfiguredException;

class TalentKategori extends Model
{
    use HasFactory;

    protected $table = 'talent_kategories';

    public function talent()
    {
        return $this->belongsTo(Talent::class);
    }
}