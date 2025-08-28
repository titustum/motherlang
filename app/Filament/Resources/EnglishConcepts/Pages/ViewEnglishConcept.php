<?php

namespace App\Filament\Resources\EnglishConcepts\Pages;

use App\Filament\Resources\EnglishConcepts\EnglishConceptResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewEnglishConcept extends ViewRecord
{
    protected static string $resource = EnglishConceptResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
