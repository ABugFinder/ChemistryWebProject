<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchasesDatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases_dates', function (Blueprint $table) {
            $table->string('date');
            $table->string('Memorama - Medieval');
            $table->string('Tetris - Medieval');
            $table->string('Memorama - Cyber');
            $table->string('Tetris - Cyber');
            $table->string('Memorama - Experto');
            $table->string('Tetris - Experto');
            $table->string('Memorama - Extremo');
            $table->string('Tetris - Extremo');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('purchases_dates');
    }
}
