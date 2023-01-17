<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->increments('id');
            $table->string('azienda', 200);
            $table->string('stazione_partenza', 100);
            $table->string('stazione_arrivo', 100);
            $table->mediumInteger('ora_partenza', false, true);
            $table->mediumInteger('ora_arrivo', false, true);
            $table->mediumInteger('codice_treno', false, true);
            $table->mediumInteger('n_carrozze', false, true);
            $table->string('puntualità', 100);
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
        Schema::dropIfExists('trains');
    }
}
