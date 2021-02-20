<?php

namespace Database\Seeders;

use App\Models\Anexo;
use App\Models\Hijo;
use App\Models\Persona;
use Illuminate\Database\Eloquent\Relations\HasOne;
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
        // \App\Models\User::factory(10)->create();


        $persona = Persona::factory(20)->has(Hijo::factory(2))->create();
        foreach ($persona as $per) {
            Anexo::factory()->for($per)->create();
        }
    }
}
