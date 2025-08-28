<?php
 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConceptCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'emoji',
        'name',
        'description',
    ];

    public function concepts()
    {
        return $this->hasMany(EnglishConcept::class, 'concept_category_id');
    }
}
