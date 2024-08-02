<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;
    protected $fillable = [
        'section_title_en',
        'section_title_ar',
        'section_description_ar',
        'section_description_en',
        'is_visable',
    ];

    public function getLocalizedTitleAttribute()
    {
        $locale = app()->getLocale();
        $titleField = "section_title_{$locale}";
        return $this->$titleField;
    }

    public function getLocalizedDescriptionAttribute()
    {
        $locale = app()->getLocale();
        $descriptionField = "section_description_{$locale}";
        return $this->$descriptionField;
    }

    public function images()
    {
        return $this->hasMany(SectionImage::class);
    }

    public function details()
    {
        return $this->hasMany(SectionDetail::class);
    }

}
