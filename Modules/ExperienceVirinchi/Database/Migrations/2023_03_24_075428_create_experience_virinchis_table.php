<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExperienceVirinchisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experience_virinchis', function (Blueprint $table) {
            $table->id();
            $table->text('title')->nullable();
            $table->string('slug')->unique()->nullable();
            $table->text('short_description')->nullable();
            $table->text('description')->nullable();
            $table->text('link')->nullable();
            $table->string('image')->nullable();
            $table->boolean('publish')->default(1);

            $table->timestamps();
        });
        DB::table('permissions')->insert([
            'name' => 'View ExperienceVirinchi',
            'guard_name' => 'web',
            'group' => 'ExperienceVirinchi'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Add ExperienceVirinchi',
            'guard_name' => 'web',
            'group' => 'ExperienceVirinchi'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Edit ExperienceVirinchi',
            'guard_name' => 'web',
            'group' => 'ExperienceVirinchi'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Delete ExperienceVirinchi',
            'guard_name' => 'web',
            'group' => 'ExperienceVirinchi'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('permissions')->where('name', 'View ExperienceVirinchi')->delete();
        DB::table('permissions')->where('name', 'Add ExperienceVirinchi')->delete();
        DB::table('permissions')->where('name', 'Edit ExperienceVirinchi')->delete();
        DB::table('permissions')->where('name', 'Delete ExperienceVirinchi')->delete();
        Schema::dropIfExists('experience_virinchis');
    }
}
