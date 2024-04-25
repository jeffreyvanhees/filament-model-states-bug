<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Restaurant extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function regions(): BelongsToMany
    {
        return $this->belongsToMany(Region::class, 'restaurant_region')
            ->using(RestaurantRegion::class)
            ->withPivot('delivery_status', 'delivery_costs');
    }
}
