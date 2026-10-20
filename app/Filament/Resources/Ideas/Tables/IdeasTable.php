<?php

namespace App\Filament\Resources\Ideas\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Filament\Actions\DeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Tables\Filters\TrashedFilter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class IdeasTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')
                    ->label('#'),
                TextColumn::make('titulo')
                    ->label('Idea')
                    ->searchable(),
                TextColumn::make('descripcion')
                    ->label('Descripción'),
                TextColumn::make('estado')
                    ->label('Estado')
                    ->searchable(),
                TextColumn::make('autor')
                    ->label('Autor')
                    ->searchable(),
                TextColumn::make('categoria.nombre')
                    ->label('Categoria')
                    ->searchable(),
                TextColumn::make('created_at')
                    ->label('Creada el')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->label('Actalizada el')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])

            ->filters([
                SelectFilter::make('estado')
                    ->label('Estado')
                    ->options([
                        'registrada' => 'Registrada',
                        'en revisión' => 'En revisión',
                        'aprobada' => 'Aprobada',
                        'rechazada' => 'Rechazada'
                    ]),
                TrashedFilter::make(),
            ])

            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
                DeleteAction::make(),
                RestoreAction::make(),
                ForceDeleteAction::make(),
            ])

            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
