<?php

namespace App\Filament\Resources\GownResource\Pages;

use App\Filament\Resources\GownResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGown extends EditRecord
{
    protected static string $resource = GownResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
