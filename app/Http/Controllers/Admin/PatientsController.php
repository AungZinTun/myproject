<?php

namespace App\Http\Controllers\Admin;

use App\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StorePatientsRequest;
use App\Http\Requests\Admin\UpdatePatientsRequest;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Auth;

class PatientsController extends Controller
{
    /**
     * Display a listing of Patient.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('patient_access')) {
            return abort(401);
        }


        
        if (request()->ajax()) {
            $query = Patient::query();
            $query->with("user");
            $query->with("township");
            $template = 'actionsTemplate';
            if(request('show_deleted') == 1) {
                
        if (! Gate::allows('patient_delete')) {
            return abort(401);
        }
                $query->onlyTrashed();
                $template = 'restoreTemplate';
            }
            $query->select([
                'patients.id',
                'patients.user_id',
                'patients.township_id',
                'patients.mpi_code',
                'patients.date_enrolled',
                'patients.pmct_code',
                'patients.name',
                'patients.dob',
                'patients.address',
                'patients.gravida',
                'patients.parity',
                'patients.edd',
                'patients.hiv_status',
                'patients.hiv_test_date',
                'patients.hiv_test_place',
                'patients.current_art_status',
                'patients.current_art_option',
                'patients.current_art_start_date',
                'patients.current_art_unit',
                'patients.regimen',
                'patients.int_treatment',
                'patients.art_code',
                'patients.vl_test',
                'patients.vl_test_result',
                'patients.vl_test_date',
                'patients.previous_art_history',
                'patients.previous_art_option',
                'patients.previous_art_history_regimen',
                'patients.spouse_test_date',
                'patients.spouse_test_place',
                'patients.spouse_test_result',
                'patients.spouse_art_refer',
                'patients.pregnancy_outcome',
                'patients.mod',
                'patients.dod',
                'patients.pod',
                'patients.baby',
                'patients.baby_wt',
                'patients.baby_outcome',
                'patients.baby_outcome_dead_date',
                'patients.pep',
                'patients.pep_option',
                'patients.pep_not_reason',
                'patients.cpt',
                'patients.cpt_not_reason',
                'patients.dna_pcr',
                'patients.dna_pcr_date',
                'patients.dna_pcr_result',
                'patients.baby_arv',
                'patients.baby_arv_no_reason',
                'patients.baby_txt_start_date',
                'patients.txt_unit',
                'patients.txt_regimen',
                'patients.baby_art_code',
                'patients.feeding_option',
                'patients.bf_stop_date',
                'patients.immunization_bcg_0',
                'patients.immunization_bcg_2',
                'patients.immunization_hpt_0',
                'patients.immunization_penta_2',
                'patients.immunization_penta_4',
                'patients.immunization_penta_6',
                'patients.immunization_pcv',
                'patients.immunization_pcv_4',
                'patients.immunization_pcv_6',
                'patients.immunization_ipv',
                'patients.immunization_ipv_4',
                'patients.immunization_ipv6',
                'patients.baby_outcome1',
                'patients.dna_pcr1',
                'patients.dna_pcr_date1',
                'patients.dna_pcr_result1',
                'patients.baby_arv1',
                'patients.feeding_option1',
                'patients.baby_outcome2',
                'patients.hiv_ab_test',
                'patients.hiv_ab_test_date',
                'patients.hiv_ab_test_not_reason',
                'patients.hiv_ab_test_result',
                'patients.dna_pcr2',
                'patients.dna_pcr_date2',
                'patients.dna_pcr_result2',
                'patients.baby_arv2',
                'patients.feeding_option2',
                'patients.immunization_mr',
                'patients.immunization_mr1',
                'patients.immunization_je',
                'patients.baby_outcome3',
                'patients.hiv_ab_test1',
                'patients.hiv_ab_test_date1',
                'patients.hiv_ab_test_not_reason1',
                'patients.hiv_ab_test_result1',
                'patients.dna_pcr3',
                'patients.dna_pcr_date3',
                'patients.dna_pcr_result3',
                'patients.baby_arv3',
                'patients.feeding_option3',
            ]);
            $table = Datatables::of($query);

            $table->setRowAttr([
                'data-entry-id' => '{{$id}}',
            ]);
            $table->addColumn('massDelete', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');
            $table->editColumn('actions', function ($row) use ($template) {
                $gateKey  = 'patient_';
                $routeKey = 'admin.patients';

                return view($template, compact('row', 'gateKey', 'routeKey'));
            });
            $table->editColumn('user.name', function ($row) {
                return $row->user ? $row->user->name : '';
            });
            $table->editColumn('township.title', function ($row) {
                return $row->township ? $row->township->title : '';
            });
            $table->editColumn('mpi_code', function ($row) {
                return $row->mpi_code ? $row->mpi_code : '';
            });
            $table->editColumn('date_enrolled', function ($row) {
                return $row->date_enrolled ? $row->date_enrolled : '';
            });
            $table->editColumn('pmct_code', function ($row) {
                return $row->pmct_code ? $row->pmct_code : '';
            });
            $table->editColumn('name', function ($row) {
                return $row->name ? $row->name : '';
            });
            $table->editColumn('dob', function ($row) {
                return $row->dob ? $row->dob : '';
            });
            $table->editColumn('address', function ($row) {
                return $row->address ? $row->address : '';
            });
            $table->editColumn('gravida', function ($row) {
                return $row->gravida ? $row->gravida : '';
            });
            $table->editColumn('parity', function ($row) {
                return $row->parity ? $row->parity : '';
            });
            $table->editColumn('edd', function ($row) {
                return $row->edd ? $row->edd : '';
            });
            $table->editColumn('hiv_status', function ($row) {
                return $row->hiv_status ? $row->hiv_status : '';
            });
            $table->editColumn('hiv_test_date', function ($row) {
                return $row->hiv_test_date ? $row->hiv_test_date : '';
            });
            $table->editColumn('hiv_test_place', function ($row) {
                return $row->hiv_test_place ? $row->hiv_test_place : '';
            });
            $table->editColumn('current_art_status', function ($row) {
                return $row->current_art_status ? $row->current_art_status : '';
            });
            $table->editColumn('current_art_option', function ($row) {
                return $row->current_art_option ? $row->current_art_option : '';
            });
            $table->editColumn('current_art_start_date', function ($row) {
                return $row->current_art_start_date ? $row->current_art_start_date : '';
            });
            $table->editColumn('current_art_unit', function ($row) {
                return $row->current_art_unit ? $row->current_art_unit : '';
            });
            $table->editColumn('regimen', function ($row) {
                return $row->regimen ? $row->regimen : '';
            });
            $table->editColumn('int_treatment', function ($row) {
                return \Form::checkbox("int_treatment", 1, $row->int_treatment == 1, ["disabled"]);
            });
            $table->editColumn('art_code', function ($row) {
                return $row->art_code ? $row->art_code : '';
            });
            $table->editColumn('vl_test', function ($row) {
                return \Form::checkbox("vl_test", 1, $row->vl_test == 1, ["disabled"]);
            });
            $table->editColumn('vl_test_result', function ($row) {
                return $row->vl_test_result ? $row->vl_test_result : '';
            });
            $table->editColumn('vl_test_date', function ($row) {
                return $row->vl_test_date ? $row->vl_test_date : '';
            });
            $table->editColumn('previous_art_history', function ($row) {
                return \Form::checkbox("previous_art_history", 1, $row->previous_art_history == 1, ["disabled"]);
            });
            $table->editColumn('previous_art_option', function ($row) {
                return $row->previous_art_option ? $row->previous_art_option : '';
            });
            $table->editColumn('previous_art_history_regimen', function ($row) {
                return $row->previous_art_history_regimen ? $row->previous_art_history_regimen : '';
            });
            $table->editColumn('spouse_test_date', function ($row) {
                return $row->spouse_test_date ? $row->spouse_test_date : '';
            });
            $table->editColumn('spouse_test_place', function ($row) {
                return $row->spouse_test_place ? $row->spouse_test_place : '';
            });
            $table->editColumn('spouse_test_result', function ($row) {
                return $row->spouse_test_result ? $row->spouse_test_result : '';
            });
            $table->editColumn('spouse_art_refer', function ($row) {
                return $row->spouse_art_refer ? $row->spouse_art_refer : '';
            });
            $table->editColumn('pregnancy_outcome', function ($row) {
                return $row->pregnancy_outcome ? $row->pregnancy_outcome : '';
            });
            $table->editColumn('mod', function ($row) {
                return $row->mod ? $row->mod : '';
            });
            $table->editColumn('dod', function ($row) {
                return $row->dod ? $row->dod : '';
            });
            $table->editColumn('pod', function ($row) {
                return $row->pod ? $row->pod : '';
            });
            $table->editColumn('baby', function ($row) {
                return $row->baby ? $row->baby : '';
            });
            $table->editColumn('baby_wt', function ($row) {
                return $row->baby_wt ? $row->baby_wt : '';
            });
            $table->editColumn('baby_outcome', function ($row) {
                return $row->baby_outcome ? $row->baby_outcome : '';
            });
            $table->editColumn('baby_outcome_dead_date', function ($row) {
                return $row->baby_outcome_dead_date ? $row->baby_outcome_dead_date : '';
            });
            $table->editColumn('pep', function ($row) {
                return $row->pep ? $row->pep : '';
            });
            $table->editColumn('pep_option', function ($row) {
                return $row->pep_option ? $row->pep_option : '';
            });
            $table->editColumn('pep_not_reason', function ($row) {
                return $row->pep_not_reason ? $row->pep_not_reason : '';
            });
            $table->editColumn('cpt', function ($row) {
                return $row->cpt ? $row->cpt : '';
            });
            $table->editColumn('cpt_not_reason', function ($row) {
                return $row->cpt_not_reason ? $row->cpt_not_reason : '';
            });
            $table->editColumn('dna_pcr', function ($row) {
                return $row->dna_pcr ? $row->dna_pcr : '';
            });
            $table->editColumn('dna_pcr_date', function ($row) {
                return $row->dna_pcr_date ? $row->dna_pcr_date : '';
            });
            $table->editColumn('dna_pcr_result', function ($row) {
                return $row->dna_pcr_result ? $row->dna_pcr_result : '';
            });
            $table->editColumn('baby_arv', function ($row) {
                return $row->baby_arv ? $row->baby_arv : '';
            });
            $table->editColumn('baby_arv_no_reason', function ($row) {
                return $row->baby_arv_no_reason ? $row->baby_arv_no_reason : '';
            });
            $table->editColumn('baby_txt_start_date', function ($row) {
                return $row->baby_txt_start_date ? $row->baby_txt_start_date : '';
            });
            $table->editColumn('txt_unit', function ($row) {
                return $row->txt_unit ? $row->txt_unit : '';
            });
            $table->editColumn('txt_regimen', function ($row) {
                return $row->txt_regimen ? $row->txt_regimen : '';
            });
            $table->editColumn('baby_art_code', function ($row) {
                return $row->baby_art_code ? $row->baby_art_code : '';
            });
            $table->editColumn('feeding_option', function ($row) {
                return $row->feeding_option ? $row->feeding_option : '';
            });
            $table->editColumn('bf_stop_date', function ($row) {
                return $row->bf_stop_date ? $row->bf_stop_date : '';
            });
            $table->editColumn('immunization_bcg_0', function ($row) {
                return \Form::checkbox("immunization_bcg_0", 1, $row->immunization_bcg_0 == 1, ["disabled"]);
            });
            $table->editColumn('immunization_bcg_2', function ($row) {
                return \Form::checkbox("immunization_bcg_2", 1, $row->immunization_bcg_2 == 1, ["disabled"]);
            });
            $table->editColumn('immunization_hpt_0', function ($row) {
                return \Form::checkbox("immunization_hpt_0", 1, $row->immunization_hpt_0 == 1, ["disabled"]);
            });
            $table->editColumn('immunization_penta_2', function ($row) {
                return \Form::checkbox("immunization_penta_2", 1, $row->immunization_penta_2 == 1, ["disabled"]);
            });
            $table->editColumn('immunization_penta_4', function ($row) {
                return \Form::checkbox("immunization_penta_4", 1, $row->immunization_penta_4 == 1, ["disabled"]);
            });
            $table->editColumn('immunization_penta_6', function ($row) {
                return \Form::checkbox("immunization_penta_6", 1, $row->immunization_penta_6 == 1, ["disabled"]);
            });
            $table->editColumn('immunization_pcv', function ($row) {
                return \Form::checkbox("immunization_pcv", 1, $row->immunization_pcv == 1, ["disabled"]);
            });
            $table->editColumn('immunization_pcv_4', function ($row) {
                return \Form::checkbox("immunization_pcv_4", 1, $row->immunization_pcv_4 == 1, ["disabled"]);
            });
            $table->editColumn('immunization_pcv_6', function ($row) {
                return \Form::checkbox("immunization_pcv_6", 1, $row->immunization_pcv_6 == 1, ["disabled"]);
            });
            $table->editColumn('immunization_ipv', function ($row) {
                return \Form::checkbox("immunization_ipv", 1, $row->immunization_ipv == 1, ["disabled"]);
            });
            $table->editColumn('immunization_ipv_4', function ($row) {
                return \Form::checkbox("immunization_ipv_4", 1, $row->immunization_ipv_4 == 1, ["disabled"]);
            });
            $table->editColumn('immunization_ipv6', function ($row) {
                return \Form::checkbox("immunization_ipv6", 1, $row->immunization_ipv6 == 1, ["disabled"]);
            });
            $table->editColumn('baby_outcome1', function ($row) {
                return $row->baby_outcome1 ? $row->baby_outcome1 : '';
            });
            $table->editColumn('dna_pcr1', function ($row) {
                return $row->dna_pcr1 ? $row->dna_pcr1 : '';
            });
            $table->editColumn('dna_pcr_date1', function ($row) {
                return $row->dna_pcr_date1 ? $row->dna_pcr_date1 : '';
            });
            $table->editColumn('dna_pcr_result1', function ($row) {
                return $row->dna_pcr_result1 ? $row->dna_pcr_result1 : '';
            });
            $table->editColumn('baby_arv1', function ($row) {
                return $row->baby_arv1 ? $row->baby_arv1 : '';
            });
            $table->editColumn('feeding_option1', function ($row) {
                return $row->feeding_option1 ? $row->feeding_option1 : '';
            });
            $table->editColumn('baby_outcome2', function ($row) {
                return $row->baby_outcome2 ? $row->baby_outcome2 : '';
            });
            $table->editColumn('hiv_ab_test', function ($row) {
                return $row->hiv_ab_test ? $row->hiv_ab_test : '';
            });
            $table->editColumn('hiv_ab_test_date', function ($row) {
                return $row->hiv_ab_test_date ? $row->hiv_ab_test_date : '';
            });
            $table->editColumn('hiv_ab_test_not_reason', function ($row) {
                return $row->hiv_ab_test_not_reason ? $row->hiv_ab_test_not_reason : '';
            });
            $table->editColumn('hiv_ab_test_result', function ($row) {
                return $row->hiv_ab_test_result ? $row->hiv_ab_test_result : '';
            });
            $table->editColumn('dna_pcr2', function ($row) {
                return $row->dna_pcr2 ? $row->dna_pcr2 : '';
            });
            $table->editColumn('dna_pcr_date2', function ($row) {
                return $row->dna_pcr_date2 ? $row->dna_pcr_date2 : '';
            });
            $table->editColumn('dna_pcr_result2', function ($row) {
                return $row->dna_pcr_result2 ? $row->dna_pcr_result2 : '';
            });
            $table->editColumn('baby_arv2', function ($row) {
                return $row->baby_arv2 ? $row->baby_arv2 : '';
            });
            $table->editColumn('feeding_option2', function ($row) {
                return $row->feeding_option2 ? $row->feeding_option2 : '';
            });
            $table->editColumn('immunization_mr', function ($row) {
                return \Form::checkbox("immunization_mr", 1, $row->immunization_mr == 1, ["disabled"]);
            });
            $table->editColumn('immunization_mr1', function ($row) {
                return \Form::checkbox("immunization_mr1", 1, $row->immunization_mr1 == 1, ["disabled"]);
            });
            $table->editColumn('immunization_je', function ($row) {
                return \Form::checkbox("immunization_je", 1, $row->immunization_je == 1, ["disabled"]);
            });
            $table->editColumn('baby_outcome3', function ($row) {
                return $row->baby_outcome3 ? $row->baby_outcome3 : '';
            });
            $table->editColumn('hiv_ab_test1', function ($row) {
                return $row->hiv_ab_test1 ? $row->hiv_ab_test1 : '';
            });
            $table->editColumn('hiv_ab_test_date1', function ($row) {
                return $row->hiv_ab_test_date1 ? $row->hiv_ab_test_date1 : '';
            });
            $table->editColumn('hiv_ab_test_not_reason1', function ($row) {
                return $row->hiv_ab_test_not_reason1 ? $row->hiv_ab_test_not_reason1 : '';
            });
            $table->editColumn('hiv_ab_test_result1', function ($row) {
                return $row->hiv_ab_test_result1 ? $row->hiv_ab_test_result1 : '';
            });
            $table->editColumn('dna_pcr3', function ($row) {
                return $row->dna_pcr3 ? $row->dna_pcr3 : '';
            });
            $table->editColumn('dna_pcr_date3', function ($row) {
                return $row->dna_pcr_date3 ? $row->dna_pcr_date3 : '';
            });
            $table->editColumn('dna_pcr_result3', function ($row) {
                return $row->dna_pcr_result3 ? $row->dna_pcr_result3 : '';
            });
            $table->editColumn('baby_arv3', function ($row) {
                return $row->baby_arv3 ? $row->baby_arv3 : '';
            });
            $table->editColumn('feeding_option3', function ($row) {
                return $row->feeding_option3 ? $row->feeding_option3 : '';
            });

            $table->rawColumns(['actions','massDelete','int_treatment','vl_test','previous_art_history','immunization_bcg_0','immunization_bcg_2','immunization_hpt_0','immunization_penta_2','immunization_penta_4','immunization_penta_6','immunization_pcv','immunization_pcv_4','immunization_pcv_6','immunization_ipv','immunization_ipv_4','immunization_ipv6','immunization_mr','immunization_mr1','immunization_je']);

            return $table->make(true);
        }

        if(auth()->user()->role_id == 1) {

            return view('admin.patients.index');}
           
        else {
        
            return abort(401);}
        }



    /**
     * Show the form for creating new Patient.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('patient_create')) {
            return abort(401);
        }
        
        $users = \App\User::get()->pluck('name', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $townships = \App\Township::get()->pluck('title', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        return view('admin.patients.create', compact('users', 'townships'));
    }

    /**
     * Store a newly created Patient in storage.
     *
     * @param  \App\Http\Requests\StorePatientsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePatientsRequest $request)
    {
        if (! Gate::allows('patient_create')) {
            return abort(401);
        }
        $patient = Patient::create($request->all());



        return redirect()->route('admin.patients.index');
    }


    /**
     * Show the form for editing Patient.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('patient_edit')) {
            return abort(401);
        }
        
        $users = \App\User::get()->pluck('name', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $townships = \App\Township::get()->pluck('title', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        $patient = Patient::findOrFail($id);

        return view('admin.patients.edit', compact('patient', 'users', 'townships'));
    }

    /**
     * Update Patient in storage.
     *
     * @param  \App\Http\Requests\UpdatePatientsRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePatientsRequest $request, $id)
    {
        if (! Gate::allows('patient_edit')) {
            return abort(401);
        }
        $patient = Patient::findOrFail($id);
        $patient->update($request->all());



        return back();
    }


    /**
     * Display Patient.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('patient_view')) {
            return abort(401);
        }
        $patient = Patient::findOrFail($id);

        return view('admin.patients.show', compact('patient'));
    }


    /**
     * Remove Patient from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('patient_delete')) {
            return abort(401);
        }
        $patient = Patient::findOrFail($id);
        $patient->delete();

        return redirect()->route('admin.patients.index');
    }

    /**
     * Delete all selected Patient at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('patient_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Patient::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore Patient from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('patient_delete')) {
            return abort(401);
        }
        $patient = Patient::onlyTrashed()->findOrFail($id);
        $patient->restore();

        return redirect()->route('admin.patients.index');
    }

    /**
     * Permanently delete Patient from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('patient_delete')) {
            return abort(401);
        }
        $patient = Patient::onlyTrashed()->findOrFail($id);
        $patient->forceDelete();

        return redirect()->route('admin.patients.index');
    }
}
