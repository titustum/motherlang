<?php

namespace App\Filament\Resources\AudioFiles\Pages;

use App\Filament\Resources\AudioFiles\AudioFileResource;
use Filament\Resources\Pages\CreateRecord;

class CreateAudioFile extends CreateRecord
{
    protected static string $resource = AudioFileResource::class;
}
