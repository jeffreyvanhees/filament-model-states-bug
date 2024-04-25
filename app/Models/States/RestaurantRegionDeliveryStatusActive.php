<?php

namespace App\Models\States;

use App\Models\RestaurantRegion;
use Filament\Support\Contracts\HasLabel;
use Maartenpaauw\Filament\ModelStates\Concerns\ProvidesSpatieStateToFilament;
use Maartenpaauw\Filament\ModelStates\Contracts\FilamentSpatieState;
use Spatie\ModelStates\State;

final class RestaurantRegionDeliveryStatusActive extends RestaurantRegionDeliveryStatus
{
    protected static string $name = 'active';

    public function getLabel(): ?string
    {
        return 'Active';
    }
}
