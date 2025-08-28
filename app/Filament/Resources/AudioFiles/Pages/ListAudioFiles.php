<?php

namespace App\Filament\Resources\AudioFiles\Pages;

use App\Filament\Resources\AudioFiles\AudioFileResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListAudioFiles extends ListRecords
{
    protected static string $resource = AudioFileResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
