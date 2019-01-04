<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Patient
 * @package App\Models
 * @version December 30, 2018, 12:21 pm UTC
 *
 * @property integer user_id
 * @property integer township_id
 * @property string mpi_code
 * @property date date_enrolled
 * @property string pmct_code
 * @property string name
 * @property date dob
 * @property string address
 * @property integer gravida
 * @property integer parity
 * @property date edd
 * @property string hiv_status
 * @property date hiv_test_date
 * @property string hiv_test_place
 * @property string current_art_option
 * @property string current_art_status
 * @property date current_art_start_date
 * @property string current_art_unit
 * @property string regimen
 * @property boolean int_treatment
 * @property string art_code
 * @property boolean vl_test
 * @property integer vl_test_result
 * @property date vl_test_date
 * @property boolean previous_art_history
 * @property string previous_art_option
 * @property string previous_art_history_regimen
 * @property date spouse_test_date
 * @property string spouse_test_place
 * @property string spouse_test_result
 * @property string spouse_art_refer
 * @property string pregnancy_outcome
 * @property string mod
 * @property date dod
 * @property string pod
 * @property string baby
 * @property integer baby_wt
 * @property string baby_outcome
 * @property date baby_outcome_dead_date
 * @property string pep
 * @property string pep_option
 * @property string pep_not_reason
 * @property string cpt
 * @property string cpt_not_reason
 * @property string dna_pcr
 * @property date dna_pcr_date
 * @property string dna_pcr_result
 * @property string baby_arv
 * @property string baby_arv_no_reason
 * @property date baby_txt_start_date
 * @property string txt_unit
 * @property string txt_regimen
 * @property string baby_art_code
 * @property string feeding_option
 * @property date bf_stop_date
 * @property boolean immunization_bcg_0
 * @property boolean immunization_bcg_2
 * @property boolean immunization_hpt_0
 * @property boolean immunization_penta_2
 * @property boolean immunization_penta_6
 * @property boolean immunization_pcv
 * @property boolean immunization_ipv
 * @property boolean immunization_ipv6
 * @property string baby_outcome1
 * @property string dna_pcr1
 * @property date dna_pcr_date1
 * @property string dna_pcr_result1
 * @property string baby_arv1
 * @property string hiv_ab_test
 * @property date hiv_ab_test_date
 * @property string hiv_ab_test_not_reason
 * @property date dna_pcr_date2
 * @property string feeding_option2
 * @property boolean immunization_mr
 * @property boolean immunization_je
 * @property string hiv_ab_test1
 * @property date hiv_ab_test_date1
 * @property string hiv_ab_test_not_reason1
 * @property string dna_pcr_result3
 * @property boolean immunization_penta_4
 * @property boolean immunization_pcv_4
 * @property boolean immunization_ipv_4
 * @property string feeding_option1
 * @property string baby_outcome2
 * @property string hiv_ab_test_result
 * @property string dna_pcr2
 * @property string baby_arv2
 * @property boolean immunization_mr1
 * @property date dna_pcr_date3
 * @property boolean immunization_pcv_6
 * @property string dna_pcr_result2
 * @property string baby_outcome3
 * @property string dna_pcr3
 * @property string baby_arv3
 * @property string feeding_option3
 * @property string hiv_ab_test_result1
 */
class Patient extends Model
{
    use SoftDeletes;

    public $table = 'patients';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'township_id' => 'integer',
        'mpi_code' => 'string',
        'date_enrolled' => 'date',
        'pmct_code' => 'string',
        'name' => 'string',
        'dob' => 'date',
        'address' => 'string',
        'gravida' => 'integer',
        'parity' => 'integer',
        'edd' => 'date',
        'hiv_status' => 'string',
        'hiv_test_date' => 'date',
        'hiv_test_place' => 'string',
        'current_art_option' => 'string',
        'current_art_status' => 'string',
        'current_art_start_date' => 'date',
        'current_art_unit' => 'string',
        'regimen' => 'string',
        'int_treatment' => 'boolean',
        'art_code' => 'string',
        'vl_test' => 'boolean',
        'vl_test_result' => 'integer',
        'vl_test_date' => 'date',
        'previous_art_history' => 'boolean',
        'previous_art_option' => 'string',
        'previous_art_history_regimen' => 'string',
        'spouse_test_date' => 'date',
        'spouse_test_place' => 'string',
        'spouse_test_result' => 'string',
        'spouse_art_refer' => 'string',
        'pregnancy_outcome' => 'string',
        'mod' => 'string',
        'dod' => 'date',
        'pod' => 'string',
        'baby' => 'string',
        'baby_wt' => 'integer',
        'baby_outcome' => 'string',
        'baby_outcome_dead_date' => 'date',
        'pep' => 'string',
        'pep_option' => 'string',
        'pep_not_reason' => 'string',
        'cpt' => 'string',
        'cpt_not_reason' => 'string',
        'dna_pcr' => 'string',
        'dna_pcr_date' => 'date',
        'dna_pcr_result' => 'string',
        'baby_arv' => 'string',
        'baby_arv_no_reason' => 'string',
        'baby_txt_start_date' => 'date',
        'txt_unit' => 'string',
        'txt_regimen' => 'string',
        'baby_art_code' => 'string',
        'feeding_option' => 'string',
        'bf_stop_date' => 'date',
        'immunization_bcg_0' => 'boolean',
        'immunization_bcg_2' => 'boolean',
        'immunization_hpt_0' => 'boolean',
        'immunization_penta_2' => 'boolean',
        'immunization_penta_6' => 'boolean',
        'immunization_pcv' => 'boolean',
        'immunization_ipv' => 'boolean',
        'immunization_ipv6' => 'boolean',
        'baby_outcome1' => 'string',
        'dna_pcr1' => 'string',
        'dna_pcr_date1' => 'date',
        'dna_pcr_result1' => 'string',
        'baby_arv1' => 'string',
        'hiv_ab_test' => 'string',
        'hiv_ab_test_date' => 'date',
        'hiv_ab_test_not_reason' => 'string',
        'dna_pcr_date2' => 'date',
        'feeding_option2' => 'string',
        'immunization_mr' => 'boolean',
        'immunization_je' => 'boolean',
        'hiv_ab_test1' => 'string',
        'hiv_ab_test_date1' => 'date',
        'hiv_ab_test_not_reason1' => 'string',
        'dna_pcr_result3' => 'string',
        'immunization_penta_4' => 'boolean',
        'immunization_pcv_4' => 'boolean',
        'immunization_ipv_4' => 'boolean',
        'feeding_option1' => 'string',
        'baby_outcome2' => 'string',
        'hiv_ab_test_result' => 'string',
        'dna_pcr2' => 'string',
        'baby_arv2' => 'string',
        'immunization_mr1' => 'boolean',
        'dna_pcr_date3' => 'date',
        'immunization_pcv_6' => 'boolean',
        'dna_pcr_result2' => 'string',
        'baby_outcome3' => 'string',
        'dna_pcr3' => 'string',
        'baby_arv3' => 'string',
        'feeding_option3' => 'string',
        'hiv_ab_test_result1' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
