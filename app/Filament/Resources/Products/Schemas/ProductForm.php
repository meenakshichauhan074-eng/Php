<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Toggle;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                ->required()
                ->maxLength(255),

                TextInput::make('price')
                ->numeric()
                ->required(),

                TextInput::make('category')
                ->maxLength('120'),

                Textarea::make('description')
                ->rows(3),

                FileUpload::make('image')
                ->disk('public')
                ->image()
                ->imageEditor()
                ->directory('products')
                ->preserveFilenames()
                ->visibility('public')
                ->required(false)
                ->columnSpanFull(),

                Toggle::make('status')
                ->label('Active')
                ->default(true),
            ]);
    }
}
