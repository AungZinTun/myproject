<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add5c27ed8869d30RelationshipsToPatientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('patients', function(Blueprint $table) {
            if (!Schema::hasColumn('patients', 'user_id')) {
                $table->integer('user_id')->unsigned()->nullable();
                $table->foreign('user_id', '246881_5c27e195e0804')->references('id')->on('users')->onDelete('cascade');
                }
                if (!Schema::hasColumn('patients', 'township_id')) {
                $table->integer('township_id')->unsigned()->nullable();
                $table->foreign('township_id', '246881_5c27e202669bc')->references('id')->on('townships')->onDelete('cascade');
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
        Schema::table('patients', function(Blueprint $table) {
            
        });
    }
}
