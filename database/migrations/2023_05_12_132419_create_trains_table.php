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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('azienda', 50);
            $table->string('stazione_di_partenza', 200);
            $table->string('stazione_di_arrivo', 200);
            $table->date('data_di_partenza')->nullable();
            $table->date('data_di_arrivo')->nullable();
            $table->time('orario_di_partenza', $precision = 0)->nullable();
            $table->time('orario_di_arrivo', $precision = 0)->nullable();
            $table->string('codice_treno', 200);
            $table->unsignedTinyInteger('numero_carrozze');
            $table->boolean('in_orario');
            $table->boolean('cancellato')->default(false);

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
};
