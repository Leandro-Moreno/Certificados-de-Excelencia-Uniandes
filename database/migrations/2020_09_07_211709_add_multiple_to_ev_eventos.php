<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMultipleToEvEventos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ev_eventos', function (Blueprint $table) {
            $table->date('fecha_final')->nullable();
            $table->integer('varios_horarios')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ev_eventos', function (Blueprint $table) {
            //
        });
    }
}
