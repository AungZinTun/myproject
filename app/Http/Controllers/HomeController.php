<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Patient;

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

             $patients=Patient::where('user_id', Auth::id() )->get();
            return view('patients.dashboard');}

    }



}
