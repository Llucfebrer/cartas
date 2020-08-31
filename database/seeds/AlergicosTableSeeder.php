<?php

use Illuminate\Database\Seeder;
use App\Alergico;

class AlergicosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $alergicos = [
            'Gluten',
            'Crustáceos',
            'Huevos',
            'Pescado',
            'Cacahuetes',
            'Soja',
            'Lácteos',
            'Frutos Secos',
            'Apio',
            'Mostaza',
            'Sésamo',
            'Sulfitos',
            'Altramuz',
            'Moluscos'];

        foreach ($alergicos as $alergico)
        {
            Alergico::create(['Nombre' => $alergico]);
        }
    }
}
