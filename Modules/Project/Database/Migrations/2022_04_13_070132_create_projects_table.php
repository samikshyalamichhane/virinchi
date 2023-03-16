<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->text('title')->nullable();
            $table->string('slug')->nullable();
            $table->string('image')->nullable();
            $table->text('overview')->nullable();
            $table->longText('activities')->nullable();
            $table->longText('donor_partners')->nullable();
            $table->enum('status', ['completed', 'on_going'])->default('on_going');
            $table->text('final_outcomes')->nullable();
            $table->boolean('publish')->default(true);

            $table->timestamps();
        });

        DB::table('permissions')->insert([
            'name' => 'View Projects',
            'guard_name' => 'web',
            'group' => 'Projects'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Add Projects',
            'guard_name' => 'web',
            'group' => 'Projects'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Edit Projects',
            'guard_name' => 'web',
            'group' => 'Projects'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Delete Projects',
            'guard_name' => 'web',
            'group' => 'Projects'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
