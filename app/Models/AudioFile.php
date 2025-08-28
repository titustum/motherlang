<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AudioFile extends Model
{
    protected $fillable = [
        'translation_id',
        'file_path',
        'uploaded_by',
        'status',
    ];

    public function translation()
    {
        return $this->belongsTo(Translation::class);
    }

    public function uploader()
    {
        return $this->belongsTo(User::class, 'uploaded_by');
    }
}
