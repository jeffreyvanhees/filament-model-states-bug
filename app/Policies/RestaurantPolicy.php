<?php

namespace App\Policies;

use App\Models\Restaurant;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class RestaurantPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {
        return true;
    }

    public function view(User $user, Restaurant $restaurant): bool
    {
        return true;
    }

    public function create(User $user): bool
    {
        return true;
    }

    public function update(User $user, Restaurant $restaurant): bool
    {
        return true;
    }

    public function delete(User $user, Restaurant $restaurant): bool
    {
        return true;
    }

    public function restore(User $user, Restaurant $restaurant): bool
    {
        return true;
    }

    public function forceDelete(User $user, Restaurant $restaurant): bool
    {
        return true;
    }
}
