<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add5c27c04dbb7abRelationshipsToUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function(Blueprint $table) {
            if (!Schema::hasColumn('users', 'role_id')) {
                $table->integer('role_id')->unsigned()->nullable();
                $table->foreign('role_id', '246468_5c25d8471642c')->references('id')->on('roles')->onDelete('cascade');
                }
                if (!Schema::hasColumn('users', 'township_id')) {
                $table->integer('township_id')->unsigned()->nullable();
                $table->foreign('township_id', '246468_5c27c04c35966')->references('id')->on('townships')->onDelete('cascade');
                }
                
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function(Blueprint $table) {
            
        });
    }
}
