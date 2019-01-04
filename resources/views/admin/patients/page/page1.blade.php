@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.patients.title')</h3>
    
    {!! Form::model($patient, ['method' => 'PUT', 'route' => ['admin.patients.update', $patient->id]]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_edit')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('user_id', trans('quickadmin.patients.fields.user').'*', ['class' => 'control-label']) !!}
                    {!! Form::select('user_id', $users, old('user_id'), ['class' => 'form-control select2', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('user_id'))
                        <p class="help-block">
                            {{ $errors->first('user_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('township_id', trans('quickadmin.patients.fields.township').'', ['class' => 'control-label']) !!}
                    {!! Form::select('township_id', $townships, old('township_id'), ['class' => 'form-control select2']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('township_id'))
                        <p class="help-block">
                            {{ $errors->first('township_id') }}
                        </p>
                    @endif
                </div>
            </div>
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
                    {!! Form::label('gravida', trans('quickadmin.patients.fields.gravida').'*', ['class' => 'control-label']) !!}
                    {!! Form::number('gravida', old('gravida'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('gravida'))
                        <p class="help-block">
                            {{ $errors->first('gravida') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('parity', trans('quickadmin.patients.fields.parity').'*', ['class' => 'control-label']) !!}
                    {!! Form::number('parity', old('parity'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
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
                            {!! Form::radio('hiv_status', '1', false, []) !!}
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
    







</div>



    </div>





    {!! Form::submit(trans('quickadmin.qa_update'), ['class' => 'btn btn-danger']) !!}


    <nav aria-label="...">
  <ul class="pagination justify-content-center">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1">1</a>
    </li>
    <li class="page-item"><a href="/admin/patient/{{$patient->id}}/page2"> 2</a></li>    
    <li class="page-item"><a class="page-link" href="/admin/patient/{{$patient->id}}/page3">3</a></li>
    <li class="page-item"><a class="page-link" href="/admin/patient/{{$patient->id}}/page4">4</a></li>
    <li class="page-item"><a class="page-link" href="/admin/patient/{{$patient->id}}/page5">5</a></li>
    <li class="page-item"><a class="page-link" href="/admin/patient/{{$patient->id}}/page6">6</a></li>
    <li class="page-item"><a class="page-link" href="/admin/patient/{{$patient->id}}/page7">7</a></li>
    <li class="page-item"><a class="page-link" href="/admin/patient/{{$patient->id}}/page8">8</a></li>
    <li class="page-item"><a class="page-link" href="/admin/patient/{{$patient->id}}/page9">9</a></li>
  </ul>
</nav>

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

