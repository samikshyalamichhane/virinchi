<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateCourseAttributesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_attributes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('course_id')->nullable();
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('CASCADE');
            $table->text('title')->nullable();
            $table->longText('attribute_description')->nullable();
            $table->boolean('publish')->default(true);
            DB::table('permissions')->insert([
                'name' => 'View Course Attributes',
                'guard_name' => 'web',
                'group' => 'Course Attributes'
            ]);
            DB::table('permissions')->insert([
                'name' => 'Add Course Attributes',
                'guard_name' => 'web',
                'group' => 'Course Attributes'
            ]);
            DB::table('permissions')->insert([
                'name' => 'Edit Course Attributes',
                'guard_name' => 'web',
                'group' => 'Course Attributes'
            ]);
            DB::table('permissions')->insert([
                'name' => 'Delete Course Attributes',
                'guard_name' => 'web',
                'group' => 'Course Attributes'
            ]);
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
        DB::table('permissions')->where('name', 'View Course Attributes')->delete();
        DB::table('permissions')->where('name', 'Add Course Attributes')->delete();
        DB::table('permissions')->where('name', 'Edit Course Attributes')->delete();
        DB::table('permissions')->where('name', 'Delete Course Attributes')->delete();
        Schema::dropIfExists('course_attributes');
    }
}
