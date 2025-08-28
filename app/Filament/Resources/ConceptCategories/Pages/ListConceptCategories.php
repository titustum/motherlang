<?php

namespace App\Filament\Resources\ConceptCategories\Pages;

use App\Filament\Resources\ConceptCategories\ConceptCategoryResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListConceptCategories extends ListRecords
{
    protected static string $resource = ConceptCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
