<?php

namespace App\Filament\Widgets;

use App\Models\Reservation;
use Filament\Widgets\TableWidget as BaseWidget;
use Filament\Tables;
use Filament\Tables\Table;

class RecentReservations extends BaseWidget
{
    protected static ?int $sort = 3;
    protected static ?string $heading = 'Lịch sử đặt bàn gần đây';
    protected int | string | array $columnSpan = 'full';

    public function table(Table $table): Table
    {
        return $table
            ->query(
                Reservation::query()->latest()->limit(10)
            )
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Họ tên')
                    ->searchable(),
                Tables\Columns\TextColumn::make('phone')
                    ->label('SĐT'),
                Tables\Columns\TextColumn::make('number_of_people')
                    ->label('Số người'),
                Tables\Columns\TextColumn::make('content')
                    ->label('Nội dung')
                    ->limit(30),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Thời gian')
                    ->dateTime('d/m/Y H:i'),
            ]);
    }
}
