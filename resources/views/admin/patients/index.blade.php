@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
   
    <!-- @can('patient_create')
    <p>
        <a href="{{ route('admin.patients.create') }}" class="btn btn-success">@lang('quickadmin.qa_add_new')</a>
        
    </p>
    @endcan -->

    @can('patient_delete')
    <p>
        <ul class="list-inline">
            <li><a href="{{ route('admin.patients.index') }}" style="{{ request('show_deleted') == 1 ? '' : 'font-weight: 700' }}">@lang('quickadmin.qa_all')</a></li> |
            <li><a href="{{ route('admin.patients.index') }}?show_deleted=1" style="{{ request('show_deleted') == 1 ? 'font-weight: 700' : '' }}">@lang('quickadmin.qa_trash')</a></li>
        </ul>
    </p>
    @endcan


    <div class="panel panel-primary">
        <div class="panel-heading">
        <h3 class="page-title">All Registered @lang('quickadmin.patients.title')</h3>
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-sm table-striped ajaxTable @can('patient_delete') @if ( request('show_deleted') != 1 ) dt-select @endif @endcan">
                <thead>
                    <tr class="table-primary">
                        @can('patient_delete')
                            @if ( request('show_deleted') != 1 )<th style="text-align:center;"><input type="checkbox" id="select-all" /></th>@endif
                        @endcan

                        <th>@lang('quickadmin.patients.fields.user')</th>
                        <th>@lang('quickadmin.patients.fields.township')</th>
                        <th>@lang('quickadmin.patients.fields.date-enrolled')</th>
                        <th>@lang('quickadmin.patients.fields.name')</th>
                        <th>@lang('quickadmin.patients.fields.edd')</th>
                        <th>@lang('quickadmin.patients.fields.current-art-status')</th>
                        <th>@lang('quickadmin.patients.fields.pregnancy-outcome')</th>
                        <th>@lang('quickadmin.patients.fields.baby-outcome')</th>
                        <th>@lang('quickadmin.patients.fields.baby-outcome1')</th>
                        <th>@lang('quickadmin.patients.fields.baby-outcome2')</th>
                        <th>@lang('quickadmin.patients.fields.baby-outcome3')</th>
                        @if( request('show_deleted') == 1 )
                        <th>&nbsp;</th>
                        @else
                        <th>&nbsp;</th>
                        @endif
                    </tr>
                </thead>
            </table>
        </div>
    </div>
@stop

@section('javascript') 
    <script>
        @can('patient_delete')
            @if ( request('show_deleted') != 1 ) window.route_mass_crud_entries_destroy = '{{ route('admin.patients.mass_destroy') }}'; @endif
        @endcan
        $(document).ready(function () {
            window.dtDefaultOptions.ajax = '{!! route('admin.patients.index') !!}?show_deleted={{ request('show_deleted') }}';
            window.dtDefaultOptions.columns = [@can('patient_delete')
                @if ( request('show_deleted') != 1 )
                    {data: 'massDelete', name: 'id', searchable: false, sortable: false},
                @endif
                @endcan{data: 'user.name', name: 'user.name'},
                {data: 'township.title', name: 'township.title'},
                {data: 'date_enrolled', name: 'date_enrolled'},
                {data: 'name', name: 'name'},
                {data: 'edd', name: 'edd'},
                {data: 'current_art_status', name: 'current_art_status'},
                {data: 'pregnancy_outcome', name: 'pregnancy_outcome'},
                {data: 'baby_outcome', name: 'baby_outcome'},
                {data: 'baby_outcome1', name: 'baby_outcome1'},
                {data: 'baby_outcome2', name: 'baby_outcome2'},
                {data: 'baby_outcome3', name: 'baby_outcome3'},
                
                {data: 'actions', name: 'actions', searchable: false, sortable: false}
            ];
            processAjaxTables();
        });
    </script>
@endsection