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
        Schema::create('commande-plat', function (Blueprint $table) {
            $table->id();
            $table->foreignId("Plat");
            $table->foreign("Plat")
                ->references("id")
                ->on("plats")
                ->onDelete('cascade');

            $table->foreignId("Commandé");
            $table->foreign("Commandé")
                ->references("id")
                ->on("commandes")
                ->onDelete('cascade');
            $table->integer('Quantité');
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
        Schema::dropIfExists('commande_plat');
    }
};
