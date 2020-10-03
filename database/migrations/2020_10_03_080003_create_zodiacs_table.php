<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZodiacsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zodiacs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('zodiac_tw_sign')->comment('中文生肖 鼠..');
            $table->string('zodiac_en_sign')->nullable()->comment('英文生肖 鼠..');
            $table->string('good_character')->nullable()->comment('生肖喜用字');
            $table->string('bad_character')->nullable()->comment('生肖忌用字');
            $table->string('tw_describe')->nullable()->comment('生肖中文描述');
            $table->string('en_describe')->nullable()->comment('生肖英文描述');
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
        Schema::dropIfExists('zodiacs');
    }
}
