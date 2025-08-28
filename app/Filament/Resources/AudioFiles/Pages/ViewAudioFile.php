<?php

namespace App\Filament\Resources\AudioFiles\Pages;

use App\Filament\Resources\AudioFiles\AudioFileResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewAudioFile extends ViewRecord
{
    protected static string $resource = AudioFileResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
