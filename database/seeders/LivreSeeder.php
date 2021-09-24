<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Livre;

class LivreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Livre::destroy(Livre::all());
        Livre::factory()->count(10)->create();
    }
}
