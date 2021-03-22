<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('signs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('sign_topic')->comment('籤文名 ex:甲子籤');
            $table->string('sign_content')->comment('籤文本體');
            $table->string('pic')->nullable()->comment('籤文圖片');
            $table->string('analysis')->nullable()->comment('籤文解析');
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
        Schema::dropIfExists('signs');
    }
}
