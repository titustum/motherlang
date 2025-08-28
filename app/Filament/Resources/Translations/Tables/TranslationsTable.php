<?php

namespace App\Filament\Resources\Translations\Tables;

use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Actions\ViewAction;
use Filament\Actions\EditAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;

class TranslationsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('englishConcept.text')
                    ->label('English')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('language.name')
                    ->label('Language')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('translation')
                    ->label('Translation')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('description')
                    ->label('Notes')
                    ->limit(50)
                    ->wrap()
                    ->toggleable(),

                ImageColumn::make('context_image_path')
                    ->label('Image')
                    ->toggleable(),

                TextColumn::make('updated_at')
                    ->label('Updated')
                    ->dateTime('M d, Y')
                    ->sortable(),
            ])
            ->filters([
                // Add filters later
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
