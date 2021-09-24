<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Avion;

class AvionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Avion::destroy(Avion::all());
        Avion::factory()->count(10)->create();
    }
}
