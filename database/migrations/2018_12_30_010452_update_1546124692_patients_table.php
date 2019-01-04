<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1546124692PatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('patients', function (Blueprint $table) {
            
if (!Schema::hasColumn('patients', 'immunization_penta_4')) {
                $table->tinyInteger('immunization_penta_4')->nullable()->default('0');
                }
if (!Schema::hasColumn('patients', 'immunization_pcv_4')) {
                $table->tinyInteger('immunization_pcv_4')->nullable()->default('0');
                }
if (!Schema::hasColumn('patients', 'immunization_ipv_4')) {
                $table->tinyInteger('immunization_ipv_4')->nullable()->default('0');
                }
if (!Schema::hasColumn('patients', 'feeding_option1')) {
                $table->string('feeding_option1')->nullable();
                }
if (!Schema::hasColumn('patients', 'baby_outcome2')) {
                $table->string('baby_outcome2')->nullable();
                }
if (!Schema::hasColumn('patients', 'hiv_ab_test_result')) {
                $table->string('hiv_ab_test_result')->nullable();
                }
if (!Schema::hasColumn('patients', 'dna_pcr2')) {
                $table->string('dna_pcr2')->nullable();
                }
if (!Schema::hasColumn('patients', 'baby_arv2')) {
                $table->string('baby_arv2')->nullable();
                }
if (!Schema::hasColumn('patients', 'immunization_mr1')) {
                $table->tinyInteger('immunization_mr1')->nullable()->default('0');
                }
if (!Schema::hasColumn('patients', 'dna_pcr_date3')) {
                $table->date('dna_pcr_date3')->nullable();
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
            $table->dropColumn('immunization_penta_4');
            $table->dropColumn('immunization_pcv_4');
            $table->dropColumn('immunization_pcv_6');
            $table->dropColumn('immunization_ipv_4');
            $table->dropColumn('feeding_option1');
            $table->dropColumn('baby_outcome2');
            $table->dropColumn('hiv_ab_test_result');
            $table->dropColumn('dna_pcr2');
            $table->dropColumn('dna_pcr_result2');
            $table->dropColumn('baby_arv2');
            $table->dropColumn('immunization_mr1');
            $table->dropColumn('baby_outcome3');
            $table->dropColumn('hiv_ab_test_result1');
            $table->dropColumn('dna_pcr3');
            $table->dropColumn('dna_pcr_date3');
            $table->dropColumn('baby_arv3');
            $table->dropColumn('feeding_option3');
            
        });

    }
}
