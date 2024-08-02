<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SectionDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'section_id',
        'section_detail_id',
        'content_title_ar',
        'content_title_en',
        'content_description_ar',
        'content_description_en',
    ];

    public function getLocalizedTitleAttribute()
    {
        $locale = app()->getLocale();
        $titleField = "content_title_{$locale}";
        return $this->$titleField;
    }

    public function getLocalizedDescriptionAttribute()
    {
        $locale = app()->getLocale();
        $descriptionField = "content_description_{$locale}";
        return $this->$descriptionField;
    }

    public function section()
    {
        return $this->belongsTo(Section::class);
    }

    public function images()
    {
        return $this->hasMany(SectionImage::class,'section_detail_id');
    }
}
