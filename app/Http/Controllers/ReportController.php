<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class ReportController extends Controller
{
  public function index(){
    $start=Request("start");
    $end=Request("end");
    $start="2018-01-01";
      return view('patients.report', compact('start', 'end'));
  }
}
