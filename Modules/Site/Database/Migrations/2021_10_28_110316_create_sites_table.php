<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateSitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sites', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->longText('description')->nullable();
            $table->text('meta_title')->nullable();
            $table->text('meta_keyword')->nullable();

            //counters
            $table->string('working_exp')->nullable();
            $table->string('projects_completed')->nullable();
            $table->string('happy_clients')->nullable();
            $table->string('training_and_workshop')->nullable();

            //logos
            $table->string('fav_icon')->nullable();
            $table->string('header_logo')->nullable();
            $table->string('footer_logo')->nullable();
            $table->string('about_us_image')->nullable();
            $table->string('why_choose_us_image')->nullable();

            //contact and social medis links
            $table->text('email1')->nullable();
            $table->text('contact1')->nullable();
            $table->text('facebook')->nullable();
            $table->text('youtube')->nullable();
            $table->text('twitter')->nullable();
            $table->text('linkedin')->nullable();
            $table->text('address')->nullable();
            $table->text('map')->nullable();

            //About Us
            $table->text('about_us_title')->nullable();
            $table->text('why_choose_us_title')->nullable();
            $table->longText('about_us_desc')->nullable();
            $table->longText('why_choose_us_desc')->nullable();
            $table->text('footer_desc')->nullable();

            //Banner Image
            $table->string('page_banner_image')->nullable();
            $table->timestamps();
        });
        DB::table('permissions')->insert([
            'name' => 'Update SiteInfo',
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
        DB::table('permissions')->where('name', 'View SiteInfo')->delete();
        Schema::dropIfExists('sites');
    }
}