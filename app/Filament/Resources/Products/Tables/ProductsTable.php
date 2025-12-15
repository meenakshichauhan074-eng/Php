<?php

namespace App\Filament\Resources\Products\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\DeleteAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\BooleanColumn;

class ProductsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')
                ->label('Image')
                ->square()
                ->size(60),

                TextColumn::make('name')
                ->label('Product Name')
                ->searchable()
                ->sortable(),

                TextColumn::make('category')
                ->label('Category')
                ->searchable()
                ->sortable(),

                TextColumn::make('status')
                ->label('Status')
                ->FormatStateUsing(fn (bool $state): string => $state ? 'Active' : 'Inactive')
                ->badge()
                ->color(fn ($state) => $state ? 'Active' : 'Inactive'),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
