<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\UserAddress;

class UserAddressesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::all()->each(function (User $user) {
            UserAddress::factory()->count(random_int(1, 3))->create(['user_id' => $user->id]);
            // $mya = UserAddress::factory();
            // $myb = $mya->count(random_int(1, 3));
            // $myc = $myb->create(['user_id' => $user->id]);
        });

    }
}
