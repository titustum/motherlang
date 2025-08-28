<?php

namespace App\Filament\Resources\ConceptCategories\Schemas;

use Filament\Schemas\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;   
use Filament\Schemas\Schema;

class ConceptCategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Category Details')
                    ->columns(2)
                    ->columnSpan('full')
                    ->schema([
                        TextInput::make('name')
                            ->required()
                            ->maxLength(255),
                        
                        TextInput::make('emoji')
                            ->label('Emoji/Icon')
                            ->maxLength(5),
                        
                        Textarea::make('description')
                            ->columnSpan('full')
                            ->label('Description') 
                            ->rows(3),
                    ]),
            ]);
    }
}
