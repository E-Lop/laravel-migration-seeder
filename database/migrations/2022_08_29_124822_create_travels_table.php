<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travels', function (Blueprint $table) {
            $table->id();
            // codice riferimento viaggio
            $table->string('reference', 12);
            // destinazione del viaggio
            $table->string('destinations', 50);
            // giorni di durata del viaggio
            $table->smallInteger('duration')->unsigned();
            // prezzo del viaggio
            $table->decimal('price', 8, 2);
            // visto di ingresso necessario
            $table->tinyInteger('visa_needed')->unsigned()->default(1);
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
        Schema::dropIfExists('travels');
    }
}
