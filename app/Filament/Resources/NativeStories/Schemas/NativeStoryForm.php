<?php

namespace App\Filament\Resources\NativeStories\Schemas;

use Filament\Schemas\Schema; 
use Filament\Schemas\Components\Grid;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\RichEditor;
use Filament\Schemas\Components\Section;

class NativeStoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([ 
                Section::make('Native Story Information')
                    ->schema([
                        Grid::make(2)->schema([
                            TextInput::make('title')
                                ->label('Title')
                                ->required()
                                ->maxLength(255),

                            Select::make('language_id')
                                ->label('Language')
                                ->searchable()
                                ->preload()
                                ->relationship('language', 'name')
                                ->required(),

                            FileUpload::make('featured_image')
                                ->label('Featured Image')
                                ->image()
                                ->directory('native_stories/images')
                                ->maxSize(2048) // 2MB
                                ->columnSpanFull(),
                        ]),

                        RichEditor::make('content')
                            ->label('Story Description')
                            ->toolbarButtons([
                                'bold', 'italic', 'underline', 'bulletList', 'orderedList', 'link', 'blockquote', 'h2', 'h3'
                            ])
                            ->columnSpanFull(),
                    ])->columnSpanFull(),
            ]);
    }
}
