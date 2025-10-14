<?php

namespace App\Filament\Resources\Users\Widgets;

use App\Models\User;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class UserOverview extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Verified Users', User::whereNotNull('email_verified_at')->count('id'))
                ->description('Users with verified email addresses'),
            Stat::make('Unverified Users', User::whereNull('email_verified_at')->count('id'))
                ->description('Users without verified email addresses'),
        ];
    }

    public function getColumns(): int|array
    {
        return 2;
    }
}
