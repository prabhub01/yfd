<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->increments('id');
            $table->string('full_name');
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('show_phone')->nullable();
            $table->string('show_email')->nullable();
            $table->string('designation')->nullable();
            $table->string('description')->nullable();
            $table->string('photo')->nullable();
            $table->string('fb_link')->nullable();
            $table->string('insta_link')->nullable();
            $table->string('linkedin_link')->nullable();
            $table->string('twitter_link')->nullable();
            $table->string('website_link')->nullable();
            $table->string('display_order')->nullable()->default(0);
            $table->boolean('is_active')->default(1);
            // $table->unsignedInteger('created_by')->nullable();
            // $table->unsignedInteger('updated_by')->nullable();
            $table->timestamps();
            $table->softDeletes();

            // $table->foreign('created_by')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            // $table->foreign('updated_by')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teams');
    }
}
