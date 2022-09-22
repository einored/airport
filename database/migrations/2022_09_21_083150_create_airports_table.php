<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('airports', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50); //Oro uosto pavadinimas
            $table->unsignedBigInteger('country_id'); //Šalis iš countries lentelės
            $table->foreign('country_id')->references('id')->on('countries');
            $table->string('latitude', 30); //Oro uosto lokacija (platuma)
            $table->string('longitude', 30); //Oro uosto lokacija (ilguma)            
            $table->unsignedBigInteger('airline_id'); //Avialinija iš airlines lentelės
            $table->foreign('airline_id')->references('id')->on('airlines');
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
        Schema::dropIfExists('airports');
    }
};
