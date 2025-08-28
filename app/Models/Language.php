<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $fillable = [
        'name',
        'slug',
    ];

    protected $casts = [
        'counties' => 'array',
    ];


    public function translations()
    {
        return $this->hasMany(Translation::class);
    }

    public function nativeStories()
    {
        return $this->hasMany(NativeStory::class);
    }

    
    public function languageGroup()
    {
        return $this->belongsTo(LanguageGroup::class);
    }

    // use slug in route bindings
    public function getRouteKeyName(): string
    {
        return 'slug';
    }


}
