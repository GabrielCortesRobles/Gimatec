<?php

use Illuminate\Database\Seeder;
use App\maquinas;

class MaquinasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(maquinas::class, 900)->create();
    }
}
