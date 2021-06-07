<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGiocatoreSquadraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('giocatore_squadra', function (Blueprint $table) {


            $table->id();

            $table->bigInteger('squadra_id')->unsigned()->index();
            $table->bigInteger('giocatore_id')->unsigned()->index();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('giocatore_squadra');
    }
}