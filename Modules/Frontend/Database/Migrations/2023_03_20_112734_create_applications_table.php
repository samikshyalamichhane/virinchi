<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('gender')->nullable();
            $table->string('dob')->nullable();
            $table->string('address')->nullable();
            $table->string('email')->nullable();
            $table->string('interested_course')->nullable();
            $table->string('year_applying_for')->nullable();
            $table->string('relation')->nullable();
            $table->string('guardian_first_name')->nullable();
            $table->string('guardian_last_name')->nullable();
            $table->string('guardian_contact')->nullable();
            $table->string('guardian_email')->nullable();
            $table->string('country_of_residence')->nullable();
            $table->string('country_address')->nullable();
            $table->string('how_did_you_hear_about_us')->nullable();
            $table->string('specefic_question')->nullable();
            $table->string('guardian_middle_name')->nullable();

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
        Schema::dropIfExists('applications');
    }
}
