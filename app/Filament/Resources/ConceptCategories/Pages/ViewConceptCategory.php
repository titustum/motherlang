<?php

namespace App\Filament\Resources\ConceptCategories\Pages;

use App\Filament\Resources\ConceptCategories\ConceptCategoryResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewConceptCategory extends ViewRecord
{
    protected static string $resource = ConceptCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
