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
        Schema::create('fournisseur-ingredients', function (Blueprint $table) {
            $table->id();
            $table->foreignId("Fournisseur");
            $table->foreign("Fournisseur")
                ->references("id")
                ->on("fournisseurs");

            $table->foreignId("Produits");
            $table->foreign("Produits")
                ->references("id")
                ->on("ingredients")
                ->onDelete('cascade');
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
        //
    }
};
