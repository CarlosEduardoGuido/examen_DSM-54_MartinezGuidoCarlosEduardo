<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Categoria;
use App\Models\Cliente;
use App\Models\Productos;
use App\Models\Ventas;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(100)->create();
        Categoria::factory(100)->create();
        Cliente::factory(100)->create();
        Productos::factory(100)->create();
        Ventas::factory(100)->create();
    }
}
