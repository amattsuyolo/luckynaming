<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddParagraphAnalysis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('signs', function (Blueprint $table) {
            $table->string('first')->nullable()->after('analysis')->comment('第一句解析');
            $table->string('second')->nullable()->after('first')->comment('第二句解析');
            $table->string('third')->nullable()->after('second')->comment('第三句解析');
            $table->string('fourth')->nullable()->after('third')->comment('第四句解析');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Sign', function (Blueprint $table) {
            //
        });
    }
}
