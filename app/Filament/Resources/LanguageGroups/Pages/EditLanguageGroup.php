<?php

namespace App\Filament\Resources\LanguageGroups\Pages;

use App\Filament\Resources\LanguageGroups\LanguageGroupResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditLanguageGroup extends EditRecord
{
    protected static string $resource = LanguageGroupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
