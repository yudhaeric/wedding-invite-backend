<?php

namespace App\Filament\Resources\MusicsResource\Pages;

use App\Filament\Resources\MusicsResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageMusics extends ManageRecords
{
    protected static string $resource = MusicsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
