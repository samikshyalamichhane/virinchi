<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnrollmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enrollments', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('mobile_phone_no')->nullable();
            $table->string('email')->nullable();
            $table->string('father_name')->nullable();
            $table->string('father_contact_no')->nullable();
            $table->string('parent_email')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('mother_contact_no')->nullable();
            $table->string('citizenship_or_passport_number')->nullable();
            $table->string('dob')->nullable();
            $table->string('secondary_education_board')->nullable();
            $table->string('secondary_education_school')->nullable();
            $table->string('secondary_education_pass_year')->nullable();
            $table->string('secondary_education_grade')->nullable();
            $table->string('higher_secondary_education_passed_year')->nullable();
            $table->string('bachelor_degree_board')->nullable();
            $table->string('bachelor_degree_college')->nullable();
            $table->string('bachelor_degree_passed_year')->nullable();
            $table->string('bachelor_degree_grade')->nullable();
            $table->string('other_qualification_board')->nullable();
            $table->string('other_qualification_college')->nullable();
            $table->string('other_qualification_passed_year')->nullable();
            $table->string('other_qualification_grade')->nullable();

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
        Schema::dropIfExists('enrollments');
    }
}
