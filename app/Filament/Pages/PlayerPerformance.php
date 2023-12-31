<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class PlayerPerformance extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.player-performance';

    public function getHeading(): string
    {
        return __('ThirdMan - Player League Performance');
    }
}
