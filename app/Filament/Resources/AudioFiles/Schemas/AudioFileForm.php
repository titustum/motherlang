<?php

namespace App\Filament\Resources\AudioFiles\Schemas;

use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Grid;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;

class AudioFileForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Audio File Details')
                    ->columnSpanFull()
                    ->schema([ 
                            Select::make('translation_id')
                                ->label('Translation')
                                ->relationship('translation', 'translation') // adjust if needed
                                ->searchable()
                                ->required(),

                            Select::make('status')
                                ->label('Status')
                                ->options([
                                    'pending' => 'Pending',
                                    'approved' => 'Approved',
                                    'rejected' => 'Rejected',
                                ])
                                ->default('pending')
                                ->required(),

                            FileUpload::make('file_path')
                                ->label('Audio File')
                                ->directory('audio_files')
                                ->acceptedFileTypes(['audio/mpeg', 'audio/wav', 'audio/mp3'])
                                ->maxSize(5120) // 5MB
                                ->required()
                                ->columnSpanFull(), 
                    ]),
            ]);
    }
}
