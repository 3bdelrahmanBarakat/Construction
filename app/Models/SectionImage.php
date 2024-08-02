<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SectionImage extends Model
{
    use HasFactory;
    protected $fillable = [
        'section_id',
        'section_detail_id',
        'image',
    ];

    public function section()
    {
        return $this->belongsTo(Section::class);
    }

}
