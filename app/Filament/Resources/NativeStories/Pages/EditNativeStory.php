<?php

namespace App\Filament\Resources\NativeStories\Pages;

use App\Filament\Resources\NativeStories\NativeStoryResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditNativeStory extends EditRecord
{
    protected static string $resource = NativeStoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
