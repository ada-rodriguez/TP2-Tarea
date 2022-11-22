<?php

namespace Database\Seeders;

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
        $this->call(EmpleadosTableSeerder::class);
        $this->call(ProductosTableSeerder::class);
        $this->call(VentasTableSeerder::class);
        // \App\Models\User::factory(10)->create();
    }
}
