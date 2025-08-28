<?php

namespace App\Filament\Resources\AudioFiles;

use App\Filament\Resources\AudioFiles\Pages\CreateAudioFile;
use App\Filament\Resources\AudioFiles\Pages\EditAudioFile;
use App\Filament\Resources\AudioFiles\Pages\ListAudioFiles;
use App\Filament\Resources\AudioFiles\Pages\ViewAudioFile;
use App\Filament\Resources\AudioFiles\Schemas\AudioFileForm;
use App\Filament\Resources\AudioFiles\Schemas\AudioFileInfolist;
use App\Filament\Resources\AudioFiles\Tables\AudioFilesTable;
use App\Models\AudioFile;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class AudioFileResource extends Resource
{
    protected static ?string $model = AudioFile::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'translation_id';

    public static function form(Schema $schema): Schema
    {
        return AudioFileForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return AudioFileInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AudioFilesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListAudioFiles::route('/'),
            'create' => CreateAudioFile::route('/create'),
            'view' => ViewAudioFile::route('/{record}'),
            'edit' => EditAudioFile::route('/{record}/edit'),
        ];
    }
}
