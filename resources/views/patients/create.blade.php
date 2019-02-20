@extends('layouts.patient')

@section('content')
   
    {!! Form::open(['method' => 'POST', 'route' => ['patients.store']]) !!}
    {!! Form::hidden('user_id',  Auth()->user()->id ) !!}
                    {!! Form::hidden('township_id',  Auth()->user()->township_id ) !!}

    <div class="panel">

        <div class="panel-body bg-success">
            <div class="row  form-group text-muted">
                <div class="col-xs-4 form-group">
                 {!! Form::label('mpi_code', trans('quickadmin.patients.fields.mpi-code').'', ['class' => 'control-label']) !!} :
                 {{ $mpi=strtoupper(uniqid())}}
                {!! Form::hidden('mpi_code',json_decode($mpi),  old('mpi_code'), ['class' => 'form-control', 'placeholder'=>"$mpi"]) !!}                 
                
                    
                </div>
                   
                <div class="col-xs-8">   Report person :{{Auth()->user()->name}} </div>
            </div>


       
            <div class="row  form-group">
                <div class="col-xs-4">
                {!! Form::label('date_enrolled', trans('quickadmin.patients.fields.date-enrolled').'*', ['class' => 'control-label']) !!}

                </div>
                <div class="col-xs-8">
                {!! Form::text('date_enrolled', old('date_enrolled'), ['class' => 'form-control date', 'placeholder' => '', 'required' => '']) !!}
                        <p class="help-block text-danger "></p>
                        @if($errors->has('date_enrolled'))
                            <p class="help-block text-danger">
                                {{ $errors->first('date_enrolled') }}
                            </p>
                        @endif
                </div>
            </div>       
            <div class="row  form-group">
                <div class="col-xs-4">
                {!! Form::label('pmct_code', trans('quickadmin.patients.fields.pmct-code').'*', ['class' => 'control-label mr-0']) !!}
                <p class="help-block text-danger"></p>
                    @if($errors->has('pmct_code'))
                        <p class="help-block text-danger">
                            {{ $errors->first('pmct_code') }}
                        </p>
                    @endif
                </div>
                <div class="col-xs-4">

                 {!! Form::text('regno'  , old('regno'), ['class' => 'form-control',"id"=>"regno",'onchange'=>'get_pmct_code();', 'placeholder' => 'Register No./RHC', 'required' => '']) !!}
           
                </div>
                <div class="col-xs-4">
                {!! Form::input(''  , $yt="/". now()->format('y') ."/".strtoupper((Auth()->user()->township->title)),
                 old(''), ['class' => 'form-control', "id"=>"yt", 'placeholder' => $yt, 'required' => '', "disabled"=>""]) !!}
                </div>
                <div class="col-12">
                {{ Form::hidden('pmct_code', json_decode($yt),old(''), ["id"=>"pmct_code"]) }}
                </div>
            
            </div>    
            <div class="row  form-group">
                <div class="col-xs-4">
                {!! Form::label('name', trans('quickadmin.patients.fields.name').'*', ['class' => 'control-label']) !!}

                </div>
                <div class="col-xs-8">
                {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block text-danger"></p>
                    @if($errors->has('name'))
                        <p class="help-block text-danger">
                            {{ $errors->first('name') }}
                        </p>
                    @endif
                </div>
            </div>       
            <div class="row  form-group">
                <div class="col-xs-4">
                {!! Form::label('dob', trans('quickadmin.patients.fields.dob').'*', ['class' => 'control-label', "max"=>"now()" ]) !!}

                </div>
                <div class="col-xs-8">
                        
                    {!! Form::text('dob', old('dob'), ['class' => 'form-control date', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block text-danger"></p>
                    @if($errors->has('dob'))
                        <p class="help-block text-danger">
                            {{ $errors->first('dob') }}
                        </p>
                    @endif
                </div>
            </div>  
            <div class="row  form-group">
                <div class="col-xs-4">
                {!! Form::label('address', trans('quickadmin.patients.fields.address').'*', ['class' => 'control-label']) !!}

                </div>
                <div class="col-xs-8">
                {!! Form::text('address', old('address'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                <p class="help-block text-danger"></p>
                    @if($errors->has('address'))
                        <p class="help-block text-danger">
                            {{ $errors->first('address') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row  form-group">
                    <div class="col-xs-4">
                    {!! Form::label('gravida', trans('quickadmin.patients.fields.gravida').'/Parity *', ['class' => 'control-label']) !!}

                    </div>
                    <div class="col-xs-8">  
                        <div class="row  form-group">
                            <div class="col-xs-6">
                         
                            {!! Form::number('gravida', old('gravida'), ['class' => 'form-control', 'placeholder' => 'G', 'required' => '']) !!}   
                               
                                <p class="help-block text-danger"></p>
                                @if($errors->has('gravida'))
                                    <p class="help-block text-danger">
                                        {{ $errors->first('gravida') }}   
                                    </p>
                                    @endif

                   
                            </div>
                            <div class="col-xs-6">
                            {!! Form::number('parity', old('parity'), ['class' =>  'form-control', 'placeholder' => 'P', 'required' => '']) !!}     
                            </div>
                        </div>        
                    </div>
            </div>
            <div class="row  form-group">
                <div class="col-xs-4">
                        {!! Form::label('edd', trans('quickadmin.patients.fields.edd').'*', ['class' => 'control-label']) !!}
                </div>
                <div class="col-xs-8">
                    
                    {!! Form::text('edd', old('edd'), ['class' => 'form-control date', 'placeholder' => '', 'required' => '']) !!}
                            <p class="help-block text-danger"></p>
                            @if($errors->has('edd'))
                                <p class="help-block text-danger">
                                    {{ $errors->first('edd') }}
                                </p>
                            @endif
                </div>
            
            </div>
            <div class="row  form-group">
                <div class="col-xs-4">
                {!! Form::label('hiv_status', trans('quickadmin.patients.fields.hiv-status').'', ['class' => 'control-label']) !!}

                </div>
                <div class="col-xs-8">
                    
                    <label>
                        {!! Form::radio('hiv_status', '1', false, [ "required"=>""]) !!}
                        Known
                    </label>
        
                    <label>
                        {!! Form::radio('hiv_status', '0', false, []) !!}
                        Unknown
                    </label>
                </div>
            </div>  
       
        {!! Form::submit('save and next', ['class' => 'btn btn-success']) !!}
    {!! Form::close() !!}

     </div>
            </div>
            
        </div>
    </div>
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
    <script>
      
       
       function get_pmct_code(){
        var yt=document.getElementById("yt").name;
        var regno=document.getElementById("regno").value;
        document.getElementById("pmct_code").value=regno+yt;
       }
    </script>
            
@stop