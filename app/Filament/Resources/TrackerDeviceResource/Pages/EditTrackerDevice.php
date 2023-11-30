<?php

namespace App\Filament\Resources\TrackerDeviceResource\Pages;

use App\Filament\Resources\TrackerDeviceResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTrackerDevice extends EditRecord
{
    protected static string $resource = TrackerDeviceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
