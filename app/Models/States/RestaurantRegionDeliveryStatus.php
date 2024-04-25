<?php

namespace App\Models\States;

use App\Models\RestaurantRegion;
use Filament\Support\Contracts\HasLabel;
use Maartenpaauw\Filament\ModelStates\Concerns\ProvidesSpatieStateToFilament;
use Maartenpaauw\Filament\ModelStates\Contracts\FilamentSpatieState;
use Spatie\ModelStates\Exceptions\InvalidConfig;
use Spatie\ModelStates\State;
use Spatie\ModelStates\StateConfig;

/**
 * @extends State<RestaurantRegion>
 */
abstract class RestaurantRegionDeliveryStatus extends State implements FilamentSpatieState, HasLabel
{
    use ProvidesSpatieStateToFilament;

    /**
     * @throws InvalidConfig
     */
    public static function config(): StateConfig
    {
        return parent::config()
            ->default(RestaurantRegionDeliveryStatusActive::class)
            ->allowTransition(RestaurantRegionDeliveryStatusInActive::class, RestaurantRegionDeliveryStatusActive::class)
            ->allowTransition(RestaurantRegionDeliveryStatusActive::class, RestaurantRegionDeliveryStatusInActive::class);
    }

}
