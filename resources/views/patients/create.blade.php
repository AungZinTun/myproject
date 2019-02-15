@extends('layouts.app')

@section('content')
   
    {!! Form::open(['method' => 'POST', 'route' => ['patients.store']]) !!}
    {!! Form::hidden('user_id',  Auth()->user()->id ) !!}
                    {!! Form::hidden('township_id',  Auth()->user()->township_id ) !!}

    <div class="panel">

        
        <div class="panel-body bg-success">


        <table class='table table-light '> 
            <thead>
              <tr class="bg-light">
                    <th>
                        {!! Form::label('mpi_code', trans('quickadmin.patients.fields.mpi-code').'', ['class' => 'control-label']) !!}
                        {!! Form::text('mpi_code', old('mpi_code'), ['class' => 'form-control', 'placeholder' => '']) !!}
                        @if($errors->has('mpi_code'))
                            <p class="help-block">
                                {{ $errors->first('mpi_code') }}
                            </p>
                        @endif
                    </th>
                    <th>
                     
                  <p>
                  <small>
                      <label for="">   Reporting person :{{Auth()->user()->name}}, Phone : {{Auth()->user()->phone}} </label>
                      </small>
                  </p>
                      
                    <p>
                        <small>     <label for="">   Health Facility :{{Auth()->user()->township->title}} </label> </small>
                    </p>

                    </th>
                </tr>
            </thead>
            <tbody >
                <tr>
                    <td>
                          {!! Form::label('date_enrolled', trans('quickadmin.patients.fields.date-enrolled').'*', ['class' => 'control-label']) !!}
                    
                    </td>
                    <td>
                     {!! Form::text('date_enrolled', old('date_enrolled'), ['class' => 'form-control date', 'placeholder' => '', 'required' => '']) !!}
                        <p class="help-block"></p>
                        @if($errors->has('date_enrolled'))
                            <p class="help-block">
                                {{ $errors->first('date_enrolled') }}
                            </p>
                        @endif
                    
                    </td>
                </tr>

                <tr>
                    <td>
                    {!! Form::label('pmct_code', trans('quickadmin.patients.fields.pmct-code').'*', ['class' => 'control-label']) !!}

                    </td>
                    <td>
                    {!! Form::text('pmct_code', old('pmct_code'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('pmct_code'))
                        <p class="help-block">
                            {{ $errors->first('pmct_code') }}
                        </p>
                    @endif

                    </td>
                </tr>
                <tr>
                    <td>
                    {!! Form::label('name', trans('quickadmin.patients.fields.name').'*', ['class' => 'control-label']) !!}
                    </td>
                    <td>
                    {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('name'))
                        <p class="help-block">
                            {{ $errors->first('name') }}
                        </p>
                    @endif
                    </td>
                </tr>
                <tr>
                    <td>
                    {!! Form::label('dob', trans('quickadmin.patients.fields.dob').'*', ['class' => 'control-label']) !!}

                    </td>
                    <td>
                    {!! Form::text('dob', old('dob'), ['class' => 'form-control date', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('dob'))
                        <p class="help-block">
                            {{ $errors->first('dob') }}
                        </p>
                    @endif
                    
                    </td>
                </tr>
                <tr>
                    <td>
                    {!! Form::label('address', trans('quickadmin.patients.fields.address').'*', ['class' => 'control-label']) !!}

                    </td>
                    <td>
                    {!! Form::text('address', old('address'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('address'))
                        <p class="help-block">
                            {{ $errors->first('address') }}
                        </p>
                    @endif
                    
                    </td>
                </tr>
                <tr>
                    <td > 
                    {!! Form::label('gravida', trans('quickadmin.patients.fields.gravida').'/Parity *', ['class' => 'control-label']) !!}

                    </td>

                    <td >
                        <div class="row">
                            <div class="col-xs-6">
                         
                            {!! Form::number('gravida', old('gravida'), ['class' => 'form-control', 'placeholder' => 'G', 'required' => '']) !!}   
                   
                            </div>
                            <div class="col-xs-6">
                            {!! Form::number('parity', old('parity'), ['class' =>  'form-control', 'placeholder' => 'P', 'required' => '']) !!}     
                            </div>
                        </div>                 
                    
                    <p class="help-block"></p>
                    @if($errors->has('gravida'))
                        <p class="help-block">
                            {{ $errors->first('gravida') }}
                        </p>

                    @endif
                    </td>
                  
                </tr>

                <tr>
                    <td>
                        {!! Form::label('edd', trans('quickadmin.patients.fields.edd').'*', ['class' => 'control-label']) !!}
                    </td>
                    <td>
                        {!! Form::text('edd', old('edd'), ['class' => 'form-control date', 'placeholder' => '', 'required' => '']) !!}
                        <p class="help-block"></p>
                        @if($errors->has('edd'))
                            <p class="help-block">
                                {{ $errors->first('edd') }}
                            </p>
                        @endif
                    </td>
                </tr>
                <tr>
                    <td>
                    {!! Form::label('hiv_status', trans('quickadmin.patients.fields.hiv-status').'', ['class' => 'control-label']) !!}
                    </td>
                    <td>
                    <label>
                            {!! Form::radio('hiv_status', '1', false, [ "required"=>""]) !!}
                            Known
                        </label>
            
                        <label>
                            {!! Form::radio('hiv_status', '0', false, []) !!}
                            Unknown
                        </label>
                    </td>
                </tr>
            </tbody>
        </table>
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
            
@stop