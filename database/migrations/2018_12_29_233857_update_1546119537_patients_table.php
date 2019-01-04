<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1546119537PatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('patients', function (Blueprint $table) {
            if(Schema::hasColumn('patients', 'current_art_status')) {
                $table->dropColumn('current_art_status');
            }
            if(Schema::hasColumn('patients', 'current_art_start_date')) {
                $table->dropColumn('current_art_start_date');
            }
            
        });
Schema::table('patients', function (Blueprint $table) {
            
if (!Schema::hasColumn('patients', 'current_art_status')) {
                $table->string('current_art_status')->nullable();
                }
if (!Schema::hasColumn('patients', 'current_art_start_date')) {
                $table->date('current_art_start_date')->nullable();
                }
if (!Schema::hasColumn('patients', 'current_art_unit')) {
                $table->string('current_art_unit')->nullable();
                }
if (!Schema::hasColumn('patients', 'regimen')) {
                $table->string('regimen')->nullable();
                }
if (!Schema::hasColumn('patients', 'int_treatment')) {
                $table->tinyInteger('int_treatment')->nullable()->default('0');
                }
if (!Schema::hasColumn('patients', 'art_code')) {
                $table->string('art_code')->nullable();
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
        Schema::table('patients', function (Blueprint $table) {
            $table->dropColumn('current_art_status');
            $table->dropColumn('current_art_start_date');
            $table->dropColumn('current_art_unit');
            $table->dropColumn('regimen');
            $table->dropColumn('int_treatment');
            $table->dropColumn('art_code');
            
        });
Schema::table('patients', function (Blueprint $table) {
                        $table->string('current_art_status')->nullable();
                $table->string('current_art_start_date')->nullable();
                
        });

    }
}
