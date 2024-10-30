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
        Schema::create('ingredient-plat', function (Blueprint $table) {
            $table->id();
            $table->foreignId("Ingredients");
            $table->foreign("Ingredients")
                ->references("id")
                ->on("ingredients")
                ->onDelete('cascade');

            $table->foreignId("Plat");
            $table->foreign("Plat")
                ->references("id")
                ->on("plats")
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
