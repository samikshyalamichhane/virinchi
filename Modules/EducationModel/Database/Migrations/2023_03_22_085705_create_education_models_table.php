<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEducationModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education_models', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->text('description');
            $table->string('image')->nullable();
            $table->boolean('publish')->default(false);
            $table->timestamps();
        });
        DB::table('permissions')->insert([
            'name' => 'View EducationModel',
            'guard_name' => 'web',
            'group' => 'EducationModel'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Add EducationModel',
            'guard_name' => 'web',
            'group' => 'EducationModel'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Edit EducationModel',
            'guard_name' => 'web',
            'group' => 'EducationModel'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Delete EducationModel',
            'guard_name' => 'web',
            'group' => 'EducationModel'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('permissions')->where('name', 'View EducationModel')->delete();
        DB::table('permissions')->where('name', 'Add EducationModel')->delete();
        DB::table('permissions')->where('name', 'Edit EducationModel')->delete();
        DB::table('permissions')->where('name', 'Delete EducationModel')->delete();
        Schema::dropIfExists('education_models');
    }
}
