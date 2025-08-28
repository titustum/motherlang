<?php

namespace App\Filament\Resources\Translations\Schemas;
 
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class TranslationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->schema([
            Section::make('Translation Form Details')
                    ->schema([
                        Select::make('english_concept_id')
                            ->label('English Concept')
                            ->relationship('englishConcept', 'text')
                            ->searchable()
                            ->preload()
                            ->required(),

                        Select::make('language_id')
                            ->label('Language')
                            ->relationship('language', 'name')
                            ->searchable()
                            ->required()
                            ->preload(), 
                        TextInput::make('translation')
                            ->label('Translation')
                            ->required()
                            ->maxLength(255),

                        Textarea::make('description')
                            ->label('Description / Usage')
                            ->rows(3)
                            ->maxLength(1000)
                            ->nullable(),

                        FileUpload::make('context_image_path')
                            ->label('Context Image')
                            ->image()
                            ->directory('translations/images')
                            ->nullable()
                            ->columnSpanFull()
                            ->imageEditor(), 

                ])
                ->columns(2)
                ->columnSpanFull()
        ]);
    }
}
