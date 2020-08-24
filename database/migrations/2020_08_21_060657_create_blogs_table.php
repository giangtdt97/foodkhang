<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->increments('id');
            $table->Integer('author_id');
            $table->string('title');
            $table->string('seo_title');
            $table->text('excerpt');
            $table->text('body');
            $table->string('image');
            $table->string('slug');
            $table->text('meta_description');
            $table->text('mete_keyword');
            $table->boolean('status');
            $table->tinyInteger('featured');
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
        Schema::dropIfExists('blogs');
    }
}
