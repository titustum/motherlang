<?php

namespace App\Filament\Resources\EnglishConcepts\Pages;

use App\Filament\Resources\EnglishConcepts\EnglishConceptResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditEnglishConcept extends EditRecord
{
    protected static string $resource = EnglishConceptResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
