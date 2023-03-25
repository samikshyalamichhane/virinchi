<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFaqsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faqs', function (Blueprint $table) {
            $table->id();
            $table->text('question')->nullable();
            $table->string('slug')->nullable();
            $table->text('answers')->nullable();
            $table->boolean('publish')->default(1);

            $table->timestamps();
        });
        DB::table('permissions')->insert([
            'name' => 'View Faq',
            'guard_name' => 'web',
            'group' => 'Faq'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Add Faq',
            'guard_name' => 'web',
            'group' => 'Faq'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Edit Faq',
            'guard_name' => 'web',
            'group' => 'Faq'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Delete Faq',
            'guard_name' => 'web',
            'group' => 'Faq'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('permissions')->where('name', 'View Faq')->delete();
        DB::table('permissions')->where('name', 'Add Faq')->delete();
        DB::table('permissions')->where('name', 'Edit Faq')->delete();
        DB::table('permissions')->where('name', 'Delete Faq')->delete();
        Schema::dropIfExists('faqs');
    }
}
