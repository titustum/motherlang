<?php

namespace App\Filament\Resources\ConceptCategories;

use App\Filament\Resources\ConceptCategories\Pages\CreateConceptCategory;
use App\Filament\Resources\ConceptCategories\Pages\EditConceptCategory;
use App\Filament\Resources\ConceptCategories\Pages\ListConceptCategories;
use App\Filament\Resources\ConceptCategories\Pages\ViewConceptCategory;
use App\Filament\Resources\ConceptCategories\Schemas\ConceptCategoryForm;
use App\Filament\Resources\ConceptCategories\Schemas\ConceptCategoryInfolist;
use App\Filament\Resources\ConceptCategories\Tables\ConceptCategoriesTable;
use App\Models\ConceptCategory;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ConceptCategoryResource extends Resource
{
    protected static ?string $model = ConceptCategory::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return ConceptCategoryForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return ConceptCategoryInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ConceptCategoriesTable::configure($table);
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
            'index' => ListConceptCategories::route('/'),
            'create' => CreateConceptCategory::route('/create'),
            'view' => ViewConceptCategory::route('/{record}'),
            'edit' => EditConceptCategory::route('/{record}/edit'),
        ];
    }
}
