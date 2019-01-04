<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1546121950PatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('patients', function (Blueprint $table) {
            
if (!Schema::hasColumn('patients', 'pregnancy_outcome')) {
                $table->string('pregnancy_outcome')->nullable();
                }
if (!Schema::hasColumn('patients', 'mod')) {
                $table->string('mod')->nullable();
                }
if (!Schema::hasColumn('patients', 'dod')) {
                $table->date('dod')->nullable();
                }
if (!Schema::hasColumn('patients', 'pod')) {
                $table->string('pod')->nullable();
                }
if (!Schema::hasColumn('patients', 'baby')) {
                $table->string('baby')->nullable();
                }
if (!Schema::hasColumn('patients', 'baby_wt')) {
                $table->integer('baby_wt')->nullable();
                }
if (!Schema::hasColumn('patients', 'baby_outcome')) {
                $table->string('baby_outcome')->nullable();
                }
if (!Schema::hasColumn('patients', 'baby_outcome_dead_date')) {
                $table->date('baby_outcome_dead_date')->nullable();
                }
if (!Schema::hasColumn('patients', 'pep')) {
                $table->string('pep')->nullable();
                }
if (!Schema::hasColumn('patients', 'pep_option')) {
                $table->string('pep_option')->nullable();
                }
if (!Schema::hasColumn('patients', 'pep_not_reason')) {
                $table->string('pep_not_reason')->nullable();
                }
if (!Schema::hasColumn('patients', 'cpt')) {
                $table->string('cpt')->nullable();
                }
if (!Schema::hasColumn('patients', 'cpt_not_reason')) {
                $table->string('cpt_not_reason')->nullable();
                }
if (!Schema::hasColumn('patients', 'dna_pcr')) {
                $table->string('dna_pcr')->nullable();
                }
if (!Schema::hasColumn('patients', 'dna_pcr_date')) {
                $table->date('dna_pcr_date')->nullable();
                }
if (!Schema::hasColumn('patients', 'dna_pcr_result')) {
                $table->string('dna_pcr_result')->nullable();
                }
if (!Schema::hasColumn('patients', 'baby_arv')) {
                $table->string('baby_arv')->nullable();
                }
if (!Schema::hasColumn('patients', 'baby_arv_no_reason')) {
                $table->string('baby_arv_no_reason')->nullable();
                }
if (!Schema::hasColumn('patients', 'baby_txt_start_date')) {
                $table->date('baby_txt_start_date')->nullable();
                }
if (!Schema::hasColumn('patients', 'txt_unit')) {
                $table->string('txt_unit')->nullable();
                }
if (!Schema::hasColumn('patients', 'txt_regimen')) {
                $table->string('txt_regimen')->nullable();
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
            $table->dropColumn('pregnancy_outcome');
            $table->dropColumn('mod');
            $table->dropColumn('dod');
            $table->dropColumn('pod');
            $table->dropColumn('baby');
            $table->dropColumn('baby_wt');
            $table->dropColumn('baby_outcome');
            $table->dropColumn('baby_outcome_dead_date');
            $table->dropColumn('pep');
            $table->dropColumn('pep_option');
            $table->dropColumn('pep_not_reason');
            $table->dropColumn('cpt');
            $table->dropColumn('cpt_not_reason');
            $table->dropColumn('dna_pcr');
            $table->dropColumn('dna_pcr_date');
            $table->dropColumn('dna_pcr_result');
            $table->dropColumn('baby_arv');
            $table->dropColumn('baby_arv_no_reason');
            $table->dropColumn('baby_txt_start_date');
            $table->dropColumn('txt_unit');
            $table->dropColumn('txt_regimen');
            
        });

    }
}
