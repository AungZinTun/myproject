@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.township.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.township.fields.title')</th>
                            <td field-key='title'>{{ $township->title }}</td>
                        </tr>
                    </table>
                </div>
            </div><!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
    
<li role="presentation" class="active"><a href="#patients" aria-controls="patients" role="tab" data-toggle="tab">Patients</a></li>
<li role="presentation" class=""><a href="#users" aria-controls="users" role="tab" data-toggle="tab">Users</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
    
<div role="tabpanel" class="tab-pane active" id="patients">
<table class="table table-bordered table-striped {{ count($patients) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
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

    <tbody>
        @if (count($patients) > 0)
            @foreach ($patients as $patient)
                <tr data-entry-id="{{ $patient->id }}">
                    <td field-key='user'>{{ $patient->user->name ?? '' }}</td>
                                <td field-key='township'>{{ $patient->township->title ?? '' }}</td>
                                <td field-key='date_enrolled'>{{ $patient->date_enrolled }}</td>
                                <td field-key='name'>{{ $patient->name }}</td>
                                <td field-key='edd'>{{ $patient->edd }}</td>
                                <td field-key='current_art_status'>{{ $patient->current_art_status }}</td>
                                <td field-key='pregnancy_outcome'>{{ $patient->pregnancy_outcome }}</td>
                                <td field-key='baby_outcome'>{{ $patient->baby_outcome }}</td>
                                <td field-key='baby_outcome1'>{{ $patient->baby_outcome1 }}</td>
                                <td field-key='baby_outcome2'>{{ $patient->baby_outcome2 }}</td>
                                <td field-key='baby_outcome3'>{{ $patient->baby_outcome3 }}</td>
                                @if( request('show_deleted') == 1 )
                                <td>
                                    @can('patient_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'POST',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.patients.restore', $patient->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_restore'), array('class' => 'btn btn-xs btn-success')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                    @can('patient_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.patients.perma_del', $patient->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_permadel'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                </td>
                                @else
                                <td>
                                    @can('patient_view')
                                    <a href="{{ route('admin.patients.show',[$patient->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('patient_edit')
                                    <a href="{{ route('admin.patients.edit',[$patient->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('patient_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.patients.destroy', $patient->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>
                                @endif
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="101">@lang('quickadmin.qa_no_entries_in_table')</td>
            </tr>
        @endif
    </tbody>
</table>
</div>
<div role="tabpanel" class="tab-pane " id="users">
<table class="table table-bordered table-striped {{ count($users) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
            <th>@lang('quickadmin.users.fields.name')</th>
                        <th>@lang('quickadmin.users.fields.email')</th>
                        <th>@lang('quickadmin.users.fields.role')</th>
                        <th>@lang('quickadmin.users.fields.township')</th>
                        <th>@lang('quickadmin.users.fields.phone')</th>
                        <th>@lang('quickadmin.users.fields.health-facility')</th>
                                                <th>&nbsp;</th>

        </tr>
    </thead>

    <tbody>
        @if (count($users) > 0)
            @foreach ($users as $user)
                <tr data-entry-id="{{ $user->id }}">
                    <td field-key='name'>{{ $user->name }}</td>
                                <td field-key='email'>{{ $user->email }}</td>
                                <td field-key='role'>{{ $user->role->title ?? '' }}</td>
                                <td field-key='township'>{{ $user->township->title ?? '' }}</td>
                                <td field-key='phone'>{{ $user->phone }}</td>
                                <td field-key='health_facility'>{{ $user->health_facility }}</td>
                                                                <td>
                                    @can('user_view')
                                    <a href="{{ route('admin.users.show',[$user->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('user_edit')
                                    <a href="{{ route('admin.users.edit',[$user->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('user_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.users.destroy', $user->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>

                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="13">@lang('quickadmin.qa_no_entries_in_table')</td>
            </tr>
        @endif
    </tbody>
</table>
</div>
</div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.townships.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop


