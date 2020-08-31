<?php

use Illuminate\Database\Seeder;
use App\Restaurante;

class RestaurantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Restaurante::class, 300)->create();

    }
}
