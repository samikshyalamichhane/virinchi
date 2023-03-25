<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('course_category_id')->nullable();
            $table->foreign('course_category_id')->references('id')->on('course_categories')->onDelete('CASCADE');
            $table->text('title')->nullable();
            $table->text('short_title')->nullable();
            $table->text('duration')->nullable();
            $table->text('banner_text')->nullable();
            $table->text('attr_desc')->nullable();
            $table->string('slug')->nullable();
            $table->longText('overview')->nullable();
            $table->longText('scope')->nullable();
            $table->longText('eligibility')->nullable();
            $table->longText('description')->nullable();
            $table->longText('attributes')->nullable();
            $table->boolean('publish')->default(true);
            $table->string('image')->nullable();
            $table->string('scope_image')->nullable();
            $table->string('banner_image')->nullable();

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
        Schema::dropIfExists('courses');
    }
}
