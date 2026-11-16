<?php

namespace App\Filament\Resources\Categories\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class CategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make("Category Details")
                    ->schema([
                        TextInput::make('title')
                            ->required(),
                        TextInput::make('slug')
                            ->required(),
                        TextInput::make('meta_title')
                            ->required(),
                        Textarea::make('meta_description')
                            ->default(null)
                            ->columnSpanFull(),

                    ])->columnSpanFull()

            ]);
    }
}
