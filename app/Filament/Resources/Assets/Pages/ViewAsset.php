<?php

namespace App\Filament\Resources\Assets\Pages;

use App\Filament\Resources\Assets\AssetResource;
use Filament\Actions\Action;
use Filament\Resources\Pages\ViewRecord;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ViewAsset extends ViewRecord
{
    protected static string $resource = AssetResource::class;

    public function infolist(Schema $schema): Schema {
        return parent::infolist($schema)
            ->schema([
                Action::make('parent')
                    ->requiresConfirmation()
                    ->extraModalFooterActions([
                        Action::make('child')
                            ->requiresConfirmation()
                            ->action(fn () => dd('Hello?'))
                    ])
            ]);
    }
}
