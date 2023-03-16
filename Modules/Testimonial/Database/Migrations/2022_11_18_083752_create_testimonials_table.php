<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateTestimonialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testimonials', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('testimonialcategory_id')->nullable();
            $table->foreign('testimonialcategory_id')->references('id')->on('testimonials')->onDelete('CASCADE');
            $table->text('description');
            $table->string('batch')->nullable();
            $table->string('intake')->nullable();
            $table->string('image')->nullable();
            $table->boolean('publish')->default(false);
            $table->timestamps();
        });
        DB::table('permissions')->insert([
            'name' => 'View Testimonial',
            'guard_name' => 'web',
            'group' => 'Testimonial'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Add Testimonial',
            'guard_name' => 'web',
            'group' => 'Testimonial'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Edit Testimonial',
            'guard_name' => 'web',
            'group' => 'Testimonial'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Delete Testimonial',
            'guard_name' => 'web',
            'group' => 'Testimonial'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('permissions')->where('name', 'View Testimonial')->delete();
        DB::table('permissions')->where('name', 'Add Testimonial')->delete();
        DB::table('permissions')->where('name', 'Edit Testimonial')->delete();
        DB::table('permissions')->where('name', 'Delete Testimonial')->delete();
        Schema::dropIfExists('testimonials');
    }
}
