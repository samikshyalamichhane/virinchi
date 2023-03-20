<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIctMelasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ict_melas', function (Blueprint $table) {
            $table->id();
            $table->text('title')->nullable();
            $table->string('image_description')->nullable();
            $table->text('description')->nullable();
            $table->text('resources')->nullable();
            $table->string('image')->nullable();
            $table->boolean('publish')->default(1);

            $table->timestamps();
        });

        DB::table('permissions')->insert([
            'name' => 'View IctMela',
            'guard_name' => 'web',
            'group' => 'IctMela'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Add IctMela',
            'guard_name' => 'web',
            'group' => 'IctMela'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Edit IctMela',
            'guard_name' => 'web',
            'group' => 'IctMela'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Delete IctMela',
            'guard_name' => 'web',
            'group' => 'IctMela'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ict_melas');
    }
}
