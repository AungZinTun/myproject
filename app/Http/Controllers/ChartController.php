<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
class ChartController extends Controller
{
    function getAllYears(){
     
        $year= Patient::select('id', 'date_enrolled')  ->orderBy('date_enrolled', 'ASC')
        ->get()
      
        ->groupBy(function($date){
            return Carbon::parse($date->date_enrolled)->format('Y');
        });
        $yearCount=[];
        $yearArr=[];
        foreach ( $year as $key=> $value ){
            $yearCount[(int)$key]=count($value);
            $yearArr[] = $key; 
            
        }

        return $yearArr;
    }}
    
//     function getyearlyPatient($year){
//         $yearly_patient_count=Patient::whereYear('date_enrolled', $year)->get()->count();
//         return $yearly_patient_count;
//     }
//     function getyearlyPatients(){
//         $yearly_patient_count_array=array();
//         $year_array=$this->getAllYears();
//         if(!empty($year_array) ){
//             foreach($year_array as $year){
//                 $yearly_patient_count =$this->getyearlyPatient($year);
//                 array_push($yearly_patient_count_array, $yearly_patient_count);
//             }
//         }
//         $max_no=max( $yearly_patient_count_array );
//         $max= round(($max_no+10/2)/10)*10;
//         $yearly_patient_data=array(
//             'year'=>$year_array,
//             'patients'=>$yearly_patient_count_array,
//             'max'=>$max
//         );
//         return $yearly_patient_data;
//     }
// }