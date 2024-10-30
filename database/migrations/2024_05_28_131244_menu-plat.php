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
        Schema::create('menu_plat', function (Blueprint $table) {
            $table->foreignId("Plat");
            $table->foreign("Plat")
                ->references("id")
                ->on("plats");

            $table->foreignId("Menu");
            $table->foreign("Menu")
                ->references("id")
                ->on("menus");
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
        Schema::dropIfExists('menu_plat');
    }
};
