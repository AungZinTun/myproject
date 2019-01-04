<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1546124729PatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('patients', function (Blueprint $table) {
            
if (!Schema::hasColumn('patients', 'immunization_pcv_6')) {
                $table->tinyInteger('immunization_pcv_6')->nullable()->default('0');
                }
if (!Schema::hasColumn('patients', 'dna_pcr_result2')) {
                $table->string('dna_pcr_result2')->nullable();
                }
if (!Schema::hasColumn('patients', 'baby_outcome3')) {
                $table->string('baby_outcome3')->nullable();
                }
if (!Schema::hasColumn('patients', 'dna_pcr3')) {
                $table->string('dna_pcr3')->nullable();
                }
if (!Schema::hasColumn('patients', 'baby_arv3')) {
                $table->string('baby_arv3')->nullable();
                }
if (!Schema::hasColumn('patients', 'feeding_option3')) {
                $table->string('feeding_option3')->nullable();
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
            $table->dropColumn('immunization_pcv_6');
            $table->dropColumn('dna_pcr_result2');
            $table->dropColumn('baby_outcome3');
            $table->dropColumn('hiv_ab_test_result1');
            $table->dropColumn('dna_pcr3');
            $table->dropColumn('baby_arv3');
            $table->dropColumn('feeding_option3');
            
        });

    }
}
