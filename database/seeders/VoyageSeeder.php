<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Voyage;

class VoyageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Voyage::factory()->count(10)->create();
    }
}
