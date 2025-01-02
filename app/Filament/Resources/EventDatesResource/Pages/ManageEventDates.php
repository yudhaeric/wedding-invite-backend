<?php

namespace App\Filament\Resources\EventDatesResource\Pages;

use App\Filament\Resources\EventDatesResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageEventDates extends ManageRecords
{
    protected static string $resource = EventDatesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
