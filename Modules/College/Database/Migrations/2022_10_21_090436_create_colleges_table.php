<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCollegesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colleges', function (Blueprint $table) {
            $table->id();
            $table->string('graduate_on_time')->nullable();
            $table->string('industry_readiness')->nullable();
            $table->text('graduate_employed')->nullable();
            $table->text('education_model_description')->nullable();
            $table->string('meta_title')->nullable();
            $table->string('meta_keyword')->nullable();
            $table->text('meta_description')->nullable();
            $table->boolean('publish')->default(false);

            $table->timestamps();
        });
        DB::table('permissions')->insert([
            'name' => 'View College',
            'guard_name' => 'web',
            'group' => 'College'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Add College',
            'guard_name' => 'web',
            'group' => 'College'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Edit College',
            'guard_name' => 'web',
            'group' => 'College'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Delete College',
            'guard_name' => 'web',
            'group' => 'College'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('permissions')->where('name', 'View College')->delete();
        DB::table('permissions')->where('name', 'Add College')->delete();
        DB::table('permissions')->where('name', 'Edit College')->delete();
        DB::table('permissions')->where('name', 'Delete College')->delete();
        Schema::dropIfExists('colleges');
    }
}
