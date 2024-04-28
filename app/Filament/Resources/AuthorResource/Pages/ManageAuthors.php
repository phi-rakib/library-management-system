<?php

namespace App\Filament\Resources\AuthorResource\Pages;

use App\Filament\Resources\AuthorResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageAuthors extends ManageRecords
{
    protected static string $resource = AuthorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
