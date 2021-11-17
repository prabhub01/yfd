<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutUsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_us', function (Blueprint $table) {
            $table->increments('id');
            $table->string('banner')->nullable();
            $table->longText('description')->nullable();
            $table->longText('our_story_desc')->nullable();
            $table->string('our_story_img')->nullable();
            $table->longText('our_mission_desc')->nullable();
            $table->string('our_mission_img')->nullable();
            $table->longText('our_vision_desc')->nullable();
            $table->string('our_vision_img')->nullable();
            $table->longText('our_objectives_desc')->nullable();
            $table->string('our_objectives_img')->nullable();
            $table->longText('statement_of_non_descrimination')->nullable();
            $table->longText('disclaimer')->nullable();
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
        Schema::dropIfExists('about_us');
    }
}
