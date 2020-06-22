<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
use Faker\Generator as Faker;

class UsersTableSeeder extends Seeder
{
    
    public function run(Faker $faker)
    {
        //Total mock users we wanna add
        $totalUsers = 5;
        //Populate with fake data
        for ($i = 0; $i < $totalUsers; $i++){
            $newUser = new User();
            $newUser->name = $faker->name();
            $newUser->email = $faker->email();
            $newUser->password = Hash::make('abeautifulandcomplexpassword');
            $newUser->save();
        }
    }
}
