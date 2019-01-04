@extends('layouts.app')

@section('content')
  
    
{!! Form::model($patient, ['route' => ['patients.update', $patient->id], 'method' => 'patch']) !!}

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
                <div class="col-xs-12 form-group">
                    {!! Form::label('hiv_test_date', trans('quickadmin.patients.fields.hiv-test-date').'', ['class' => 'control-label']) !!}
                    {!! Form::text('hiv_test_date', old('hiv_test_date'), ['class' => 'form-control date', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('hiv_test_date'))
                        <p class="help-block">
                            {{ $errors->first('hiv_test_date') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('hiv_test_place', trans('quickadmin.patients.fields.hiv-test-place').'', ['class' => 'control-label']) !!}
                    {!! Form::text('hiv_test_place', old('hiv_test_place'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('hiv_test_place'))
                        <p class="help-block">
                            {{ $errors->first('hiv_test_place') }}
                        </p>
                    @endif
                </div>
            </div>
           
                   
                
    
            <!-- Lifelong ART ဆေး 	 -->
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('current_art_status', trans('quickadmin.patients.fields.current-art-status').'', ['class' => 'control-label']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('current_art_status'))
                        <p class="help-block">
                            {{ $errors->first('current_art_status') }}
                        </p>
                    @endif
                    <div>
                        <label>
                            {!! Form::radio('current_art_status', '1', false, []) !!}
                            On ART
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('current_art_status', '0', false, []) !!}
                            Not on ART
                        </label>
                    </div>
                    
                </div>
            </div>

           <!-- ဆေးစတင်သောက်သည့်ရက်စွဲ	  -->
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('current_art_start_date', trans('quickadmin.patients.fields.current-art-start-date').'', ['class' => 'control-label']) !!}
                    {!! Form::text('current_art_start_date', old('current_art_start_date'), ['class' => 'form-control date', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('current_art_start_date'))
                        <p class="help-block">
                            {{ $errors->first('current_art_start_date') }}
                        </p>
                    @endif
                </div>
            </div>

<!-- ယခုဆေးယူနေသောနေရာ၊ဌာန	 -->

            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('current_art_unit', trans('quickadmin.patients.fields.current-art-unit').'', ['class' => 'control-label']) !!}
                    {!! Form::text('current_art_unit', old('current_art_unit'), ['class' => 'form-control', 'placeholder' => 'ယခုဆေးယူနေသောနေရာ၊ဌာန	']) !!}
                    <p class="help-block">ယခုဆေးယူနေသောနေရာ၊ဌာန	</p>
                    @if($errors->has('current_art_unit'))
                        <p class="help-block">
                            {{ $errors->first('current_art_unit') }}
                        </p>
                    @endif
                </div>
            </div>
            <!-- ဆေးတွဲ  -->

            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('regimen', trans('quickadmin.patients.fields.regimen').'', ['class' => 'control-label']) !!}
                    {!! Form::text('regimen', old('regimen'), ['class' => 'form-control', 'placeholder' => 'ဆေးတွဲ']) !!}
                    <p class="help-block">ဆေးတွဲ</p>
                    @if($errors->has('regimen'))
                        <p class="help-block">
                            {{ $errors->first('regimen') }}
                        </p>
                    @endif
                </div>
            </div>
            <!-- ဆေးသောက်ပျက်ကွက်ခြင်း 	 -->

            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('int_treatment', trans('quickadmin.patients.fields.int-treatment').'', ['class' => 'control-label']) !!}
                    {!! Form::hidden('int_treatment', 0) !!}
                    {!! Form::checkbox('int_treatment', 1, old('int_treatment', old('int_treatment')), []) !!}
                    <p class="help-block">ဆေးသောက်ပျက်ကွက်ခြင်း</p>
                    @if($errors->has('int_treatment'))
                        <p class="help-block">
                            {{ $errors->first('int_treatment') }}
                        </p>
                    @endif
                </div>
            </div>
            <!-- ယခင်ကအေအာတီဆေး    -->
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('previous_art_history', trans('quickadmin.patients.fields.previous-art-history').'', ['class' => 'control-label']) !!}
                    {!! Form::hidden('previous_art_history', 0) !!}
                    {!! Form::checkbox('previous_art_history', 1, old('previous_art_history', old('previous_art_history')), []) !!}
                    <p class="help-block">ယခင်ကအေအာတီဆေး   </p>
                    @if($errors->has('previous_art_history'))
                        <p class="help-block">
                            {{ $errors->first('previous_art_history') }}
                        </p>
                    @endif
                </div>
            </div>
            <!-- သောက်ဖူးသောဆေးမှာ- -->
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('previous_art_option', trans('quickadmin.patients.fields.previous-art-option').'', ['class' => 'control-label']) !!}
                    <p class="help-block">  သောက်ဖူးသောဆေးမှာ-</p>
                    @if($errors->has('previous_art_option'))
                        <p class="help-block">
                            {{ $errors->first('previous_art_option') }}
                        </p>
                    @endif
                    <div>
                        <label>
                            {!! Form::radio('previous_art_option', '1', false, []) !!}
                            pARV
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('previous_art_option', '2', false, []) !!}
                            PEP
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('previous_art_option', '3', false, []) !!}
                            PreP
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('previous_art_option', '4', false, []) !!}
                            Lifelong ART &amp; Stopped
                        </label>
                    </div>
                    
                </div>
            </div>

                 <!-- သောက်ဖူးသောဆေးတွဲ……………………………….. -->
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('previous_art_history_regimen', trans('quickadmin.patients.fields.previous-art-history-regimen').'', ['class' => 'control-label']) !!}
                    {!! Form::text('previous_art_history_regimen', old('previous_art_history_regimen'), ['class' => 'form-control', 'placeholder' => '     သောက်ဖူးသောဆေးတွဲ']) !!}
                    <p class="help-block">     သောက်ဖူးသောဆေးတွဲ</p>
                    @if($errors->has('previous_art_history_regimen'))
                        <p class="help-block">
                            {{ $errors->first('previous_art_history_regimen') }}
                        </p>
                    @endif
                </div>
            </div>
            <!-- အိမ်ထောင်ဖက်သွေးစစ်ဆေးခြင်း -->

            <!-- HIV စစ်ဆေးသည့်ရက်စွဲ -->
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('spouse_test_date', trans('quickadmin.patients.fields.spouse-test-date').'', ['class' => 'control-label']) !!}
                    {!! Form::text('spouse_test_date', old('spouse_test_date'), ['class' => 'form-control date', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('spouse_test_date'))
                        <p class="help-block">
                            {{ $errors->first('spouse_test_date') }}
                        </p>
                    @endif
                </div>
            </div>
            <!-- စစ်ဆေးသည့်နေရာ/ဌာန -->
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('spouse_test_place', trans('quickadmin.patients.fields.spouse-test-place').'', ['class' => 'control-label']) !!}
                    {!! Form::text('spouse_test_place', old('spouse_test_place'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('spouse_test_place'))
                        <p class="help-block">
                            {{ $errors->first('spouse_test_place') }}
                        </p>
                    @endif
                </div>
            </div>
            <!-- အဖြေ 	 -->
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('spouse_test_result', trans('quickadmin.patients.fields.spouse-test-result').'', ['class' => 'control-label']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('spouse_test_result'))
                        <p class="help-block">
                            {{ $errors->first('spouse_test_result') }}
                        </p>
                    @endif
                    <div>
                        <label>
                            {!! Form::radio('spouse_test_result', '1', false, []) !!}
                            Reactive 
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('spouse_test_result', '0', false, []) !!}
                            Non Reactive
                        </label>
                    </div>
                    
                </div>
            </div>
            <!-- ARVဆေးရရှိရန် ညွှန်းပို့ခြင်း 	 -->
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('spouse_art_refer', trans('quickadmin.patients.fields.spouse-art-refer').'', ['class' => 'control-label']) !!}
                    <p class="help-block">ARVဆေးရရှိရန် ညွှန်းပို့ခြင်း</p>
                    @if($errors->has('spouse_art_refer'))
                        <p class="help-block">
                            {{ $errors->first('spouse_art_refer') }}
                        </p>
                    @endif
                    <div>
                        <label>
                            {!! Form::radio('spouse_art_refer', '1', false, []) !!}
                            Yes
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('spouse_art_refer', '0', false, []) !!}
                            No
                        </label>
                    </div>
                    
                </div>
            </div>
                        
        </div>
    </div>

    {!! Form::submit(trans('quickadmin.qa_update'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
    <nav aria-label="...">
  <ul class="pagination justify-content-center">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1">1</a>
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
</nav>

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