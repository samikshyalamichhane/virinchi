<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admissions', function (Blueprint $table) {
            $table->id();
            $table->text('course_title')->nullable();
            $table->text('date')->nullable();
            $table->string('status')->nullable();
            $table->boolean('publish')->default(1);

            $table->timestamps();
        });
        DB::table('permissions')->insert([
            'name' => 'View Admission',
            'guard_name' => 'web',
            'group' => 'Admission'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Add Admission',
            'guard_name' => 'web',
            'group' => 'Admission'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Edit Admission',
            'guard_name' => 'web',
            'group' => 'Admission'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Delete Admission',
            'guard_name' => 'web',
            'group' => 'Admission'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('permissions')->where('name', 'View Admission')->delete();
        DB::table('permissions')->where('name', 'Add Admission')->delete();
        DB::table('permissions')->where('name', 'Edit Admission')->delete();
        DB::table('permissions')->where('name', 'Delete Admission')->delete();
        Schema::dropIfExists('admissions');
    }
}
