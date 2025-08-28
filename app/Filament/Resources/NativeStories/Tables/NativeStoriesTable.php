<?php

namespace App\Filament\Resources\NativeStories\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn; 
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class NativeStoriesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->label('Title')
                    ->sortable()
                    ->searchable(),
                
                TextColumn::make('language.name')
                    ->label('Language')
                    ->sortable()
                    ->searchable(),
                
                ImageColumn::make('featured_image')
                    ->label('Featured Image')
                    ->square()
                    ->toggleable(),
                
                TextColumn::make('created_at')
                    ->label('Created')
                    ->dateTime('M d, Y')
                    ->sortable(),
                
                TextColumn::make('audioFiles.status')
                    ->label('Audio Status')
                    ->badge() // This enables the badge styling
                    ->color(fn (string $state): string => match ($state) {
                        'pending' => 'primary',
                        'approved' => 'success',
                        'rejected' => 'danger',
                        default => 'secondary', // Fallback color
                    })
                    ->formatStateUsing(fn (string $state): string => match ($state) {
                        'pending' => 'Pending',
                        'approved' => 'Approved',
                        'rejected' => 'Rejected',
                        default => ucfirst($state), // Fallback text formatting
                    }),
            ])
            ->filters([
                SelectFilter::make('language_id')
                    ->relationship('language', 'name')
                    ->label('Language'),
                
                SelectFilter::make('audioFiles.status')
                    ->label('Audio Status')
                    ->options([
                        'pending' => 'Pending',
                        'approved' => 'Approved',
                        'rejected' => 'Rejected',
                    ]),
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
