<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Patient
 *
 * @package App
 * @property string $user
 * @property string $township
 * @property string $mpi_code
 * @property string $date_enrolled
 * @property string $pmct_code
 * @property string $name
 * @property string $dob
 * @property string $address
 * @property integer $gravida
 * @property integer $parity
 * @property string $edd
 * @property string $hiv_status
 * @property string $hiv_test_date
 * @property string $hiv_test_place
 * @property string $current_art_status
 * @property string $current_art_option
 * @property string $current_art_start_date
 * @property string $current_art_unit
 * @property string $regimen
 * @property tinyInteger $int_treatment
 * @property string $art_code
 * @property tinyInteger $vl_test
 * @property integer $vl_test_result
 * @property string $vl_test_date
 * @property tinyInteger $previous_art_history
 * @property string $previous_art_option
 * @property string $previous_art_history_regimen
 * @property string $spouse_test_date
 * @property string $spouse_test_place
 * @property string $spouse_test_result
 * @property string $spouse_art_refer
 * @property string $pregnancy_outcome
 * @property string $mod
 * @property string $dod
 * @property string $pod
 * @property string $baby
 * @property integer $baby_wt
 * @property string $baby_outcome
 * @property string $baby_outcome_dead_date
 * @property string $pep
 * @property string $pep_option
 * @property string $pep_not_reason
 * @property string $cpt
 * @property string $cpt_not_reason
 * @property string $dna_pcr
 * @property string $dna_pcr_date
 * @property string $dna_pcr_result
 * @property string $baby_arv
 * @property string $baby_arv_no_reason
 * @property string $baby_txt_start_date
 * @property string $txt_unit
 * @property string $txt_regimen
 * @property string $baby_art_code
 * @property string $feeding_option
 * @property string $bf_stop_date
 * @property tinyInteger $immunization_bcg_0
 * @property tinyInteger $immunization_bcg_2
 * @property tinyInteger $immunization_hpt_0
 * @property tinyInteger $immunization_penta_2
 * @property tinyInteger $immunization_penta_4
 * @property tinyInteger $immunization_penta_6
 * @property tinyInteger $immunization_pcv
 * @property tinyInteger $immunization_pcv_4
 * @property tinyInteger $immunization_pcv_6
 * @property tinyInteger $immunization_ipv
 * @property tinyInteger $immunization_ipv_4
 * @property tinyInteger $immunization_ipv6
 * @property string $baby_outcome1
 * @property string $dna_pcr1
 * @property string $dna_pcr_date1
 * @property string $dna_pcr_result1
 * @property string $baby_arv1
 * @property string $feeding_option1
 * @property string $baby_outcome2
 * @property string $hiv_ab_test
 * @property string $hiv_ab_test_date
 * @property string $hiv_ab_test_not_reason
 * @property string $hiv_ab_test_result
 * @property string $dna_pcr2
 * @property string $dna_pcr_date2
 * @property string $dna_pcr_result2
 * @property string $baby_arv2
 * @property string $feeding_option2
 * @property tinyInteger $immunization_mr
 * @property tinyInteger $immunization_mr1
 * @property tinyInteger $immunization_je
 * @property string $baby_outcome3
 * @property string $hiv_ab_test1
 * @property string $hiv_ab_test_date1
 * @property string $hiv_ab_test_not_reason1
 * @property string $hiv_ab_test_result1
 * @property string $dna_pcr3
 * @property string $dna_pcr_date3
 * @property string $dna_pcr_result3
 * @property string $baby_arv3
 * @property string $feeding_option3
*/
class Patient extends Model
{
    use SoftDeletes;

