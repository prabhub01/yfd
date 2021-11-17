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
            $table->id();
            $table->string('banner')->nullable();
            $table->string('title')->nullable();
            $table->string('slug')->unique();
            $table->string('image')->nullable();
            $table->longText('description')->nullable();
            $table->string('date')->nullable();
            $table->string('location')->nullable();
            $table->string('writer')->nullable();
            $table->string('display_order')->nullable()->default(0);
            $table->boolean('is_active')->default(1);
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
