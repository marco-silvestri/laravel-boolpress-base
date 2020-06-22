<?php

use Illuminate\Database\Seeder;
use App\User;
use App\DetailUser;
use Faker\Generator as Faker;

class DetailUsersTableSeeder extends Seeder
{
    
    public function run(Faker $faker)
    {
        $totalUsers = User::all();
        foreach ($totalUsers as $user){
            $newUser = new DetailUser();
            $newUser->user_id = $user->id;
            $newUser->address = $faker->streetAddress();
            $newUser->phone = $faker->phoneNumber();

            $newUser->save();
        }
    }
}
