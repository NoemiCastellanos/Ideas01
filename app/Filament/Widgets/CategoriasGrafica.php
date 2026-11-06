<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\Categoria;

class CategoriasGrafica extends ChartWidget
{
    protected static ?int $sort = 3;
    protected ?string $heading = 'Categorias Grafica';
     protected int | string | array $columnSpan = 1;

    protected function getData(): array
    {
        $categorias = Categoria::withCount('ideas')->get();

        return [
            
            'datasets' => [
                [
                    'label' => 'Categorías',
                    'data' => $categorias->pluck('ideas_count')->toArray(),
                    'backgroundColor' => [
                        '#9594FF',
                        '#FBFF94',
                        '#94FFDF',
                        '#94FF96',
                        '#EF94FF',
                    ]
                ],
            ],
            'labels' => $categorias->pluck('nombre')->toArray()
            
        ];
    }

    protected function getOptions(): array
    {
        return[
            'animation' => [
                'animateRotate' => true,
                'duration' => 1500            
                ],
        ];
    }

    protected function getType(): string
    {
        return 'doughnut';
    }
}
