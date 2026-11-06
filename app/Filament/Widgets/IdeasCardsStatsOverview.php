<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Idea;
use App\Models\Categoria;

class IdeasCardsStatsOverview extends StatsOverviewWidget
{
    protected static ?int $sort = 1;

    protected function getStats(): array
    {
        $registradas = Idea::where('estado', 'registrada')->count();
        $revision = Idea::where('estado', 'en revisión')->count();
        $aprobadas = Idea::where('estado', 'aprobada')->count();
        $rechazadas = Idea::where('estado', 'rechazada')->count();

        $categorias = Categoria::withCount('ideas')->get();

        $detalleCategorias = '';

        foreach($categorias as $categoria){
            $detalleCategorias .=$categoria->nombre . ': ' . $categoria->ideas_count . ' | ';
        }

        return [
            Stat::make('Total de ideas', Idea::count())
                ->icon('heroicon-o-light-bulb')
                ->description("Registradas: $registradas | " . 
                                "En revisión: $revision | " . 
                                "Aprobadas: $aprobadas | " . 
                                "Rechazadas: $rechazadas |")
                ->color('primary'),
            Stat::make('Total de categorías', Categoria::count())->icon('heroicon-s-tag')
                ->description($detalleCategorias)
                ->color('primary'),
        ];
    }

    protected function getColumns(): int{
        return 1;
    }

}
