<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EnglishConcept extends Model
{
    protected $fillable = [
        'concept_text',
        'concept_type',
        'part_of_speech',
        'description',
        'image_path',
    ];

    public function translations()
    {
        return $this->hasMany(Translation::class);
    }


    public function category()
    {
        return $this->belongsTo(ConceptCategory::class, 'concept_category_id');
    }

}
