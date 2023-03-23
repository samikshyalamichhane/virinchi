<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClubsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clubs', function (Blueprint $table) {
            $table->id();
            $table->text('title')->nullable();
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->boolean('publish')->default(1);

            $table->timestamps();
        });

        DB::table('permissions')->insert([
            'name' => 'View Clubs',
            'guard_name' => 'web',
            'group' => 'Clubs'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Add Clubs',
            'guard_name' => 'web',
            'group' => 'Clubs'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Edit Clubs',
            'guard_name' => 'web',
            'group' => 'Clubs'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Delete Clubs',
            'guard_name' => 'web',
            'group' => 'Clubs'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('permissions')->where('name', 'View Clubs')->delete();
        DB::table('permissions')->where('name', 'Add Clubs')->delete();
        DB::table('permissions')->where('name', 'Edit Clubs')->delete();
        DB::table('permissions')->where('name', 'Delete Clubs')->delete();
        Schema::dropIfExists('clubs');
    }
}
