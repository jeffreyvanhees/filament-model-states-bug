<?php

namespace App\Filament\Resources\RestaurantResource\RelationManagers;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Maartenpaauw\Filament\ModelStates\StateColumn;
use Maartenpaauw\Filament\ModelStates\StateToggleButtons;

class RegionsRelationManager extends RelationManager
{
    protected static string $relationship = 'regions';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                StateToggleButtons::make('delivery_status')
                    ->inline(),

                TextInput::make('delivery_costs')
                    ->numeric(),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('name')
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                StateColumn::make('delivery_status'),
                Tables\Columns\TextColumn::make('delivery_costs'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\AttachAction::make()
                    ->multiple()
                    ->attachAnother(false)
                    ->preloadRecordSelect(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([

            ]);
    }
}
