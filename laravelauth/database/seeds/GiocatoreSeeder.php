<?php

use Illuminate\Database\Seeder;

use App\Giocatore;
use App\Squadra;

class GiocatoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Giocatore::class, 1000)->create()
                                      ->each(function($giocatore) {
                                        $squadras = Squadra::inRandomOrder()
                                                    ->limit(5)
                                                    ->get();
                                        $giocatore -> squadras() -> attach($squadras);
                                        $giocatore -> save();
                                      });
    }
}
