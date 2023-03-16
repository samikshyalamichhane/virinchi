<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aboutuses', function (Blueprint $table) {
            $table->id();

            // Company Overview (Who we are)
            $table->text('home_page_description')->nullable();
            $table->text('aboutus_page_description')->nullable();
            $table->longText('full_description')->nullable();
            $table->string('aboutus_page_image')->nullable();
            $table->string('home_page_image')->nullable();
            $table->string('detail_page_image')->nullable();

            //Founder's Message
            $table->string('name')->nullable();
            $table->string('position')->nullable();
            $table->text('message')->nullable();
            $table->string('image')->nullable();

            //Vision
            $table->text('mission_description')->nullable();
            $table->string('mission_image')->nullable();
            $table->text('vision_description')->nullable();
            $table->string('vision_image')->nullable();

            //Why Choose Us
            $table->text('title1')->nullable();
            $table->text('title2')->nullable();
            $table->text('title3')->nullable();
            $table->timestamps();
        });
        DB::table('permissions')->insert([
            'name' => 'View Aboutus',
            'guard_name' => 'web',
            'group' => 'Site'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aboutuses');
    }
}
