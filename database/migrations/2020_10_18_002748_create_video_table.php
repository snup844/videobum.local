<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('video', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->index();
            $table->string('title_en');
            $table->string('category_id');
            $table->string('embed_url');
            $table->string('director');
            $table->string('genre');
            $table->string('actors');
            $table->string('kaltura_id');
            $table->string('kp_id');
            $table->text('description');
            $table->string('duration');
            $table->string('countries');
            $table->string('year');
            $table->string('translator');
            $table->string('poster');
            $table->string('poster_big');
            $table->string('age');
            $table->string('perevod');
            $table->string('sezon');
            $table->string('seriya');
            $table->string('quality');
            $table->string('status');
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
        Schema::dropIfExists('video');
    }
}
