<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Patient;

class SystemCalendarController extends Controller
{
    public function index() 
    {
        $events = []; 

        // foreach (\App\Patient::all() as $patient) { 
        //    $crudFieldValue = $patient->getOriginal('date_enrolled'); 

        //    if (! $crudFieldValue) {
        //        continue;
        //    }

        //    $eventLabel     = $patient->name; 
        //    $prefix         = ''; 
        //    $suffix         = 'enrolled'; 
        //    $dataFieldValue = trim($prefix . " " . $eventLabel . " " . $suffix); 
        //    $events[]       = [ 
        //         'title' => $dataFieldValue, 
        //         'start' => $crudFieldValue, 
        //         'url'   => route('admin.patients.show', $patient->id), 
        //         'color'=> 'lightgrey'
        //    ]; 
        // } 

        foreach (\App\Patient::all() as $patient) { 
           $crudFieldValue = $patient->getOriginal('edd'); 

           if (! $crudFieldValue) {
               continue;
           }

           $eventLabel     = $patient->name; 
           $prefix         = ''; 
           $suffix         = "'s EDD"; 
           $dataFieldValue = trim($prefix . " " . $eventLabel . " " . $suffix); 
           $events[]       = [ 
                'title' => $dataFieldValue, 
                'start' => $crudFieldValue, 
                'url'   => route('admin.patients.edit', $patient->id),
                'color'=>'orange'
           ]; 
        } 

        foreach (\App\Patient::all() as $patient) { 
            $crudFieldValue = $patient->getOriginal('dod'); 
 
            if (! $crudFieldValue) {
                continue;
            }
 
            $eventLabel     = $patient->name; 
            $prefix         = ''; 
            $suffix         = " delivered"; 
            $dataFieldValue = trim($prefix . " " . $eventLabel . " " . $suffix); 
            $events[]       = [ 
                 'title' => $dataFieldValue, 
                 'start' => $crudFieldValue, 
                 'url'   => route('admin.patients.edit', $patient->id),
                 'color' => 'green'
            ]; 
         } 

         foreach (Patient::all() as $patient) { 

            $dod = $patient->getOriginal('dod');
            $eid_due = '90';
            $crudFieldValue =  date('Y-m-d', strtotime($dod.' + '.$eid_due.'days'));
            if ($crudFieldValue <= now() ) {$color='red';} else { $color='lightgrey';}
 
            if (! $crudFieldValue) {
                continue;
            }
 
            $eventLabel     = $patient->name; 
            $prefix         = ''; 
            $suffix         = " EID"; 
            $dataFieldValue = trim($prefix . " " . $eventLabel . " " . $suffix); 
            $events[]       = [ 
                 'title' => $dataFieldValue, 
                 'start' => $crudFieldValue, 
                 'url'   => route('admin.patients.edit', $patient->id),
                 'color' => $color,
            ]; 
         } 




       return view('admin.calendar' , compact('events')); 
    }




}
