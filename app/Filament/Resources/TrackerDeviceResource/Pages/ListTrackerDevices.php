<?php

namespace App\Filament\Resources\TrackerDeviceResource\Pages;

use App\Filament\Resources\TrackerDeviceResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTrackerDevices extends ListRecords
{
    protected static string $resource = TrackerDeviceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
