<?php

namespace App\Filament\Resources\NativeStories;

use App\Filament\Resources\NativeStories\Pages\CreateNativeStory;
use App\Filament\Resources\NativeStories\Pages\EditNativeStory;
use App\Filament\Resources\NativeStories\Pages\ListNativeStories;
use App\Filament\Resources\NativeStories\Pages\ViewNativeStory;
use App\Filament\Resources\NativeStories\Schemas\NativeStoryForm;
use App\Filament\Resources\NativeStories\Schemas\NativeStoryInfolist;
use App\Filament\Resources\NativeStories\Tables\NativeStoriesTable;
use App\Models\NativeStory;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class NativeStoryResource extends Resource
{
    protected static ?string $model = NativeStory::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Schema $schema): Schema
    {
        return NativeStoryForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return NativeStoryInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return NativeStoriesTable::configure($table);
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
            'index' => ListNativeStories::route('/'),
            'create' => CreateNativeStory::route('/create'),
            'view' => ViewNativeStory::route('/{record}'),
            'edit' => EditNativeStory::route('/{record}/edit'),
        ];
    }
}
