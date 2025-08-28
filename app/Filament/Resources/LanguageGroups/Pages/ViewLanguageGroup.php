<?php

namespace App\Filament\Resources\LanguageGroups\Pages;

use App\Filament\Resources\LanguageGroups\LanguageGroupResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewLanguageGroup extends ViewRecord
{
    protected static string $resource = LanguageGroupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
