<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSquadrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('squadras', function (Blueprint $table) {

            $table->id();

            $table->string('name', 50);
            $table->integer('points');

            $table->bigInteger('nazione_id')->unsigned()->index(); //collegamento a Nazione

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
        Schema::dropIfExists('squadras');
    }
}
