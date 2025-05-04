<?php

namespace App\Filament\Widgets;

use App\Models\SubCategory;
use Filament\Widgets\LineChartWidget;

class FoodSubCategoryChart extends LineChartWidget
{
    protected static ?int $sort = 3;

    protected static ?string $heading = 'Số lượng món ăn theo danh mục con';

    protected function getData(): array
    {
        // Lấy danh sách sub category và đếm số lượng món ăn (foods) cho từng sub category
        $subCategories = SubCategory::withCount('foods')->get();

        return [
            'datasets' => [
                [
                    'label' => 'Số lượng món ăn',
                    'data' => $subCategories->pluck('foods_count')->toArray(),
                    'borderColor' => '#FF6384',
                    'fill' => false,
                ],
            ],
            'labels' => $subCategories->pluck('name')->toArray(),
        ];
    }
}
