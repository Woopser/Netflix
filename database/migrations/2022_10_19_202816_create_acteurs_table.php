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
        Schema::create('acteurs', function (Blueprint $table) {
            $table->id();
            $table->string('nom',100);
            $table->float('age');
            $table->float('taille');
            $table->string('prenom',100);
            $table->string('image',3000);
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
        Schema::dropIfExists('acteurs');
    }
};
