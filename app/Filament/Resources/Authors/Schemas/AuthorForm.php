<?php

namespace App\Filament\Resources\Authors\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class AuthorForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make("Author Details")
                ->schema([
                    TextInput::make('name')
                    ->required(),
                FileUpload::make('image')
                    ->image(),
                ])->columnSpanFull()

            ]);
    }
}
