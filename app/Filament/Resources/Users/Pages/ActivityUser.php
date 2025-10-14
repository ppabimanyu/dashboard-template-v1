<?php

namespace App\Filament\Resources\User\Pages;

use App\Filament\Resources\Users\UserResource;
use pxlrbt\FilamentActivityLog\Pages\ListActivities;

class ActivityUser extends ListActivities
{
    protected static string $resource = UserResource::class;

    public function canRestoreActivity(): bool
    {
        return false;
    }
}
