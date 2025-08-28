<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Translation extends Model
{
    protected $fillable = [
        'english_concept_id',
        'language_id',
        'translation',
        'description',
        'context_image_path',
    ];

    public function englishConcept()
    {
        return $this->belongsTo(EnglishConcept::class);
    }

    public function language()
    {
        return $this->belongsTo(Language::class);
    }

    public function audioFiles()
    {
        return $this->hasMany(AudioFile::class);
    }
}
