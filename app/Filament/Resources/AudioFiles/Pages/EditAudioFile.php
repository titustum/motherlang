<?php

namespace App\Filament\Resources\AudioFiles\Pages;

use App\Filament\Resources\AudioFiles\AudioFileResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditAudioFile extends EditRecord
{
    protected static string $resource = AudioFileResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
