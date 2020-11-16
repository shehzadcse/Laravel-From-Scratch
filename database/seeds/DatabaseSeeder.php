<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);        
        $faker = Faker\Factory::create();
        for($i = 0; $i < 200; $i++) {
            App\Product::create([
                'title' => $faker->sentence(3),
                'description' => $faker->paragraph(1),
                'price' => $faker->randomFloat($maxDecimals=2, $minval = 3,$maxval=100),
                'stock' => $faker->numberBetween(1,10),
                'status' => $faker->randomElement(['available','unavailable'])
            ]);
        }
    }
}
