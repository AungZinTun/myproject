<?php

namespace App\Http\Controllers\Admin;

use App\Township;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreTownshipsRequest;
use App\Http\Requests\Admin\UpdateTownshipsRequest;
use Yajra\DataTables\DataTables;

class TownshipsController extends Controller
{
    /**
     * Display a listing of Township.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('township_access')) {
            return abort(401);
        }


        
        if (request()->ajax()) {
            $query = Township::query();
            $template = 'actionsTemplate';
            
            $query->select([
                'townships.id',
                'townships.title',
            ]);
            $table = Datatables::of($query);

            $table->setRowAttr([
                'data-entry-id' => '{{$id}}',
            ]);
            $table->addColumn('massDelete', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');
            $table->editColumn('actions', function ($row) use ($template) {
                $gateKey  = 'township_';
                $routeKey = 'admin.townships';

                return view($template, compact('row', 'gateKey', 'routeKey'));
            });
            $table->editColumn('title', function ($row) {
                return $row->title ? $row->title : '';
            });

            $table->rawColumns(['actions','massDelete']);

            return $table->make(true);
        }

        return view('admin.townships.index');
    }

    /**
     * Show the form for creating new Township.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('township_create')) {
            return abort(401);
        }
        return view('admin.townships.create');
    }

    /**
     * Store a newly created Township in storage.
     *
     * @param  \App\Http\Requests\StoreTownshipsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTownshipsRequest $request)
    {
        if (! Gate::allows('township_create')) {
            return abort(401);
        }
        $township = Township::create($request->all());



        return redirect()->route('admin.townships.index');
    }


    /**
     * Display Township.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('township_view')) {
            return abort(401);
        }
        $patients = \App\Patient::where('township_id', $id)->get();$users = \App\User::where('township_id', $id)->get();

        $township = Township::findOrFail($id);

        return view('admin.townships.show', compact('township', 'patients', 'users'));
    }

}
