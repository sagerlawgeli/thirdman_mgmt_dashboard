<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TrackerDeviceResource\Pages;
use App\Filament\Resources\TrackerDeviceResource\RelationManagers;
use App\Models\TrackerDevice;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TrackerDeviceResource extends Resource
{
    protected static ?string $model = TrackerDevice::class;

    protected static ?string $navigationIcon = 'heroicon-m-device-phone-mobile';

    protected static ?string $navigationGroup = 'Products';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('size')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('brand')
                    ->required()
                    ->maxLength(255),
                Forms\Components\FileUpload::make('image')
                    ->image()
                    ->required(),
                Forms\Components\TextInput::make('brand_specific_id')
                    ->required()
                    ->maxLength(255),
                Forms\Components\DatePicker::make('purchase_date')
                    ->required(),
                Forms\Components\Toggle::make('renewable')
                    ->required(),
                Forms\Components\DatePicker::make('renewal_date'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('size')
                    ->searchable(),
                Tables\Columns\TextColumn::make('brand')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('brand_specific_id')
                    ->searchable(),
                Tables\Columns\TextColumn::make('purchase_date')
                    ->date()
                    ->sortable(),
                Tables\Columns\IconColumn::make('renewable')
                    ->boolean(),
                Tables\Columns\TextColumn::make('renewal_date')
                    ->date()
                    ->sortable(),
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
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTrackerDevices::route('/'),
            'create' => Pages\CreateTrackerDevice::route('/create'),
            'edit' => Pages\EditTrackerDevice::route('/{record}/edit'),
        ];
    }
}
