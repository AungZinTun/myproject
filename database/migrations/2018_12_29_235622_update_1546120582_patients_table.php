<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1546120582PatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('patients', function (Blueprint $table) {
            
if (!Schema::hasColumn('patients', 'vl_test')) {
                $table->tinyInteger('vl_test')->nullable()->default('0');
                }
if (!Schema::hasColumn('patients', 'vl_test_result')) {
                $table->integer('vl_test_result')->nullable();
                }
if (!Schema::hasColumn('patients', 'vl_test_date')) {
                $table->date('vl_test_date')->nullable();
                }
if (!Schema::hasColumn('patients', 'previous_art_history')) {
                $table->tinyInteger('previous_art_history')->nullable()->default('0');
                }
if (!Schema::hasColumn('patients', 'previous_art_option')) {
                $table->string('previous_art_option')->nullable();
                }
if (!Schema::hasColumn('patients', 'previous_art_history_regimen')) {
                $table->string('previous_art_history_regimen')->nullable();
                }
if (!Schema::hasColumn('patients', 'spouse_test_date')) {
                $table->date('spouse_test_date')->nullable();
                }
if (!Schema::hasColumn('patients', 'spouse_test_place')) {
                $table->string('spouse_test_place')->nullable();
                }
if (!Schema::hasColumn('patients', 'spouse_test_result')) {
                $table->string('spouse_test_result')->nullable();
                }
if (!Schema::hasColumn('patients', 'spouse_art_refer')) {
                $table->string('spouse_art_refer')->nullable();
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
            $table->dropColumn('vl_test');
            $table->dropColumn('vl_test_result');
            $table->dropColumn('vl_test_date');
            $table->dropColumn('previous_art_history');
            $table->dropColumn('previous_art_option');
            $table->dropColumn('previous_art_history_regimen');
            $table->dropColumn('spouse_test_date');
            $table->dropColumn('spouse_test_place');
            $table->dropColumn('spouse_test_result');
            $table->dropColumn('spouse_art_refer');
            
        });

    }
}
