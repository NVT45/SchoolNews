<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SnPhotos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sn_photos', function (Blueprint $table) {
            $table->increments('photo_id');
            $table->string('photo_file');
            $table->string('title');
            $table->integer('photo_album')->unsigned();
            $table->foreign('photo_album')
                ->references('album_id')
                ->on('sn_albums')
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
        Schema::dropIfExists('sn_photos');
    }
}
