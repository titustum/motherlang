<?php

namespace App\Filament\Resources\LanguageGroups\Pages;

use App\Filament\Resources\LanguageGroups\LanguageGroupResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListLanguageGroups extends ListRecords
{
    protected static string $resource = LanguageGroupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
