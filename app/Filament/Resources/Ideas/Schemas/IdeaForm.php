<?php

namespace App\Filament\Resources\Ideas\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

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
                    ->required(),

                Textarea::make('descripcion')
                    ->label('Describe tu idea')
                    ->helperText('Describe a detalle en que consiste la idea del proyecto')
                    ->required()
                    ->columnSpanFull(),

                Select::make('estado')
                    ->required()
                    ->options([
                        'registrada' => 'Registrada',
                        'en revision' => 'En revision',
                        'aprobada' => 'Aprobada',
                        'rechazada' => 'Rechazada'
                    ])
                    ->default('registrada'),

                TextInput::make('autor')
                    ->required(),

                Select::make('categoria_id')
                    ->relationship('categoria', 'nombre')
                    ->required(),
            ]);
    }
}
