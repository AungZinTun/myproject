<?php

use Illuminate\Database\Seeder;

class PatientSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'user_id' => 1, 'township_id' => 1, 'mpi_code' => null, 'date_enrolled' => '2018-12-15', 'pmct_code' => '12', 'name' => '1', 'dob' => '2018-12-06', 'address' => 'adddress 1', 'gravida' => 1, 'parity' => 1, 'edd' => '2018-12-30', 'hiv_status' => '0', 'hiv_test_date' => '2018-12-30', 'hiv_test_place' => null, 'current_art_status' => '1', 'current_art_option' => '2', 'current_art_start_date' => '2018-12-30', 'current_art_unit' => null, 'regimen' => null, 'int_treatment' => 1, 'art_code' => null, 'vl_test' => 1, 'vl_test_result' => 4, 'vl_test_date' => '2018-12-30', 'previous_art_history' => 0, 'previous_art_option' => '4', 'previous_art_history_regimen' => null, 'spouse_test_date' => '2018-12-30', 'spouse_test_place' => null, 'spouse_test_result' => '0', 'spouse_art_refer' => '1', 'pregnancy_outcome' => '4', 'mod' => '1', 'dod' => '2018-12-30', 'pod' => null, 'baby' => null, 'baby_wt' => 3, 'baby_outcome' => '1', 'baby_outcome_dead_date' => '2018-12-30', 'pep' => '0', 'pep_option' => '1', 'pep_not_reason' => null, 'cpt' => '1', 'cpt_not_reason' => null, 'dna_pcr' => '0', 'dna_pcr_date' => '2018-12-30', 'dna_pcr_result' => '1', 'baby_arv' => '0', 'baby_arv_no_reason' => null, 'baby_txt_start_date' => '2018-12-30', 'txt_unit' => null, 'txt_regimen' => null, 'baby_art_code' => null, 'feeding_option' => '2', 'bf_stop_date' => '2018-11-29', 'immunization_bcg_0' => 0, 'immunization_bcg_2' => 1, 'immunization_hpt_0' => 1, 'immunization_penta_2' => 0, 'immunization_penta_4' => 0, 'immunization_penta_6' => 0, 'immunization_pcv' => 0, 'immunization_pcv_4' => 0, 'immunization_pcv_6' => 0, 'immunization_ipv' => 0, 'immunization_ipv_4' => 0, 'immunization_ipv6' => 0, 'baby_outcome1' => '1', 'dna_pcr1' => '0', 'dna_pcr_date1' => '2018-12-30', 'dna_pcr_result1' => '0', 'baby_arv1' => '0', 'feeding_option1' => '3', 'baby_outcome2' => '1', 'hiv_ab_test' => '1', 'hiv_ab_test_date' => '2018-12-30', 'hiv_ab_test_not_reason' => null, 'hiv_ab_test_result' => '1', 'dna_pcr2' => null, 'dna_pcr_date2' => '2018-12-30', 'dna_pcr_result2' => null, 'baby_arv2' => '0', 'feeding_option2' => '3', 'immunization_mr' => 1, 'immunization_mr1' => 1, 'immunization_je' => 0, 'baby_outcome3' => '0', 'hiv_ab_test1' => null, 'hiv_ab_test_date1' => '2018-12-30', 'hiv_ab_test_not_reason1' => null, 'hiv_ab_test_result1' => '0', 'dna_pcr3' => '0', 'dna_pcr_date3' => '2018-12-30', 'dna_pcr_result3' => '0', 'baby_arv3' => '0', 'feeding_option3' => '3',],
            ['id' => 2, 'user_id' => 1, 'township_id' => 2, 'mpi_code' => 'aasd', 'date_enrolled' => '2018-11-28', 'pmct_code' => 'asdf', 'name' => 'asdf', 'dob' => '2018-12-19', 'address' => 'adfdf', 'gravida' => null, 'parity' => null, 'edd' => '2018-12-12', 'hiv_status' => '0', 'hiv_test_date' => '', 'hiv_test_place' => null, 'current_art_status' => null, 'current_art_option' => null, 'current_art_start_date' => '', 'current_art_unit' => null, 'regimen' => null, 'int_treatment' => 0, 'art_code' => null, 'vl_test' => 0, 'vl_test_result' => null, 'vl_test_date' => '', 'previous_art_history' => 0, 'previous_art_option' => null, 'previous_art_history_regimen' => null, 'spouse_test_date' => '', 'spouse_test_place' => null, 'spouse_test_result' => null, 'spouse_art_refer' => null, 'pregnancy_outcome' => null, 'mod' => null, 'dod' => '', 'pod' => null, 'baby' => null, 'baby_wt' => null, 'baby_outcome' => null, 'baby_outcome_dead_date' => '', 'pep' => null, 'pep_option' => null, 'pep_not_reason' => null, 'cpt' => null, 'cpt_not_reason' => null, 'dna_pcr' => null, 'dna_pcr_date' => '', 'dna_pcr_result' => null, 'baby_arv' => null, 'baby_arv_no_reason' => null, 'baby_txt_start_date' => '', 'txt_unit' => null, 'txt_regimen' => null, 'baby_art_code' => null, 'feeding_option' => null, 'bf_stop_date' => '', 'immunization_bcg_0' => 0, 'immunization_bcg_2' => 0, 'immunization_hpt_0' => 0, 'immunization_penta_2' => 0, 'immunization_penta_4' => 0, 'immunization_penta_6' => 0, 'immunization_pcv' => 0, 'immunization_pcv_4' => 0, 'immunization_pcv_6' => 0, 'immunization_ipv' => 0, 'immunization_ipv_4' => 0, 'immunization_ipv6' => 0, 'baby_outcome1' => null, 'dna_pcr1' => null, 'dna_pcr_date1' => '', 'dna_pcr_result1' => null, 'baby_arv1' => null, 'feeding_option1' => null, 'baby_outcome2' => null, 'hiv_ab_test' => null, 'hiv_ab_test_date' => '', 'hiv_ab_test_not_reason' => null, 'hiv_ab_test_result' => null, 'dna_pcr2' => null, 'dna_pcr_date2' => '', 'dna_pcr_result2' => null, 'baby_arv2' => null, 'feeding_option2' => null, 'immunization_mr' => 0, 'immunization_mr1' => 0, 'immunization_je' => 0, 'baby_outcome3' => null, 'hiv_ab_test1' => null, 'hiv_ab_test_date1' => '', 'hiv_ab_test_not_reason1' => null, 'hiv_ab_test_result1' => null, 'dna_pcr3' => null, 'dna_pcr_date3' => '', 'dna_pcr_result3' => null, 'baby_arv3' => null, 'feeding_option3' => null,],

        ];

        foreach ($items as $item) {
            \App\Patient::create($item);
        }
    }
}