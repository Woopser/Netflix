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
        Schema::create('visionnement', function (Blueprint $table) {
            $table->id();
            $table->foreignId('films_id')->constrained();
            $table->foreignId('usagers_id')->constrained();
            $table->float('nbrVisio');
            $table->float('noteAtt');
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
        Schema::dropIfExists('visionnement');
    }
};
