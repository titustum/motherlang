<?php

namespace App\Filament\Resources\NativeStories\Pages;

use App\Filament\Resources\NativeStories\NativeStoryResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewNativeStory extends ViewRecord
{
    protected static string $resource = NativeStoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
