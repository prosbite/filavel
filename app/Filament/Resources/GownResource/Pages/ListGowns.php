<?php

namespace App\Filament\Resources\GownResource\Pages;

use App\Filament\Resources\GownResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListGowns extends ListRecords
{
    protected static string $resource = GownResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
