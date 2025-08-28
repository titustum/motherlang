<?php

namespace App\Filament\Resources\EnglishConcepts;

use App\Filament\Resources\EnglishConcepts\Pages\CreateEnglishConcept;
use App\Filament\Resources\EnglishConcepts\Pages\EditEnglishConcept;
use App\Filament\Resources\EnglishConcepts\Pages\ListEnglishConcepts;
use App\Filament\Resources\EnglishConcepts\Pages\ViewEnglishConcept;
use App\Filament\Resources\EnglishConcepts\Schemas\EnglishConceptForm;
use App\Filament\Resources\EnglishConcepts\Schemas\EnglishConceptInfolist;
use App\Filament\Resources\EnglishConcepts\Tables\EnglishConceptsTable;
use App\Models\EnglishConcept;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class EnglishConceptResource extends Resource
{
    protected static ?string $model = EnglishConcept::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'text';

    public static function form(Schema $schema): Schema
    {
        return EnglishConceptForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return EnglishConceptInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return EnglishConceptsTable::configure($table);
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
            'index' => ListEnglishConcepts::route('/'),
            'create' => CreateEnglishConcept::route('/create'),
            'view' => ViewEnglishConcept::route('/{record}'),
            'edit' => EditEnglishConcept::route('/{record}/edit'),
        ];
    }
}
