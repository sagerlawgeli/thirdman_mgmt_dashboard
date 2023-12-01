<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SubscriptionResource\Pages;
use App\Filament\Resources\SubscriptionResource\RelationManagers;
use App\Models\Subscription;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SubscriptionResource extends Resource
{
    protected static ?string $model = Subscription::class;

    protected static ?string $navigationIcon = 'heroicon-s-paper-airplane';

    protected static ?string $navigationGroup = 'Business';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->schema([
                        Select::make('customer_id')
                            ->label(__('Customer'))
                            ->required()
                            ->relationship('customer', 'id')
                            ->getOptionLabelFromRecordUsing(fn (Model $record) => $record->user->name)
                            ->createOptionForm([
                                Select::make('user_id')
                                    ->required()
                                    ->relationship('user', 'name', fn ($query) => $query->where('role', 'customer'))
                            ]),
                        Select::make('tracker_device_id')
                            ->label(__('Device'))
                            ->required()
                            ->relationship('trackerDevice', 'name', fn ($query) => $query->whereNotIn('id', Subscription::pluck('tracker_device_id')->all())),
                        Select::make('agent_id')
                            ->label(__('Agent'))
                            ->relationship('agent', 'id')
                            ->getOptionLabelFromRecordUsing(fn (Model $record) => $record->user->name)
                            ->createOptionForm([
                                Select::make('user_id')
                                    ->required()
                                    ->relationship('user', 'name', fn ($query) => $query->where('role', 'agent'))
                            ]),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('customer.user.name')
                    ->label(__('Customer'))
                    ->sortable(),
                TextColumn::make('agent.user.name')
                    ->label(__('Agent'))
                    ->sortable(),
                TextColumn::make('trackerDevice.name')
                    ->label(__('Device'))
                    ->sortable(),
                TextColumn::make('trackerDevice.renewal_date')
                    ->label(__('Renewal Date'))
                    ->date()
                    ->sortable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
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
            'index' => Pages\ListSubscriptions::route('/'),
            'create' => Pages\CreateSubscription::route('/create'),
            'edit' => Pages\EditSubscription::route('/{record}/edit'),
        ];
    }
}
