<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1546124250PatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('patients', function (Blueprint $table) {
            
if (!Schema::hasColumn('patients', 'baby_art_code')) {
                $table->string('baby_art_code')->nullable();
                }
if (!Schema::hasColumn('patients', 'feeding_option')) {
                $table->string('feeding_option')->nullable();
                }
if (!Schema::hasColumn('patients', 'bf_stop_date')) {
                $table->date('bf_stop_date')->nullable();
                }
if (!Schema::hasColumn('patients', 'immunization_bcg_0')) {
                $table->tinyInteger('immunization_bcg_0')->nullable()->default('0');
                }
if (!Schema::hasColumn('patients', 'immunization_bcg_2')) {
                $table->tinyInteger('immunization_bcg_2')->nullable()->default('0');
                }
if (!Schema::hasColumn('patients', 'immunization_hpt_0')) {
                $table->tinyInteger('immunization_hpt_0')->nullable()->default('0');
                }
if (!Schema::hasColumn('patients', 'immunization_penta_2')) {
                $table->tinyInteger('immunization_penta_2')->nullable()->default('0');
                }
if (!Schema::hasColumn('patients', 'immunization_penta_6')) {
                $table->tinyInteger('immunization_penta_6')->nullable()->default('0');
                }
if (!Schema::hasColumn('patients', 'immunization_pcv')) {
                $table->tinyInteger('immunization_pcv')->nullable()->default('0');
                }
if (!Schema::hasColumn('patients', 'immunization_ipv')) {
                $table->tinyInteger('immunization_ipv')->nullable()->default('0');
                }
if (!Schema::hasColumn('patients', 'immunization_ipv6')) {
                $table->tinyInteger('immunization_ipv6')->nullable()->default('0');
                }
if (!Schema::hasColumn('patients', 'baby_outcome1')) {
                $table->string('baby_outcome1')->nullable();
                }
if (!Schema::hasColumn('patients', 'dna_pcr1')) {
                $table->string('dna_pcr1')->nullable();
                }
if (!Schema::hasColumn('patients', 'dna_pcr_date1')) {
                $table->date('dna_pcr_date1')->nullable();
                }
if (!Schema::hasColumn('patients', 'dna_pcr_result1')) {
                $table->string('dna_pcr_result1')->nullable();
                }
if (!Schema::hasColumn('patients', 'baby_arv1')) {
                $table->string('baby_arv1')->nullable();
                }
if (!Schema::hasColumn('patients', 'hiv_ab_test')) {
                $table->string('hiv_ab_test')->nullable();
                }
if (!Schema::hasColumn('patients', 'hiv_ab_test_date')) {
                $table->date('hiv_ab_test_date')->nullable();
                }
if (!Schema::hasColumn('patients', 'hiv_ab_test_not_reason')) {
                $table->string('hiv_ab_test_not_reason')->nullable();
                }
if (!Schema::hasColumn('patients', 'dna_pcr_date2')) {
                $table->date('dna_pcr_date2')->nullable();
                }
if (!Schema::hasColumn('patients', 'feeding_option2')) {
                $table->string('feeding_option2')->nullable();
                }
if (!Schema::hasColumn('patients', 'immunization_mr')) {
                $table->tinyInteger('immunization_mr')->nullable()->default('0');
                }
if (!Schema::hasColumn('patients', 'immunization_je')) {
                $table->tinyInteger('immunization_je')->nullable()->default('0');
                }
if (!Schema::hasColumn('patients', 'hiv_ab_test1')) {
                $table->string('hiv_ab_test1')->nullable();
                }
if (!Schema::hasColumn('patients', 'hiv_ab_test_date1')) {
                $table->date('hiv_ab_test_date1')->nullable();
                }
if (!Schema::hasColumn('patients', 'hiv_ab_test_not_reason1')) {
                $table->string('hiv_ab_test_not_reason1')->nullable();
                }
if (!Schema::hasColumn('patients', 'dna_pcr_result3')) {
                $table->string('dna_pcr_result3')->nullable();
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
            $table->dropColumn('baby_art_code');
            $table->dropColumn('feeding_option');
            $table->dropColumn('bf_stop_date');
            $table->dropColumn('immunization_bcg_0');
            $table->dropColumn('immunization_bcg_2');
            $table->dropColumn('immunization_hpt_0');
            $table->dropColumn('immunization_penta_2');
            $table->dropColumn('immunization_penta_4');
            $table->dropColumn('immunization_penta_6');
            $table->dropColumn('immunization_pcv');
            $table->dropColumn('immunization_pcv_4');
            $table->dropColumn('immunization_pcv_6');
            $table->dropColumn('immunization_ipv');
            $table->dropColumn('immunization_ipv_4');
            $table->dropColumn('immunization_ipv6');
            $table->dropColumn('baby_outcome1');
            $table->dropColumn('dna_pcr1');
            $table->dropColumn('dna_pcr_date1');
            $table->dropColumn('dna_pcr_result1');
            $table->dropColumn('baby_arv1');
            $table->dropColumn('feeding_option1');
            $table->dropColumn('baby_outcome2');
            $table->dropColumn('hiv_ab_test');
            $table->dropColumn('hiv_ab_test_date');
            $table->dropColumn('hiv_ab_test_not_reason');
            $table->dropColumn('hiv_ab_test_result');
            $table->dropColumn('dna_pcr2');
            $table->dropColumn('dna_pcr_date2');
            $table->dropColumn('dna_pcr_result2');
            $table->dropColumn('baby_arv2');
            $table->dropColumn('feeding_option2');
            $table->dropColumn('immunization_mr');
            $table->dropColumn('immunization_mr1');
            $table->dropColumn('immunization_je');
            $table->dropColumn('baby_outcome3');
            $table->dropColumn('hiv_ab_test1');
            $table->dropColumn('hiv_ab_test_date1');
            $table->dropColumn('hiv_ab_test_not_reason1');
            $table->dropColumn('hiv_ab_test_result1');
            $table->dropColumn('dna_pcr3');
            $table->dropColumn('dna_pcr_date3');
            $table->dropColumn('dna_pcr_result3');
            $table->dropColumn('baby_arv3');
            $table->dropColumn('feeding_option3');
            
        });

    }
}
