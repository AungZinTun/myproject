<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\DB;
use App\Patient;
use App\Charts\chartjs;

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
        
            return redirect('/patients');}
    }

    public function dashboard()
    {
        if(auth()->user()->role_id == 1) {

            $patients=Patient::where('user_id', Auth::id() )->get();

            return view('admin.dashboard');}
           
        else {

            $data= DB::table('patients')
            ->groupBy('created_at')
            ->get([DB::raw('count(patients.id) as patients')]);

            $chart=new chartjs;
            $chart->labels(['One', 'Two', 'Three' , 'four']);
            $chart->dataset('My dataset 1', 'line', collect([1, 2, 1, 4]));
            $chart->reset();
            $chart->loader(true);
             $chart-> loaderColor('blue');
             $chart->type("line");


            return view('patients.dashboard', compact('chart'));}

    }



}
