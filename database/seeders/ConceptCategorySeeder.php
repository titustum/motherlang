<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\ConceptCategory;

class ConceptCategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            ['name' => 'Greetings',         'emoji' => '👋', 'description' => 'Ways to say hello, goodbye, and check in.'],
            ['name' => 'Food & Eating',     'emoji' => '🍽️', 'description' => 'Meals, ingredients, cooking.'],
            ['name' => 'Travel & Transport','emoji' => '🚌', 'description' => 'Directions, movement, transport.'],
            ['name' => 'Family & Relationships', 'emoji' => '👨‍👩‍👧‍👦', 'description' => 'Family and social relations.'],
            ['name' => 'Nature & Animals',  'emoji' => '🌳', 'description' => 'Plants, animals, and nature.'],
            ['name' => 'Body & Health',     'emoji' => '🩺', 'description' => 'Body parts and health-related terms.'],
            ['name' => 'Time & Numbers',    'emoji' => '⏰', 'description' => 'Time, dates, and numerals.'],
            ['name' => 'Emotions',          'emoji' => '😊', 'description' => 'Feelings and emotional states.'],
            ['name' => 'Sports & Games',    'emoji' => '⚽', 'description' => 'Words related to sports and play.'],
        ];

        foreach ($categories as $category) {
            ConceptCategory::updateOrCreate(['name' => $category['name']], $category);
        }
    }
}

