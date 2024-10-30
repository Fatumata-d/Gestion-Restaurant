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
        Schema::create('commandes', function (Blueprint $table) {
            $table->id();
            $table->foreignId("Correspondance");
            $table->foreign("Correspondance")
                 ->references("id")
                 ->on("clients");
            $table->integer("Quantité")
                 ->default(0);  
            $table->dateTime("Date_commande")
                ->useCurrent();
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
        Schema::dropIfExists('commandes');
    }
};