    protected $fillable = ['mpi_code', 'date_enrolled', 'pmct_code', 'name', 'dob', 'address', 'gravida', 'parity', 'edd', 'hiv_status', 'hiv_test_date', 'hiv_test_place', 'current_art_status', 'current_art_option', 'current_art_start_date', 'current_art_unit', 'regimen', 'int_treatment', 'art_code', 'vl_test', 'vl_test_result', 'vl_test_date', 'previous_art_history', 'previous_art_option', 'previous_art_history_regimen', 'spouse_test_date', 'spouse_test_place', 'spouse_test_result', 'spouse_art_refer', 'pregnancy_outcome', 'mod', 'dod', 'pod', 'baby', 'baby_wt', 'baby_outcome', 'baby_outcome_dead_date', 'pep', 'pep_option', 'pep_not_reason', 'cpt', 'cpt_not_reason', 'dna_pcr', 'dna_pcr_date', 'dna_pcr_result', 'baby_arv', 'baby_arv_no_reason', 'baby_txt_start_date', 'txt_unit', 'txt_regimen', 'baby_art_code', 'feeding_option', 'bf_stop_date', 'immunization_bcg_0', 'immunization_bcg_2', 'immunization_hpt_0', 'immunization_penta_2', 'immunization_penta_4', 'immunization_penta_6', 'immunization_pcv', 'immunization_pcv_4', 'immunization_pcv_6', 'immunization_ipv', 'immunization_ipv_4', 'immunization_ipv6', 'baby_outcome1', 'dna_pcr1', 'dna_pcr_date1', 'dna_pcr_result1', 'baby_arv1', 'feeding_option1', 'baby_outcome2', 'hiv_ab_test', 'hiv_ab_test_date', 'hiv_ab_test_not_reason', 'hiv_ab_test_result', 'dna_pcr2', 'dna_pcr_date2', 'dna_pcr_result2', 'baby_arv2', 'feeding_option2', 'immunization_mr', 'immunization_mr1', 'immunization_je', 'baby_outcome3', 'hiv_ab_test1', 'hiv_ab_test_date1', 'hiv_ab_test_not_reason1', 'hiv_ab_test_result1', 'dna_pcr3', 'dna_pcr_date3', 'dna_pcr_result3', 'baby_arv3', 'feeding_option3', 'user_id', 'township_id'];
    protected $hidden = [];
    
    
    public static function boot()
    {
        parent::boot();

        Patient::observe(new \App\Observers\UserActionsObserver);
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setUserIdAttribute($input)
    {
        $this->attributes['user_id'] = $input ? $input : null;
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setTownshipIdAttribute($input)
    {
        $this->attributes['township_id'] = $input ? $input : null;
    }

    /**
     * Set attribute to date format
     * @param $input
     */
    public function setDateEnrolledAttribute($input)
    {
        if ($input != null && $input != '') {
            $this->attributes['date_enrolled'] = Carbon::createFromFormat(config('app.date_format'), $input)->format('Y-m-d');
        } else {
            $this->attributes['date_enrolled'] = null;
        }
    }

    /**
     * Get attribute from date format
     * @param $input
     *
     * @return string
     */
    public function getDateEnrolledAttribute($input)
    {
        $zeroDate = str_replace(['Y', 'm', 'd'], ['0000', '00', '00'], config('app.date_format'));

        if ($input != $zeroDate && $input != null) {
            return Carbon::createFromFormat('Y-m-d', $input)->format(config('app.date_format'));
        } else {
            return '';
        }
    }

    /**
     * Set attribute to date format
     * @param $input
     */
    public function setDobAttribute($input)
    {
        if ($input != null && $input != '') {
            $this->attributes['dob'] = Carbon::createFromFormat(config('app.date_format'), $input)->format('Y-m-d');
        } else {
            $this->attributes['dob'] = null;
        }
    }

    /**
     * Get attribute from date format
     * @param $input
     *
     * @return string
     */
    public function getDobAttribute($input)
    {
        $zeroDate = str_replace(['Y', 'm', 'd'], ['0000', '00', '00'], config('app.date_format'));

        if ($input != $zeroDate && $input != null) {
            return Carbon::createFromFormat('Y-m-d', $input)->format(config('app.date_format'));
        } else {
            return '';
        }
    }

    /**
     * Set attribute to money format
     * @param $input
     */
    public function setGravidaAttribute($input)
    {
        $this->attributes['gravida'] = $input ? $input : null;
    }

    /**
     * Set attribute to money format
     * @param $input
     */
    public function setParityAttribute($input)
    {
        $this->attributes['parity'] = $input ? $input : null;
    }

    /**
     * Set attribute to date format
     * @param $input
     */
    public function setEddAttribute($input)
    {
        if ($input != null && $input != '') {
            $this->attributes['edd'] = Carbon::createFromFormat(config('app.date_format'), $input)->format('Y-m-d');
        } else {
            $this->attributes['edd'] = null;
        }
    }

    /**
     * Get attribute from date format
     * @param $input
     *
     * @return string
     */
    public function getEddAttribute($input)
    {
        $zeroDate = str_replace(['Y', 'm', 'd'], ['0000', '00', '00'], config('app.date_format'));

        if ($input != $zeroDate && $input != null) {
            return Carbon::createFromFormat('Y-m-d', $input)->format(config('app.date_format'));
        } else {
            return '';
        }
    }

    /**
     * Set attribute to date format
     * @param $input
     */
    public function setHivTestDateAttribute($input)
    {
        if ($input != null && $input != '') {
            $this->attributes['hiv_test_date'] = Carbon::createFromFormat(config('app.date_format'), $input)->format('Y-m-d');
        } else {
            $this->attributes['hiv_test_date'] = null;
        }
    }

    /**
     * Get attribute from date format
     * @param $input
     *
     * @return string
     */
    public function getHivTestDateAttribute($input)
    {
        $zeroDate = str_replace(['Y', 'm', 'd'], ['0000', '00', '00'], config('app.date_format'));

        if ($input != $zeroDate && $input != null) {
            return Carbon::createFromFormat('Y-m-d', $input)->format(config('app.date_format'));
        } else {
            return '';
        }
    }

    /**
     * Set attribute to date format
     * @param $input
     */
    public function setCurrentArtStartDateAttribute($input)
    {
        if ($input != null && $input != '') {
            $this->attributes['current_art_start_date'] = Carbon::createFromFormat(config('app.date_format'), $input)->format('Y-m-d');
        } else {
            $this->attributes['current_art_start_date'] = null;
        }
    }

    /**
     * Get attribute from date format
     * @param $input
     *
     * @return string
     */
    public function getCurrentArtStartDateAttribute($input)
    {
        $zeroDate = str_replace(['Y', 'm', 'd'], ['0000', '00', '00'], config('app.date_format'));

        if ($input != $zeroDate && $input != null) {
            return Carbon::createFromFormat('Y-m-d', $input)->format(config('app.date_format'));
        } else {
            return '';
        }
    }

    /**
     * Set attribute to money format
     * @param $input
     */
    public function setVlTestResultAttribute($input)
    {
        $this->attributes['vl_test_result'] = $input ? $input : null;
    }

    /**
     * Set attribute to date format
     * @param $input
     */
    public function setVlTestDateAttribute($input)
    {
        if ($input != null && $input != '') {
            $this->attributes['vl_test_date'] = Carbon::createFromFormat(config('app.date_format'), $input)->format('Y-m-d');
        } else {
            $this->attributes['vl_test_date'] = null;
        }
    }

    /**
     * Get attribute from date format
     * @param $input
     *
     * @return string
     */
    public function getVlTestDateAttribute($input)
    {
        $zeroDate = str_replace(['Y', 'm', 'd'], ['0000', '00', '00'], config('app.date_format'));

        if ($input != $zeroDate && $input != null) {
            return Carbon::createFromFormat('Y-m-d', $input)->format(config('app.date_format'));
        } else {
            return '';
        }
    }

    /**
     * Set attribute to date format
     * @param $input
     */
    public function setSpouseTestDateAttribute($input)
    {
        if ($input != null && $input != '') {
            $this->attributes['spouse_test_date'] = Carbon::createFromFormat(config('app.date_format'), $input)->format('Y-m-d');
        } else {
            $this->attributes['spouse_test_date'] = null;
        }
    }

    /**
     * Get attribute from date format
     * @param $input
     *
     * @return string
     */
    public function getSpouseTestDateAttribute($input)
    {
        $zeroDate = str_replace(['Y', 'm', 'd'], ['0000', '00', '00'], config('app.date_format'));

        if ($input != $zeroDate && $input != null) {
            return Carbon::createFromFormat('Y-m-d', $input)->format(config('app.date_format'));
        } else {
            return '';
        }
    }

    /**
     * Set attribute to date format
     * @param $input
     */
    public function setDodAttribute($input)
    {
        if ($input != null && $input != '') {
            $this->attributes['dod'] = Carbon::createFromFormat(config('app.date_format'), $input)->format('Y-m-d');
        } else {
            $this->attributes['dod'] = null;
        }
    }

    /**
     * Get attribute from date format
     * @param $input
     *
     * @return string
     */
    public function getDodAttribute($input)
    {
        $zeroDate = str_replace(['Y', 'm', 'd'], ['0000', '00', '00'], config('app.date_format'));

        if ($input != $zeroDate && $input != null) {
            return Carbon::createFromFormat('Y-m-d', $input)->format(config('app.date_format'));
        } else {
            return '';
        }
    }

    /**
     * Set attribute to money format
     * @param $input
     */
    public function setBabyWtAttribute($input)
    {
        $this->attributes['baby_wt'] = $input ? $input : null;
    }

    /**
     * Set attribute to date format
     * @param $input
     */
    public function setBabyOutcomeDeadDateAttribute($input)
    {
        if ($input != null && $input != '') {
            $this->attributes['baby_outcome_dead_date'] = Carbon::createFromFormat(config('app.date_format'), $input)->format('Y-m-d');
        } else {
            $this->attributes['baby_outcome_dead_date'] = null;
        }
    }

    /**
     * Get attribute from date format
     * @param $input
     *
     * @return string
     */
    public function getBabyOutcomeDeadDateAttribute($input)
    {
        $zeroDate = str_replace(['Y', 'm', 'd'], ['0000', '00', '00'], config('app.date_format'));

        if ($input != $zeroDate && $input != null) {
            return Carbon::createFromFormat('Y-m-d', $input)->format(config('app.date_format'));
        } else {
            return '';
        }
    }

    /**
     * Set attribute to date format
     * @param $input
     */
    public function setDnaPcrDateAttribute($input)
    {
        if ($input != null && $input != '') {
            $this->attributes['dna_pcr_date'] = Carbon::createFromFormat(config('app.date_format'), $input)->format('Y-m-d');
        } else {
            $this->attributes['dna_pcr_date'] = null;
        }
    }

    /**
     * Get attribute from date format
     * @param $input
     *
     * @return string
     */
    public function getDnaPcrDateAttribute($input)
    {
        $zeroDate = str_replace(['Y', 'm', 'd'], ['0000', '00', '00'], config('app.date_format'));

        if ($input != $zeroDate && $input != null) {
            return Carbon::createFromFormat('Y-m-d', $input)->format(config('app.date_format'));
        } else {
            return '';
        }
    }

    /**
     * Set attribute to date format
     * @param $input
     */
    public function setBabyTxtStartDateAttribute($input)
    {
        if ($input != null && $input != '') {
            $this->attributes['baby_txt_start_date'] = Carbon::createFromFormat(config('app.date_format'), $input)->format('Y-m-d');
        } else {
            $this->attributes['baby_txt_start_date'] = null;
        }
    }

    /**
     * Get attribute from date format
     * @param $input
     *
     * @return string
     */
    public function getBabyTxtStartDateAttribute($input)
    {
        $zeroDate = str_replace(['Y', 'm', 'd'], ['0000', '00', '00'], config('app.date_format'));

        if ($input != $zeroDate && $input != null) {
            return Carbon::createFromFormat('Y-m-d', $input)->format(config('app.date_format'));
        } else {
            return '';
        }
    }

    /**
     * Set attribute to date format
     * @param $input
     */
    public function setBfStopDateAttribute($input)
    {
        if ($input != null && $input != '') {
            $this->attributes['bf_stop_date'] = Carbon::createFromFormat(config('app.date_format'), $input)->format('Y-m-d');
        } else {
            $this->attributes['bf_stop_date'] = null;
        }
    }

    /**
     * Get attribute from date format
     * @param $input
     *
     * @return string
     */
    public function getBfStopDateAttribute($input)
    {
        $zeroDate = str_replace(['Y', 'm', 'd'], ['0000', '00', '00'], config('app.date_format'));

        if ($input != $zeroDate && $input != null) {
            return Carbon::createFromFormat('Y-m-d', $input)->format(config('app.date_format'));
        } else {
            return '';
        }
    }

    /**
     * Set attribute to date format
     * @param $input
     */
    public function setDnaPcrDate1Attribute($input)
    {
        if ($input != null && $input != '') {
            $this->attributes['dna_pcr_date1'] = Carbon::createFromFormat(config('app.date_format'), $input)->format('Y-m-d');
        } else {
            $this->attributes['dna_pcr_date1'] = null;
        }
    }

    /**
     * Get attribute from date format
     * @param $input
     *
     * @return string
     */
    public function getDnaPcrDate1Attribute($input)
    {
        $zeroDate = str_replace(['Y', 'm', 'd'], ['0000', '00', '00'], config('app.date_format'));

        if ($input != $zeroDate && $input != null) {
            return Carbon::createFromFormat('Y-m-d', $input)->format(config('app.date_format'));
        } else {
            return '';
        }
    }

    /**
     * Set attribute to date format
     * @param $input
     */
    public function setHivAbTestDateAttribute($input)
    {
        if ($input != null && $input != '') {
            $this->attributes['hiv_ab_test_date'] = Carbon::createFromFormat(config('app.date_format'), $input)->format('Y-m-d');
        } else {
            $this->attributes['hiv_ab_test_date'] = null;
        }
    }

    /**
     * Get attribute from date format
     * @param $input
     *
     * @return string
     */
    public function getHivAbTestDateAttribute($input)
    {
        $zeroDate = str_replace(['Y', 'm', 'd'], ['0000', '00', '00'], config('app.date_format'));

        if ($input != $zeroDate && $input != null) {
            return Carbon::createFromFormat('Y-m-d', $input)->format(config('app.date_format'));
        } else {
            return '';
        }
    }

    /**
     * Set attribute to date format
     * @param $input
     */
    public function setDnaPcrDate2Attribute($input)
    {
        if ($input != null && $input != '') {
            $this->attributes['dna_pcr_date2'] = Carbon::createFromFormat(config('app.date_format'), $input)->format('Y-m-d');
        } else {
            $this->attributes['dna_pcr_date2'] = null;
        }
    }

    /**
     * Get attribute from date format
     * @param $input
     *
     * @return string
     */
    public function getDnaPcrDate2Attribute($input)
    {
        $zeroDate = str_replace(['Y', 'm', 'd'], ['0000', '00', '00'], config('app.date_format'));

        if ($input != $zeroDate && $input != null) {
            return Carbon::createFromFormat('Y-m-d', $input)->format(config('app.date_format'));
        } else {
            return '';
        }
    }

    /**
     * Set attribute to date format
     * @param $input
     */
    public function setHivAbTestDate1Attribute($input)
    {
        if ($input != null && $input != '') {
            $this->attributes['hiv_ab_test_date1'] = Carbon::createFromFormat(config('app.date_format'), $input)->format('Y-m-d');
        } else {
            $this->attributes['hiv_ab_test_date1'] = null;
        }
    }

    /**
     * Get attribute from date format
     * @param $input
     *
     * @return string
     */
    public function getHivAbTestDate1Attribute($input)
    {
        $zeroDate = str_replace(['Y', 'm', 'd'], ['0000', '00', '00'], config('app.date_format'));

        if ($input != $zeroDate && $input != null) {
            return Carbon::createFromFormat('Y-m-d', $input)->format(config('app.date_format'));
        } else {
            return '';
        }
    }

    /**
     * Set attribute to date format
     * @param $input
     */
    public function setDnaPcrDate3Attribute($input)
    {
        if ($input != null && $input != '') {
            $this->attributes['dna_pcr_date3'] = Carbon::createFromFormat(config('app.date_format'), $input)->format('Y-m-d');
        } else {
            $this->attributes['dna_pcr_date3'] = null;
        }
    }

    /**
     * Get attribute from date format
     * @param $input
     *
     * @return string
     */
    public function getDnaPcrDate3Attribute($input)
    {
        $zeroDate = str_replace(['Y', 'm', 'd'], ['0000', '00', '00'], config('app.date_format'));

        if ($input != $zeroDate && $input != null) {
            return Carbon::createFromFormat('Y-m-d', $input)->format(config('app.date_format'));
        } else {
            return '';
        }
    }
    
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    
    public function township()
    {
        return $this->belongsTo(Township::class, 'township_id');
    }
    
}
