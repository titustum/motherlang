<?php

namespace App\Filament\Resources\LanguageGroups;

use App\Filament\Resources\LanguageGroups\Pages\CreateLanguageGroup;
use App\Filament\Resources\LanguageGroups\Pages\EditLanguageGroup;
use App\Filament\Resources\LanguageGroups\Pages\ListLanguageGroups;
use App\Filament\Resources\LanguageGroups\Pages\ViewLanguageGroup;
use App\Filament\Resources\LanguageGroups\Schemas\LanguageGroupForm;
use App\Filament\Resources\LanguageGroups\Schemas\LanguageGroupInfolist;
use App\Filament\Resources\LanguageGroups\Tables\LanguageGroupsTable;
use App\Models\LanguageGroup;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class LanguageGroupResource extends Resource
{
    protected static ?string $model = LanguageGroup::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return LanguageGroupForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return LanguageGroupInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return LanguageGroupsTable::configure($table);
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
            'index' => ListLanguageGroups::route('/'),
            'create' => CreateLanguageGroup::route('/create'),
            'view' => ViewLanguageGroup::route('/{record}'),
            'edit' => EditLanguageGroup::route('/{record}/edit'),
        ];
    }
}
