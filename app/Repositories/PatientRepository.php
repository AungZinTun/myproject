<?php

namespace App\Repositories;

use App\Models\Patient;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PatientRepository
 * @package App\Repositories
 * @version December 30, 2018, 12:21 pm UTC
 *
 * @method Patient findWithoutFail($id, $columns = ['*'])
 * @method Patient find($id, $columns = ['*'])
 * @method Patient first($columns = ['*'])
*/
class PatientRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'township_id',
        'mpi_code',
        'date_enrolled',
        'pmct_code',
        'name',
        'dob',
        'address',
        'gravida',
        'parity',
        'edd',
        'hiv_status',
        'hiv_test_date',
        'hiv_test_place',
        'current_art_option',
        'current_art_status',
        'current_art_start_date',
        'current_art_unit',
        'regimen',
        'int_treatment',
        'art_code',
        'vl_test',
        'vl_test_result',
        'vl_test_date',
        'previous_art_history',
        'previous_art_option',
        'previous_art_history_regimen',
        'spouse_test_date',
        'spouse_test_place',
        'spouse_test_result',
        'spouse_art_refer',
        'pregnancy_outcome',
        'mod',
        'dod',
        'pod',
        'baby',
        'baby_wt',
        'baby_outcome',
        'baby_outcome_dead_date',
        'pep',
        'pep_option',
        'pep_not_reason',
        'cpt',
        'cpt_not_reason',
        'dna_pcr',
        'dna_pcr_date',
        'dna_pcr_result',
        'baby_arv',
        'baby_arv_no_reason',
        'baby_txt_start_date',
        'txt_unit',
        'txt_regimen',
        'baby_art_code',
        'feeding_option',
        'bf_stop_date',
        'immunization_bcg_0',
        'immunization_bcg_2',
        'immunization_hpt_0',
        'immunization_penta_2',
        'immunization_penta_6',
        'immunization_pcv',
        'immunization_ipv',
        'immunization_ipv6',
        'baby_outcome1',
        'dna_pcr1',
        'dna_pcr_date1',
        'dna_pcr_result1',
        'baby_arv1',
        'hiv_ab_test',
        'hiv_ab_test_date',
        'hiv_ab_test_not_reason',
        'dna_pcr_date2',
        'feeding_option2',
        'immunization_mr',
        'immunization_je',
        'hiv_ab_test1',
        'hiv_ab_test_date1',
        'hiv_ab_test_not_reason1',
        'dna_pcr_result3',
        'immunization_penta_4',
        'immunization_pcv_4',
        'immunization_ipv_4',
        'feeding_option1',
        'baby_outcome2',
        'hiv_ab_test_result',
        'dna_pcr2',
        'baby_arv2',
        'immunization_mr1',
        'dna_pcr_date3',
        'immunization_pcv_6',
        'dna_pcr_result2',
        'baby_outcome3',
        'dna_pcr3',
        'baby_arv3',
        'feeding_option3',
        'hiv_ab_test_result1'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Patient::class;
    }
}
