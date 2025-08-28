<?php

namespace App\Filament\Resources\EnglishConcepts\Pages;

use App\Filament\Resources\EnglishConcepts\EnglishConceptResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListEnglishConcepts extends ListRecords
{
    protected static string $resource = EnglishConceptResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
