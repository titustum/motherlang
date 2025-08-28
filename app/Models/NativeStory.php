<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NativeStory extends Model
{
    protected $fillable = [
        'language_id',
        'title',
        'content',
        'featured_image_path',
        'created_by',
    ];

    public function language()
    {
        return $this->belongsTo(Language::class);
    }

    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
