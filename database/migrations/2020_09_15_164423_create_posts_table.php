<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->nullable()->comment('建立者id');
            $table->string('title')->comment('標題');
            $table->text('body')->comment('內容');
            $table->datetime("published_at")->nullable()->comment('發佈時間');
            $table->datetime("published_until")->nullable()->comment('下架日期 無為一直上架');
            $table->boolean("is_published")->default(false)->comment('是否發佈');
            $table->string("category")->nullable()->comment('類別');
            $table->unsignedInteger('post_views')->nullable()->comment('觀看次數');
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
        Schema::dropIfExists('posts');
    }
}
