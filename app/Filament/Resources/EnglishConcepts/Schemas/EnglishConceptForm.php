<?php

namespace App\Filament\Resources\EnglishConcepts\Schemas;

use Filament\Schemas\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Schema;

class EnglishConceptForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Concept Details')
                    ->columns(2)
                    ->columnSpanFull()
                    ->schema([
                        TextInput::make('text')
                            ->label('Text')
                            ->required()
                            ->maxLength(255),

                        Select::make('concept_type')
                            ->label('Concept Type')
                            ->options([
                                'word' => 'Word',
                                'phrase' => 'Phrase',
                                'sentence' => 'Sentence',
                                'idiom' => 'Idiom',
                            ])
                            ->default('word')
                            ->required(),

                        Select::make('part_of_speech')
                            ->label('Part of Speech')
                            ->options([
                                'noun' => 'Noun',
                                'verb' => 'Verb',
                                'adjective' => 'Adjective',
                                'adverb' => 'Adverb',
                                'preposition' => 'Preposition',
                                'conjunction' => 'Conjunction',
                                'interjection' => 'Interjection',
                                // Add more as needed
                            ])
                            ->default('noun')
                            ->required(),

                        Select::make('concept_category_id')
                            ->label('Category')
                            ->relationship('category', 'name')
                            ->nullable(),
                        
                        FileUpload::make('image_path')
                            ->label('Image')
                            ->directory('concept-images')
                            ->image()
                            ->nullable(),
 
                        Textarea::make('description')
                            ->label('Description')
                            ->rows(4)
                            ->nullable(),
                    ])
            ]);
    }
}
