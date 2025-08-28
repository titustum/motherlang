<?php

namespace App\Filament\Resources\NativeStories\Pages;

use App\Filament\Resources\NativeStories\NativeStoryResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListNativeStories extends ListRecords
{
    protected static string $resource = NativeStoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
