<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateCourseGalleriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_galleries', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('course_id')->nullable();
            $table->string('path')->nullable();
            $table->longText('description')->nullable();
            $table->string('thumbnail_path')->nullable();
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('CASCADE');
            DB::table('permissions')->insert([
                'name' => 'View Course Gallery',
                'guard_name' => 'web',
                'group' => 'Course Gallery'
            ]);
            DB::table('permissions')->insert([
                'name' => 'Add Course Gallery',
                'guard_name' => 'web',
                'group' => 'Course Gallery'
            ]);
            DB::table('permissions')->insert([
                'name' => 'Edit Course Gallery',
                'guard_name' => 'web',
                'group' => 'Course Gallery'
            ]);
            DB::table('permissions')->insert([
                'name' => 'Delete Course Gallery',
                'guard_name' => 'web',
                'group' => 'Course Gallery'
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
        DB::table('permissions')->where('name', 'View Course Gallery')->delete();
        DB::table('permissions')->where('name', 'Add Course Gallery')->delete();
        DB::table('permissions')->where('name', 'Edit Course Gallery')->delete();
        DB::table('permissions')->where('name', 'Delete Course Gallery')->delete();
        Schema::dropIfExists('course_galleries');
    }
}
