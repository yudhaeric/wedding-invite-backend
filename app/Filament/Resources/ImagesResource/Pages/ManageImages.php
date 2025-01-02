<?php

namespace App\Filament\Resources\ImagesResource\Pages;

use App\Filament\Resources\ImagesResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageImages extends ManageRecords
{
    protected static string $resource = ImagesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
