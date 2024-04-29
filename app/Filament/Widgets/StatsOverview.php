<?php

namespace App\Filament\Widgets;

use App\Models\Author;
use App\Models\Book;
use App\Models\Genre;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Books', Book::count()),
            Stat::make('Total Authors', Author::count()),
            Stat::make('Total Genres', Genre::count()),
            Stat::make('Total Members', User::count()),
        ];
    }
}
