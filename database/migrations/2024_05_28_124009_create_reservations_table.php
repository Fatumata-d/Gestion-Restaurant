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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->foreignId("Correspondance");
            $table->foreign("Correspondance")
                 ->references("id")
                 ->on("clients");
            $table->dateTime("Date_reservation");
            $table->foreignId("Type_Table");
            $table->foreign("Type_Table")
                 ->references("id")
                 ->on("type_tables");
            $table->foreignId("Emplacement_Table");
            $table->foreign("Emplacement_Table")
                 ->references("id")
                 ->on("emplacements");  
            $table->foreignId("Destinataire");
            $table->foreign("Destinataire")
                 ->references("id")
                 ->on("gestionnaire-systemes");   
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
        Schema::dropIfExists('reservations');
    }
};
