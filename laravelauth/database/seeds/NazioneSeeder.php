<?php

use Illuminate\Database\Seeder;

use App\Nazione;

class NazioneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Nazione::class, 10)->create();
    }
}
