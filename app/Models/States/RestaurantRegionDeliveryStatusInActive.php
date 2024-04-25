<?php

namespace App\Models\States;

final class RestaurantRegionDeliveryStatusInActive extends RestaurantRegionDeliveryStatus
{
    protected static string $name = 'inactive';

    public function getLabel(): ?string
    {
        return 'Inactive';
    }
}
