<?php

namespace App\Filament\Resources\EnglishConcepts\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Filters\SelectFilter;

class EnglishConceptsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('text')
                    ->label('Concept')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('concept_type')
                    ->label('Type')
                    ->badge()
                    ->sortable(),

                TextColumn::make('part_of_speech')
                    ->label('Part of Speech')
                    ->sortable()
                    ->badge(),

                TextColumn::make('category.name')
                    ->label('Category')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('category.emoji')
                    ->label('📌')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                ImageColumn::make('image_path')
                    ->label('Image')
                    ->circular() 
                    ->toggleable(),

                TextColumn::make('created_at')
                    ->label('Created')
                    ->since()
                    ->sortable(),
            ])
            ->filters([
                SelectFilter::make('concept_type')
                    ->label('Type')
                    ->options([
                        'word' => 'Word',
                        'phrase' => 'Phrase',
                        'sentence' => 'Sentence',
                        'idiom' => 'Idiom',
                    ]),

                SelectFilter::make('part_of_speech')
                    ->label('Part of Speech')
                    ->options([
                        'noun' => 'Noun',
                        'verb' => 'Verb',
                        'adjective' => 'Adjective',
                        'adverb' => 'Adverb',
                        'phrase' => 'Phrase',
                        'sentence' => 'Sentence',
                    ]),

                SelectFilter::make('category_id')
                    ->label('Category')
                    ->relationship('category', 'name'),
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
