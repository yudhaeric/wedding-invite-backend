<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AttendanceConfirmationsResource\Pages;
use App\Filament\Resources\AttendanceConfirmationsResource\RelationManagers;
use App\Models\Rsvps;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AttendanceConfirmationsResource extends Resource
{
    protected static ?string $model = Rsvps::class;
    protected static ?string $slug = 'attendances';
    protected static ?string $modelLabel = 'Attendance';
    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-check';

    protected static ?int $navigationSort = 5;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageAttendanceConfirmations::route('/'),
        ];
    }
}
