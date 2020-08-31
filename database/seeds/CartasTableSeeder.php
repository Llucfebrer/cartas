<?php

use Illuminate\Database\Seeder;
use App\Carta;
class CartasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Carta::class, 300)->create();

    }
}
