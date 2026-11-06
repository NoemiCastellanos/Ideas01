<?php

namespace App\Filament\Resources\Ideas\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Utilities\Get;

class IdeaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('titulo')
                    ->label ('Título de la idea')
                    ->helperText('Escribre un título que sea ilustrativo y breve')
                    ->placeholder('Ej. Aplicación de comida')
                    ->unique()
                    ->validationMessages([
                          'unique'=> 'Ya existe una idea con este título',
                    ])
                    ->required(),

                Textarea::make('descripcion')
                    ->label('Describe tu idea')
                    ->helperText('Describe a detalle en que consiste la idea del proyecto')
                    ->required()
                    ->columnSpanFull(),

                TextInput::make('autor')
                    ->required(),

                Select::make('categoria_id')
                    ->relationship('categoria', 'nombre')
                    ->required(),

                Select::make('estado')
                    ->required()
                    ->options([
                        'registrada' => 'Registrada',
                        'en revision' => 'En revision',
                        'aprobada' => 'Aprobada',
                        'rechazada' => 'Rechazada'
                    ])
                    ->default('registrada')
                    ->hiddenOn('create')
                    ->disabled(fn()=> auth()->user()->rol !== 'admin' || auth()->user()->rol !== 'coordinador')
                    ->live(),
                Textarea::make('Observacion')
                    ->label('Motivo de rechazo')
                    ->visible(fn(Get $get) => 
                        $get('estado') === 'rechazada'
                    )
                    ->maxLength(200)
                    ->required(),
            ]);
    }
}
