<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SnTypenew extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sn_typenew', function (Blueprint $table) {
            $table->increments('type_id');
            $table->string('type_name');
            $table->string('type_slug');
            $table->integer('type_cate')->unsigned();
            $table->foreign('type_cate')
                ->references('cate_id')
                ->on('sn_categories')
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
        Schema::dropIfExists('sn_typenew');
    }
}
