@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.patients.title')</h3>
    {!! Form::open(['method' => 'POST', 'route' => ['patients.store']]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_create')
        </div>
        
        <div class="panel-body">
           
              
                    {!! Form::hidden('user_id',  Auth()->user()->id ) !!}
                    {!! Form::hidden('township_id',  Auth()->user()->township_id ) !!}
                 
                 
                  
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('mpi_code', trans('quickadmin.patients.fields.mpi-code').'', ['class' => 'control-label']) !!}
                    {!! Form::text('mpi_code', old('mpi_code'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('mpi_code'))
                        <p class="help-block">
                            {{ $errors->first('mpi_code') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('date_enrolled', trans('quickadmin.patients.fields.date-enrolled').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('date_enrolled', old('date_enrolled'), ['class' => 'form-control date', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('date_enrolled'))
                        <p class="help-block">
                            {{ $errors->first('date_enrolled') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('pmct_code', trans('quickadmin.patients.fields.pmct-code').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('pmct_code', old('pmct_code'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('pmct_code'))
                        <p class="help-block">
                            {{ $errors->first('pmct_code') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('name', trans('quickadmin.patients.fields.name').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('name'))
                        <p class="help-block">
                            {{ $errors->first('name') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('dob', trans('quickadmin.patients.fields.dob').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('dob', old('dob'), ['class' => 'form-control date', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('dob'))
                        <p class="help-block">
                            {{ $errors->first('dob') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('address', trans('quickadmin.patients.fields.address').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('address', old('address'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('address'))
                        <p class="help-block">
                            {{ $errors->first('address') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('gravida', trans('quickadmin.patients.fields.gravida').'/Parity *', ['class' => 'control-label']) !!}
                    {!! Form::number('gravida', old('gravida'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}         {!! Form::number('parity', old('parity'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('gravida'))
                        <p class="help-block">
                            {{ $errors->first('gravida') }}
                        </p>

                    @endif
                    @if($errors->has('parity'))
                        <p class="help-block">
                            {{ $errors->first('parity') }}
                        </p>
                    @endif
                </div>
            </div>
          
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('edd', trans('quickadmin.patients.fields.edd').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('edd', old('edd'), ['class' => 'form-control date', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('edd'))
                        <p class="help-block">
                            {{ $errors->first('edd') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('hiv_status', trans('quickadmin.patients.fields.hiv-status').'', ['class' => 'control-label']) !!}
                    <p class="help-block">လက်ရှိကိုယ်ဝန်မတိုင်ခင်ကတည်းက HIV ပိုးရှိကြောင်းသိ/မသိ</p>
                    @if($errors->has('hiv_status'))
                        <p class="help-block">
                            {{ $errors->first('hiv_status') }}
                        </p>
                    @endif
                    <div>
                        <label>
                            {!! Form::radio('hiv_status', '1', false, [ "required"=>""]) !!}
                            Known
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('hiv_status', '0', false, []) !!}
                            Unknown
                        </label>
                    </div>
                    
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit(trans('quickadmin.qa_save'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

@section('javascript')
    @parent

    <script src="{{ url('adminlte/plugins/datetimepicker/moment-with-locales.min.js') }}"></script>
    <script src="{{ url('adminlte/plugins/datetimepicker/bootstrap-datetimepicker.min.js') }}"></script>
    <script>
        $(function(){
            moment.updateLocale('{{ App::getLocale() }}', {
                week: { dow: 1 } // Monday is the first day of the week
            });
            
            $('.date').datetimepicker({
                format: "{{ config('app.date_format_moment') }}",
                locale: "{{ App::getLocale() }}",
            });
            
        });
    </script>
            
@stop