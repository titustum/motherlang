<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\EnglishConcept;

class EnglishConceptSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Sample words, phrases, idioms, sentences
        $concepts = [
            ['text' => 'lion', 'concept_type' => 'word', 'part_of_speech' => 'noun', 'description' => 'A large wild cat'],
            ['text' => 'run', 'concept_type' => 'word', 'part_of_speech' => 'verb', 'description' => 'To move swiftly on foot'],
            ['text' => 'beautiful', 'concept_type' => 'word', 'part_of_speech' => 'adjective', 'description' => 'Pleasing the senses or mind'],
            ['text' => 'quickly', 'concept_type' => 'word', 'part_of_speech' => 'adverb', 'description' => 'At a fast speed'],
            ['text' => 'break a leg', 'concept_type' => 'idiom', 'part_of_speech' => 'phrase', 'description' => 'Good luck!'],
            ['text' => 'once in a blue moon', 'concept_type' => 'idiom', 'part_of_speech' => 'phrase', 'description' => 'Very rarely'],
            ['text' => 'a stitch in time saves nine', 'concept_type' => 'idiom', 'part_of_speech' => 'phrase', 'description' => 'Fix problems early to prevent bigger ones'],
            ['text' => 'The quick brown fox jumps over the lazy dog.', 'concept_type' => 'sentence', 'part_of_speech' => 'sentence', 'description' => 'A pangram containing every letter of the English alphabet'],
            ['text' => 'Break the ice', 'concept_type' => 'idiom', 'part_of_speech' => 'phrase', 'description' => 'To initiate social interactions'],
            ['text' => 'to be or not to be', 'concept_type' => 'sentence', 'part_of_speech' => 'sentence', 'description' => 'Famous line from Shakespeare'],
            ['text' => 'happy', 'concept_type' => 'word', 'part_of_speech' => 'adjective', 'description' => 'Feeling or showing pleasure or contentment'],
            ['text' => 'eat', 'concept_type' => 'word', 'part_of_speech' => 'verb', 'description' => 'Put food into the mouth and chew and swallow it'],
            ['text' => 'brightly', 'concept_type' => 'word', 'part_of_speech' => 'adverb', 'description' => 'In a way that shines with much light'],
            ['text' => 'call it a day', 'concept_type' => 'idiom', 'part_of_speech' => 'phrase', 'description' => 'Stop working on something'],
            ['text' => 'kick the bucket', 'concept_type' => 'idiom', 'part_of_speech' => 'phrase', 'description' => 'To die'],
            ['text' => 'under the weather', 'concept_type' => 'idiom', 'part_of_speech' => 'phrase', 'description' => 'Feeling ill'],
            ['text' => 'She sells seashells by the seashore.', 'concept_type' => 'sentence', 'part_of_speech' => 'sentence', 'description' => 'A tongue twister'],
            ['text' => 'fast', 'concept_type' => 'word', 'part_of_speech' => 'adjective', 'description' => 'Moving or capable of moving at high speed'],
            ['text' => 'jump', 'concept_type' => 'word', 'part_of_speech' => 'verb', 'description' => 'Push oneself off a surface into the air by using the muscles in one’s legs and feet'],
            ['text' => 'blue', 'concept_type' => 'word', 'part_of_speech' => 'adjective', 'description' => 'Of a color intermediate between green and violet'],
        ];


        // Auto generate filler data for demonstration to reach 100+
        $partsOfSpeech = ['noun', 'verb', 'adjective', 'adverb', 'phrase', 'sentence', 'idiom'];
        $conceptTypes = ['word', 'phrase', 'sentence', 'idiom'];

        // Start from 11 since first 10 are hardcoded above
        for ($i = 11; $i <= 110; $i++) {
            $concepts[] = [
                'text' => "Sample concept $i",
                'concept_type' => $conceptTypes[array_rand($conceptTypes)],
                'part_of_speech' => $partsOfSpeech[array_rand($partsOfSpeech)],
                'description' => "Description for sample concept $i",
                'image_path' => null,
            ];
        }

        foreach ($concepts as $concept) {
            EnglishConcept::updateOrCreate(
                ['text' => $concept['text']],
                $concept
            );
        }
    }
}
