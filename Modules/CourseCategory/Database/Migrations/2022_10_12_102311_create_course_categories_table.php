<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateCourseCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_categories', function (Blueprint $table) {
            $table->id();
            $table->text('title')->nullable();
            $table->string('slug')->nullable();
            $table->longText('description')->nullable();
            $table->boolean('publish')->default(true);
            DB::table('permissions')->insert([
                'name' => 'View Course Category',
                'guard_name' => 'web',
                'group' => 'Course Category'
            ]);
            DB::table('permissions')->insert([
                'name' => 'Add Course Category',
                'guard_name' => 'web',
                'group' => 'Course Category'
            ]);
            DB::table('permissions')->insert([
                'name' => 'Edit Course Category',
                'guard_name' => 'web',
                'group' => 'Course Category'
            ]);
            DB::table('permissions')->insert([
                'name' => 'Delete Course Category',
                'guard_name' => 'web',
                'group' => 'Course Category'
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
        DB::table('permissions')->where('name', 'View Course Category')->delete();
        DB::table('permissions')->where('name', 'Add Course Category')->delete();
        DB::table('permissions')->where('name', 'Edit Course Category')->delete();
        DB::table('permissions')->where('name', 'Delete Course Category')->delete();
        Schema::dropIfExists('course_categories');
    }
}
