<?php

namespace App\Policies;
use App\Catalog;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CatalogPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function update(User $user, Catalog $catalog)
    {
        return $catalog->user_id == $user->id;
    }
}
