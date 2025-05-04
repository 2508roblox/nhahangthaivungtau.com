<?php

namespace App\Filament\Widgets;

use App\Models\Category;
use Filament\Widgets\BarChartWidget;

class FoodCategoryChart extends BarChartWidget
{
    protected static ?int $sort = 2;

    protected static ?string $heading = 'Số lượng món ăn theo danh mục';

    protected function getData(): array
    {
        // Lấy danh sách category và đếm số lượng món ăn (foods) cho từng category
        $categories = Category::withCount('foods')->get();

        return [
            'datasets' => [
                [
                    'label' => 'Số lượng món ăn',
                    'data' => $categories->pluck('foods_count')->toArray(),
                    'backgroundColor' => [
                        '#FF6384',
                        '#36A2EB',
                        '#FFCE56',
                        '#4BC0C0',
                        '#9966FF',
                        '#FF9F40',
                    ],
                ],
            ],
            'labels' => $categories->pluck('name')->toArray(),
        ];
    }
}
