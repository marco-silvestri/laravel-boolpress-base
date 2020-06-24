<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Asset;

class AssetsTableSeeder extends Seeder
{
    
    public function run(Faker $faker)
    {
        $totalImages = 5;

        for ($i=0; $i <$totalImages; $i++){
            $newAsset = new Asset();
            $newAsset->type = 'carousel';
            $newAsset->url = $faker->imageUrl(1400, 400);
            $newAsset->save();
        }
    }
}
