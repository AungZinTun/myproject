@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-10">
            <div class="panel panel-link text-primary">
                <div class="panel-heading">@lang('quickadmin.qa_dashboard')</div>

                <div class="panel-body">
                    @lang('quickadmin.qa_dashboard_text')

             {{ Auth()->user()->role->title }}

                </div>
            </div>
        </div>
    </div>
@endsection
