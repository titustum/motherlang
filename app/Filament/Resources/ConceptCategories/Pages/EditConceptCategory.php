<?php

namespace App\Filament\Resources\ConceptCategories\Pages;

use App\Filament\Resources\ConceptCategories\ConceptCategoryResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditConceptCategory extends EditRecord
{
    protected static string $resource = ConceptCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
