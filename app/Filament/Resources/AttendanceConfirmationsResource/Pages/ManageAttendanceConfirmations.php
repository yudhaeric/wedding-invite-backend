<?php

namespace App\Filament\Resources\AttendanceConfirmationsResource\Pages;

use App\Filament\Resources\AttendanceConfirmationsResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageAttendanceConfirmations extends ManageRecords
{
    protected static string $resource = AttendanceConfirmationsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
