<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVolunteerFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('volunteer_forms', function (Blueprint $table) {
            $table->id();
            $table->string('full_name')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('primary_contact')->nullable();
            $table->string('secondary_contact')->nullable();
            $table->string('subject')->nullable();
            $table->string('duration')->nullable();
            $table->longText('reason')->nullable();
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
        Schema::dropIfExists('volunteer_forms');
    }
}
