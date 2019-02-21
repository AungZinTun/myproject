<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
use Illuminate\Support\Facades\Auth;

class ChartController extends Controller
{
    function getAllYears(){
        $month_array=array();
        $enrolled_dates= Patient::orderBy('date_enrolled', 'ASC')->where('user_id', Auth::id())->pluck('date_enrolled');
        $enrolled_dates=json_decode($enrolled_dates);
        if (!empty($enrolled_dates)){
            foreach ($enrolled_dates as $unf_date){
                $date=new\DateTime($unf_date);
                $month_n=$date->format('y');
                $month= $date->format('Y');
                $month_array[$month_n]=$month;
            }
        }
        return $month_array;
    }

    function getMonthlyPatient($month){
        $monthly_patient_count=Patient::where('user_id', Auth::id())->whereMonth('date_enrolled', $month)->get()->count();
        return $monthly_patient_count;
    }
    function getMonthlyPatients(){
        $monthly_patient_count_array=array();
        $month_array=$this->getAllYears();
        $month_name_array=array();
        if(!empty($month_array) ){
            foreach($month_array as $month_n=>$month){
                $monthly_patient_count =$this->getMonthlyPatient($month_n);
                array_push($monthly_patient_count_array, $monthly_patient_count);
                array_push($month_name_array, $month);
            }
        }
        $max_no=max( $monthly_patient_count_array );
        $max= round(($max_no+10/2)/10)*10;
        $monthly_patient_data=array(
            'Year'=>$month_name_array,
            'patients'=>$monthly_patient_count_array,
            'max'=>$max
        );
        return $monthly_patient_data;
    }
}
