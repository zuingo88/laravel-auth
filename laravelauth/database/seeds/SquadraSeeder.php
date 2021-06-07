<?php

use Illuminate\Database\Seeder;

use App\Squadra;
use App\Nazione;

class SquadraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Squadra::class, 50) -> make()
                                    -> each(function($squadra) {
                                        $nazione = Nazione::inRandomOrder() -> first();
                                        $squadra -> nazione() -> associate($nazione);
                                        $squadra -> save();
                                    });
    }
}
