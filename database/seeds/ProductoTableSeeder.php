<?php

use App\Producto;
use Illuminate\Database\Seeder;

class ProductoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Producto::class, 300)->create();

    }
}
