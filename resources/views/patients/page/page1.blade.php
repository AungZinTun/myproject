@extends('layouts.app')

@section('content')
    <h5 class="page-title text-primary">Page 1</h5>
    
    {!! Form::model($patient, ['method' => 'PUT', 'route' => ['patients.update', $patient->id]]) !!}
    {!! Form::hidden('user_id', old('user_id'), ['class' => 'form-control', 'required' => '' ]) !!}
      {!! Form::hidden('township_id', old('township_id'), ['class' => 'form-control ']) !!}
      {!! Form::hidden('date_enrolled', old('date_enrolled'), ['class' => 'form-control date', 'placeholder' => '', 'required' => '']) !!}
      {!! Form::hidden('pmct_code', old('pmct_code'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
      {!! Form::hidden('name', old('name'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
      {!! Form::hidden('dob', old('dob'), ['class' => 'form-control date', 'placeholder' => '', 'required' => '']) !!}
      {!! Form::hidden('gravida', old('gravida'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
      {!! Form::hidden('parity', old('parity'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
      {!! Form::hidden('edd', old('edd'), ['class' => 'form-control date', 'placeholder' => '', 'required' => '']) !!}
      {!! Form::hidden('address', old('address'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
   
   
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="row"> 
            <div class="col-xs-4"><h3 class="page-title"> Name : {{$patient->name }} </h3>  
            
          {!! Form::label('mpi_code', trans('quickadmin.patients.fields.mpi-code').'', ['class' => 'control-label']) !!} :    ( {{   $patient->mpi_code }} )</div>
    

            <div class="col-xs-3 pull-right">
            {!! Form::label('user_id', trans('quickadmin.patients.fields.user').'*', ['class' => 'control-label']) !!} :{{   $patient->user->name}}
            <p>Phone:{{   $patient->user->phone }} </p>
            <p>Report Unit:  ( {{   $patient->township->title}} )</p>
          
            </div>
           
            </div>

         
       
        </div>

        <div class="panel-body">
           
            <div class="row">
                <div class="col-xs-4 form-group">
                    {!! Form::label('mpi_code', trans('quickadmin.patients.fields.mpi-code').'', ['class' => 'control-label']) !!}
                   
                </div>
                <div class="col-xs-8">
                {!! Form::text('mpi_code', old('mpi_code'), ['class' => 'form-control', 'placeholder' => '' , 'disabled'=>'']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('mpi_code'))
                        <p class="help-block">
                            {{ $errors->first('mpi_code') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-4 form-group">
                    {!! Form::label('date_enrolled', trans('quickadmin.patients.fields.date-enrolled').'*', ['class' => 'control-label']) !!}
                   
                </div>
                <div class="col-xs-8">
                {!! Form::text('date_enrolled', old('date_enrolled'), ['class' => 'form-control date', 'placeholder' => '', 'required' => '', 'disabled'=>'']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('date_enrolled'))
                        <p class="help-block">
                            {{ $errors->first('date_enrolled') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-4 form-group">
                    {!! Form::label('pmct_code', trans('quickadmin.patients.fields.pmct-code').'*', ['class' => 'control-label']) !!}
                  
                </div>
                <div class="col-xs-8">
                {!! Form::text('pmct_code', old('pmct_code'), ['class' => 'form-control', 'placeholder' => '', 'required' => '', 'disabled'=>'']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('pmct_code'))
                        <p class="help-block">
                            {{ $errors->first('pmct_code') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-4 form-group">
                    {!! Form::label('name', trans('quickadmin.patients.fields.name').'*', ['class' => 'control-label']) !!}
                   
                </div>
                <div class="col-xs-8">
                {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => '', 'required' => '', 'disabled'=>'']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('name'))
                        <p class="help-block">
                            {{ $errors->first('name') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-4 form-group">
                    {!! Form::label('dob', trans('quickadmin.patients.fields.dob').'*', ['class' => 'control-label']) !!}
                   
                </div>
                <div class="col-xs-8">
                {!! Form::text('dob', old('dob'), ['class' => 'form-control date', 'placeholder' => '', 'required' => '', 'disabled'=>'']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('dob'))
                        <p class="help-block">
                            {{ $errors->first('dob') }}
                        </p>
                    @endif
                
                </div>
            </div>
            <div class="row">
                <div class="col-xs-4 form-group">
                    {!! Form::label('address', trans('quickadmin.patients.fields.address').'*', ['class' => 'control-label']) !!}
                   
                </div>
                <div class="col-xs-8">
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
                <div class="col-xs-4 form-group">
                    {!! Form::label('gravida', trans('quickadmin.patients.fields.gravida').'/Parity*', ['class' => 'control-label']) !!}
                   
                   
                  
                  
                </div>
                <div class="col-xs-4">
                {!! Form::number('gravida', old('gravida'), ['class' => 'form-control', 'placeholder' => '', 'required' => '', 'disabled'=>'']) !!}
                <p class="help-block"></p>
                    @if($errors->has('gravida'))
                        <p class="help-block">
                            {{ $errors->first('gravida') }}
                        </p>
                    @endif
                </div>
                <div class="col-xs-4">
                {!! Form::number('parity', old('parity'), ['class' => 'form-control', 'placeholder' => '', 'required' => '', 'disabled'=>'']) !!}
                   
                   <p class="help-block"></p>
                   @if($errors->has('parity'))
                       <p class="help-block">
                           {{ $errors->first('parity') }}
                       </p>
                   @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-4 form-group">
                    {!! Form::label('edd', trans('quickadmin.patients.fields.edd').'*', ['class' => 'control-label']) !!}
                   
                </div>
                <div class="col-xs-8">
                {!! Form::text('edd', old('edd'), ['class' => 'form-control date', 'placeholder' => '', 'required' => '', 'disabled'=>'']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('edd'))
                        <p class="help-block">
                            {{ $errors->first('edd') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-4 form-group">
                    {!! Form::label('hiv_status', trans('quickadmin.patients.fields.hiv-status').'', ['class' => 'control-label']) !!}
                    <!-- <p class="help-block">လက်ရှိကိုယ်ဝန်မတိုင်ခင်ကတည်းက HIV ပိုးရှိကြောင်းသိ/မသိ</p> -->
                    @if($errors->has('hiv_status'))
                        <p class="help-block">
                            {{ $errors->first('hiv_status') }}
                        </p>
                    @endif
                   
                    
                </div>
                <div class="col-xs-8">
                <div>
                        <label>
                            {!! Form::radio('hiv_status', '1', false, [ 'disabled'=>'']) !!}
                            Known
                        </label>
                   
                        <label>
                            {!! Form::radio('hiv_status', '0', false, ['disabled'=>'']) !!}
                            Unknown
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    







</div>



    </div>



            <div class="panel-footer">
                <div class="row">
                    <div class="col-xs-4">
                    {!! Form::submit(trans('Save'), ['class' => 'btn btn-success']) !!}
                    {!! Form::close() !!}
                    </div>
                    <div class="col-xs-6 justify-content-center">
                    <a class="btn btn-link disabled" href="/patients/{{$patient->id}}/page"> <i class="fa fa-backward"></i>  </a>
                    <a  class="btn disabled" href="/patients/{{$patient->id}}/page4"> page 1</a>
               
                  @if ($patient->hiv_status==0 )   <a class="btn btn-link" href="/patients/{{$patient->id}}/page3"> <i class="fa fa-forward"></i> </a>
                  @else   <a class="btn btn-link" href="/patients/{{$patient->id}}/page2"> <i class="fa fa-forward"></i> </a>
                  @endif
                    </div>
                    <div class="col-xs-2">
                    <a href="/patients"  class=" text-muted">   <i class="fa fa-list text-muted"></i> Back </a>
                    </div>
                
                </div>
                
            </div>



    <!-- <nav aria-label="...">
  <ul class="pagination justify-content-center">
    <li class="page-item active disabled">
    <a class="page-item" href="#" tabindex="-1">1</a>
    </li>
    <li class="page-item"><a href="/patients/{{$patient->id}}/page2"> 2</a></li>    
    <li class="page-item"><a class="page-link" href="/patients/{{$patient->id}}/page3">3</a></li>
    <li class="page-item"><a class="page-link" href="/patients/{{$patient->id}}/page4">4</a></li>
    <li class="page-item"><a class="page-link" href="/patients/{{$patient->id}}/page5">5</a></li>
    <li class="page-item"><a class="page-link" href="/patients/{{$patient->id}}/page6">6</a></li>
    <li class="page-item"><a class="page-link" href="/patients/{{$patient->id}}/page7">7</a></li>
    <li class="page-item"><a class="page-link" href="/patients/{{$patient->id}}/page8">8</a></li>
    <li class="page-item"><a class="page-link" href="/patients/{{$patient->id}}/page9">9</a></li>
  </ul>
</nav> -->

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

