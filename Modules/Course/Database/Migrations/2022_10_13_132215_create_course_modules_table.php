<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateCourseModulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_modules', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('course_id')->nullable();
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('CASCADE');
            $table->text('title')->nullable();
            $table->longText('description')->nullable();
            $table->boolean('publish')->default(true);
            DB::table('permissions')->insert([
                'name' => 'View Course Modules',
                'guard_name' => 'web',
                'group' => 'Course Modules'
            ]);
            DB::table('permissions')->insert([
                'name' => 'Add Course Modules',
                'guard_name' => 'web',
                'group' => 'Course Modules'
            ]);
            DB::table('permissions')->insert([
                'name' => 'Edit Course Modules',
                'guard_name' => 'web',
                'group' => 'Course Modules'
            ]);
            DB::table('permissions')->insert([
                'name' => 'Delete Course Modules',
                'guard_name' => 'web',
                'group' => 'Course Modules'
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
        DB::table('permissions')->where('name', 'View Course Modules')->delete();
        DB::table('permissions')->where('name', 'Add Course Modules')->delete();
        DB::table('permissions')->where('name', 'Edit Course Modules')->delete();
        DB::table('permissions')->where('name', 'Delete Course Modules')->delete();
        Schema::dropIfExists('course_modules');
    }
}
