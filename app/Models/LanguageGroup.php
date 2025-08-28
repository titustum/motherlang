<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LanguageGroup extends Model
{
    protected $fillable = [
        'name',
        'symbol_image',
        'description',
    ];

    /**
     * Get the languages that belong to this group.
     */
    public function languages()
    {
        return $this->hasMany(Language::class);
    }
}
