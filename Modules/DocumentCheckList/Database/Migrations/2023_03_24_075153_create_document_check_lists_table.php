<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentCheckListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('document_check_lists', function (Blueprint $table) {
            $table->id();
            $table->text('title')->nullable();
            $table->text('description')->nullable();
            $table->boolean('publish')->default(1);

            $table->timestamps();
        });
        DB::table('permissions')->insert([
            'name' => 'View DocumentCheckList',
            'guard_name' => 'web',
            'group' => 'DocumentCheckList'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Add DocumentCheckList',
            'guard_name' => 'web',
            'group' => 'DocumentCheckList'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Edit DocumentCheckList',
            'guard_name' => 'web',
            'group' => 'DocumentCheckList'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Delete DocumentCheckList',
            'guard_name' => 'web',
            'group' => 'DocumentCheckList'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('permissions')->where('name', 'View DocumentCheckList')->delete();
        DB::table('permissions')->where('name', 'Add DocumentCheckList')->delete();
        DB::table('permissions')->where('name', 'Edit DocumentCheckList')->delete();
        DB::table('permissions')->where('name', 'Delete DocumentCheckList')->delete();
        Schema::dropIfExists('document_check_lists');
    }
}
