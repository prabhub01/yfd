<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestimonialMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testimonial_members', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->longText('name')->nullable();
            $table->string('company')->nullable();
            $table->string('post')->nullable();
            $table->string('location')->nullable();
            $table->string('description')->nullable();
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
        Schema::dropIfExists('testimonial_members');
    }
}
