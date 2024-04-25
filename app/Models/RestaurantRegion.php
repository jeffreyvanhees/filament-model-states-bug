<?php

namespace App\Models;

use App\Models\States\RestaurantRegionDeliveryStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Spatie\ModelStates\HasStates;

class RestaurantRegion extends Pivot
{
    use HasStates;

    public $fillable = [
        'delivery_status',
        'delivery_costs',
    ];

    public $casts = [
        'delivery_status' => RestaurantRegionDeliveryStatus::class,
        'delivery_costs' => 'decimal:2',
    ];
}
