<?php

use Illuminate\Database\Seeder;
use App\Juegos;
class JuegosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Juegos::class, 80)->create();
    }
}
