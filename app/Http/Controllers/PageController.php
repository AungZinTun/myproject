<?php

namespace App\Http\Controllers;

use App\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\App;

class PageController extends Controller
{
   

    /**
     * Display a listing of Patient.
     *
     * @return \Illuminate\Http\Response
     */

    public function page1 ($id)
    {
        if (! Gate::allows('patient_edit')) {
            return abort(401);
        }
        

        $patient = Patient::findOrFail($id);

        return view('patients.page.page1', compact('patient'));
    }

   
    public function page2 ($id)
    {
        if (! Gate::allows('patient_edit')) {
            return abort(401);
        }
        

        $patient = Patient::findOrFail($id);

        return view('patients.page.page2', compact('patient'));
    }


    public function page3 ($id)
    {
        if (! Gate::allows('patient_edit')) {
            return abort(401);
        }
        


        $patient = Patient::findOrFail($id);

        return view('patients.page.page3', compact('patient'));
    }

    public function page4 ($id)
    {
        if (! Gate::allows('patient_edit')) {
            return abort(401);
        }

        $patient = Patient::findOrFail($id);

        return view('patients.page.page4', compact('patient'));
    }

    public function page5 ($id)
    {
        if (! Gate::allows('patient_edit')) {
            return abort(401);
        }
        
      
        $patient = Patient::findOrFail($id);

        return view('patients.page.page5', compact('patient'));
    }
    
    public function page6 ($id)
    {
        if (! Gate::allows('patient_edit')) {
            return abort(401);
        }

        $patient = Patient::findOrFail($id);

        return view('patients.page.page6', compact('patient'));
    }
    public function page7 ($id)
    {
        if (! Gate::allows('patient_edit')) {
            return abort(401);
        }

        $patient = Patient::findOrFail($id);

        return view('patients.page.page7', compact('patient'));
    }
    public function page8 ($id)
    {
        if (! Gate::allows('patient_edit')) {
            return abort(401);
        }

        $patient = Patient::findOrFail($id);

        return view('patients.page.page8', compact('patient'));
    }
    public function page9 ($id)
    {
        if (! Gate::allows('patient_edit')) {
            return abort(401);
        }

        $patient = Patient::findOrFail($id);

        return view('patients.page.page9', compact('patient'));
    }
    /**
     * Update Patient in storage.
     *
     * @param  \App\Http\Requests\UpdatePatientsRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($request, $id)
    {
        if (! Gate::allows('patient_edit')) {
            return abort(401);
        }
        $patient = Patient::findOrFail($id);
        $patient->update($request->all());
        return redirect()->route('patients.index');
    }

 

}
