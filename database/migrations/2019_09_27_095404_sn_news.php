<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SnNews extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sn_news', function (Blueprint $table) {
            $table->increments('news_id');
            $table->string('news_title');
            $table->string('news_slug');
            $table->string('news_short_des');
            $table->text('news_description');
            $table->tinyInteger('news_featured');
            $table->string('news_image');
            $table->integer('news_type')->unsigned();
            $table->foreign('news_type')
                ->references('type_id')
                ->on('sn_typenew')
                ->onDelete('cascade');
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
        Schema::dropIfExists('sn_news');
    }
}
