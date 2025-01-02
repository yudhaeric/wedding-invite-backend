<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InvitationsResource\Pages;
use App\Filament\Resources\InvitationsResource\RelationManagers;
use App\Models\Invitations;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class InvitationsResource extends Resource
{
    protected static ?string $model = Invitations::class;
    protected static ?string $navigationIcon = 'heroicon-o-book-open';

    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('customer_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('groom_name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('groom_nickname')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('father_of_groom')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('mother_of_groom')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('bride_name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('bride_nickname')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('father_of_bride')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('mother_of_bride')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('customer_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('groom_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('groom_nickname')
                    ->searchable(),
                Tables\Columns\TextColumn::make('father_of_groom')
                    ->searchable(),
                Tables\Columns\TextColumn::make('mother_of_groom')
                    ->searchable(),
                Tables\Columns\TextColumn::make('bride_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('bride_nickname')
                    ->searchable(),
                Tables\Columns\TextColumn::make('father_of_bride')
                    ->searchable(),
                Tables\Columns\TextColumn::make('mother_of_bride')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ManageInvitations::route('/'),
        ];
    }
}
