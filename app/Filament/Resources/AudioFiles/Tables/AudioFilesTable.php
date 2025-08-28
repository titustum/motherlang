<?php

namespace App\Filament\Resources\AudioFiles\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class AudioFilesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->label('ID')->sortable(),
                TextColumn::make('translation.translation')
                    ->label('Translation')
                    ->limit(30)
                    ->sortable()
                    ->searchable(),
                TextColumn::make('uploader.name')
                    ->label('Uploaded By')
                    ->sortable()
                    ->searchable()
                    ->default('N/A'),
                TextColumn::make('status')
                    ->label('Status')
                    ->sortable()
                    ->colors([
                        'warning' => fn ($state) => $state === 'pending',
                        'success' => fn ($state) => $state === 'approved',
                        'danger' => fn ($state) => $state === 'rejected',
                    ])
                    ->formatStateUsing(fn ($state) => ucfirst($state)),
                TextColumn::make('created_at')
                    ->label('Uploaded On')
                    ->dateTime('M d, Y')
                    ->sortable(),
            ])
            ->filters([
                SelectFilter::make('status')
                    ->options([
                        'pending' => 'Pending',
                        'approved' => 'Approved',
                        'rejected' => 'Rejected',
                    ]),
                SelectFilter::make('uploaded_by')
                    ->label('Uploaded By')
                    ->relationship('uploader', 'name'),
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
