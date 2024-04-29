<?php

namespace App\Filament\Resources\RackResource\Pages;

use App\Filament\Resources\RackResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageRacks extends ManageRecords
{
    protected static string $resource = RackResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
