<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateTestimonialCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testimonial_categories', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->boolean('publish')->default(false);

            DB::table('permissions')->insert([
                'name' => 'View Testimonial Category',
                'guard_name' => 'web',
                'group' => 'Testimonial'
            ]);
            DB::table('permissions')->insert([
                'name' => 'Add Testimonial Category',
                'guard_name' => 'web',
                'group' => 'Testimonial'
            ]);
            DB::table('permissions')->insert([
                'name' => 'Edit Testimonial Category',
                'guard_name' => 'web',
                'group' => 'Testimonial'
            ]);
            DB::table('permissions')->insert([
                'name' => 'Delete Testimonial Category',
                'guard_name' => 'web',
                'group' => 'Testimonial'
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
        DB::table('permissions')->where('name', 'View Testimonial Catgeory')->delete();
        DB::table('permissions')->where('name', 'Add Testimonial Catgeory')->delete();
        DB::table('permissions')->where('name', 'Edit Testimonial Catgeory')->delete();
        DB::table('permissions')->where('name', 'Delete Testimonial Catgeory')->delete();
        Schema::dropIfExists('testimonial_categories');
    }
}
