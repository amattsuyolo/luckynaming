<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharactersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('characters', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('character', 4)->comment('字 儀、偉');
            $table->tinyInteger('strokes')->nullable()->comment('筆畫');
            $table->string('tw_meaning')->nullable()->comment('中文意思');
            $table->string('en_meaning')->nullable()->comment('英文意思');
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
        Schema::dropIfExists('characters');
    }
}
