<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\DB;
use App\Patient;
use App\Charts\chartjs;
use Illuminate\Support\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(auth()->user()->role_id == 1) {

            return redirect('/dashboard');}
           
        else {
        
            return redirect('/dashboard');}
    }

    public function dashboard()
    {
        if(auth()->user()->role_id == 1) {

            $patients=Patient::where('user_id', Auth::id() )->get();

            return view('admin.dashboard');}
           
        else {
            
            
            $yearly_patient= Patient::select('id', 'date_enrolled')->where('user_id', Auth::id())  ->orderBy('date_enrolled', 'ASC')
                    ->get()
                
                    ->groupBy(function($date){
                        return Carbon::parse($date->date_enrolled)->format('Y');
                            });
                  
                    $yearCount=[];
                    $yearArr=[];
                foreach ( $yearly_patient as $key=>$value ){
                    // $yearCount[]=count($value);
                    $yearCount[$key]=count($value);
                    $yearArr[] = $key; 
                 }

            $art_status=Patient::select('id', 'current_art_status')->where('user_id', Auth::id())->orderBy('current_art_status', 'Desc') ->get()
                 ->groupBy('current_art_status');
                 foreach ($art_status as $key=>$value ){
                     $art_status[$key]=count($value);
                 }
         
                        
            // return $art_status;
        

            $chart=new chartjs;       
                $chart->labels(array_keys($yearCount));
                // $chart->dataset('On ART', 'line', $yearCount )->color('red')->backgroudColor('red');
                $chart->dataset('PMCT Positive', 'line', array_values($yearCount) )->color('pink')->backgroundColor('pink');
                $chart->options(['legend'=>(['display'=> false])]);
                $chart->height(200);
                $chart->loader(true);
                $chart->loaderColor('blue');
                $chart->type("bar");
              
            $pie=new chartjs;
            $pie->labels(['On-ART', 'Not On ART', 'Unknown']);
            $pie->dataset('My dataset', 'pie',  array_values($art_status->toarray()))->backgroundColor(['green','red','grey']);
                 $pie->type("pie");
                 $pie->reset();
                 $chart->loader(true);
                 $chart->loaderColor('blue');
                 $pie->options(['legend'=>(['display'=> false]), 'tooltips'=>(['enabled'=>true]) ]);
              

            return view('patients.dashboard', compact('chart', 'pie'));}

    }



}
