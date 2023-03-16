<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMachinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('machines', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->string('image')->nullable();
            $table->text('short_description')->nullable();
            $table->longText('description')->nullable();
            $table->boolean('publish')->default(true);
            $table->timestamps();
        });
        DB::table('permissions')->insert([
            'name' => 'View Machines',
            'guard_name' => 'web',
            'group' => 'Machines'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Add Machines',
            'guard_name' => 'web',
            'group' => 'Machines'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Edit Machines',
            'guard_name' => 'web',
            'group' => 'Machines'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Delete Machines',
            'guard_name' => 'web',
            'group' => 'Machines'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('machines');
    }
}
