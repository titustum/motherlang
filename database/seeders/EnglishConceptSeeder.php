<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\EnglishConcept;
use App\Models\ConceptCategory;

class EnglishConceptSeeder extends Seeder
{
    public function run(): void
    {
        // Fetch categories by name for easy reference
        $categories = ConceptCategory::pluck('id', 'name');

        $concepts = [
            [
                'text' => 'Hello',
                'concept_type' => 'word',
                'part_of_speech' => 'interjection',
                'description' => 'A common greeting.',
                'concept_category_id' => $categories['Greetings'] ?? null,
            ],
            [
                'text' => 'Goodbye',
                'concept_type' => 'word',
                'part_of_speech' => 'interjection',
                'description' => 'A common farewell.',
                'concept_category_id' => $categories['Greetings'] ?? null,
            ],
            [
                'text' => 'Eat',
                'concept_type' => 'word',
                'part_of_speech' => 'verb',
                'description' => 'To consume food.',
                'concept_category_id' => $categories['Food & Eating'] ?? null,
            ],
            [
                'text' => 'Bus',
                'concept_type' => 'word',
                'part_of_speech' => 'noun',
                'description' => 'A vehicle for public transport.',
                'concept_category_id' => $categories['Travel & Transport'] ?? null,
            ],
            [
                'text' => 'Family',
                'concept_type' => 'word',
                'part_of_speech' => 'noun',
                'description' => 'A group of related people.',
                'concept_category_id' => $categories['Family & Relationships'] ?? null,
            ],
            [
                'text' => 'Lion',
                'concept_type' => 'word',
                'part_of_speech' => 'noun',
                'description' => 'A large wild cat.',
                'concept_category_id' => $categories['Nature & Animals'] ?? null,
            ],
            [
                'text' => 'Happy',
                'concept_type' => 'word',
                'part_of_speech' => 'adjective',
                'description' => 'Feeling or showing pleasure.',
                'concept_category_id' => $categories['Emotions'] ?? null,
            ],
            [
                'text' => 'Run quickly',
                'concept_type' => 'phrase',
                'part_of_speech' => 'verb',
                'description' => 'To move fast by running.',
                'concept_category_id' => $categories['Travel & Transport'] ?? null,
            ],
            [
                'text' => 'Yesterday',
                'concept_type' => 'word',
                'part_of_speech' => 'adverb',
                'description' => 'The day before today.',
                'concept_category_id' => $categories['Time & Numbers'] ?? null,
            ],
            [
                'text' => 'Smile',
                'concept_type' => 'word',
                'part_of_speech' => 'verb',
                'description' => 'To make a happy facial expression.',
                'concept_category_id' => $categories['Emotions'] ?? null,
            ],
        ];

        foreach ($concepts as $concept) {
            EnglishConcept::updateOrCreate(
                ['text' => $concept['text']],
                $concept
            );
        }
    }
}
