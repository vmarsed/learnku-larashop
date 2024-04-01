<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
/**
 * 6.7 权限控制
 */
use App\Models\Order;

class OrderPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    public function own(User $user, Order $order)
    {
        return $order->user_id == $user->id;
    }

}
