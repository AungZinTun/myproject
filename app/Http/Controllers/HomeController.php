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

            $year= Patient::select('id', 'date_enrolled')  ->orderBy('date_enrolled', 'ASC')
            ->get()
          
            ->groupBy(function($date){
                return Carbon::parse($date->date_enrolled)->format('Y');
                    });
                    $yearCount=[];
                    $yearArr=[];
                    foreach ( $year as $key=> $value ){
                        $yearCount[]=count($value);
                        $yearly_table[$key]=count($value);
                        $yearArr[] = $key; 
                
            }
         
                        
            // return $yearly_table;
        

            $chart=new chartjs;
         
       
            $chart->labels($yearArr);
            $chart->dataset('PMCT Positive', 'line', $yearCount )->color('pink')->backgroundColor('pink');
            $chart->reset();
            $chart->loader(true);
             $chart->loaderColor('blue');
             $chart->type("bar");
             $chart->title("Trend of PMCT Positive");
            

          



            return view('patients.dashboard', compact('chart', 'yearly_table'));}

    }



}
