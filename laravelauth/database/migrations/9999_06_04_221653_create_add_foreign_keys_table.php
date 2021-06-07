<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddForeignKeysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('squadras', function (Blueprint $table) {

            $table->foreign('nazione_id', 'squadranazione')
                  ->references('id')
                  ->on('naziones');
        });

        Schema::table('giocatore_squadra', function (Blueprint $table) {

            $table->foreign('squadra_id', 'squadragiocatore')
                  ->references('id')
                  ->on('squadras');
            $table->foreign('giocatore_id', 'giocatoresquadra')
                  ->references('id')
                  ->on('giocatores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('squadras', function (Blueprint $table) {

            $table->dropForeign('squadranazione');
                  
        });

        Schema::table('giocatore_squadra', function (Blueprint $table) {

            $table->dropForeign('squadragiocatore');
                  
            $table->dropForeign('giocatoresquadra');
                  
        });
    }
}
