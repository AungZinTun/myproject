@extends('layouts.app')

@section('content')


    
{!! Form::model($patient, ['route' => ['patients.update', $patient->id], 'method' => 'patch']) !!}

      {!! Form::hidden('user_id', old('user_id'), ['class' => 'form-control', 'required' => '' ]) !!}
      {!! Form::hidden('township_id', old('township_id'), ['class' => 'form-control ']) !!}
      {!! Form::hidden('date_enrolled', old('date_enrolled'), ['class' => 'form-control date', 'placeholder' => '', 'required' => '']) !!}
      {!! Form::hidden('pmct_code', old('pmct_code'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
      {!! Form::hidden('name', old('name'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
      {!! Form::hidden('dob', old('dob'), ['class' => 'form-control date', 'placeholder' => '', 'required' => '']) !!}
      {!! Form::hidden('gravida', old('gravida'), ['class' => 'form-control', 'placeholder' => '']) !!}
      {!! Form::hidden('parity', old('parity'), ['class' => 'form-control', 'placeholder' => '']) !!}
      {!! Form::hidden('edd', old('edd'), ['class' => 'form-control date', 'placeholder' => '', 'required' => '']) !!}
      {!! Form::hidden('address', old('address'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
   
    <div class="panel text-sm">
        <div class="panel-heading bg-success">
        <div class="row text-muted"> 
                <div class="col-xs-6"> {!! Form::label('name', trans('quickadmin.patients.fields.name').'', ['class' => 'control-label']) !!} {{$patient->name }} 
                <p></p>

                {!! Form::label('mpi_code', trans('quickadmin.patients.fields.mpi-code').'', ['class' => 'control-label']) !!} :    ( {{   $patient->mpi_code }} )</div>
    

                <div class="col-xs-6 pull-right">
                {!! Form::label('user_id', trans('quickadmin.patients.fields.user').'*', ['class' => 'control-label']) !!} :{{   $patient->user->name}}
                <p>Phone:{{   $patient->user->phone }} </p>
                <p>Report Unit:  ( {{   $patient->township->title}} )</p>
            
                </div>
           
            </div>

         
       
        </div>

        <div class="panel-body bg-success ">
        <div class="row text-center">
            <span class='text-center text-info'>လက်ရှိကိုယ်ဝန်မတိုင်ခင်ကတည်းက HIV ပိုးရှိကြောင်းသိရှိပြီးသည့် မိခင်နှင့်ပတ်သက်၍ ဖြည့်စွက်ရန်</span>
        </div>
        <div class="row">
                <div class="col-xs-4">
                {!! Form::label('current_art_status', trans('quickadmin.patients.fields.current-art-status').'', ['class' => 'control-label']) !!}
                </div>
                <div class="col-xs-8">
            
                    <p class="help-block"></p>
                            @if($errors->has('current_art_status'))
                                <p class="help-block">
                                    {{ $errors->first('current_art_status') }}
                                </p>
                            @endif

                            <label>
                                    {!! Form::radio('current_art_status', '1', false, ["onclick"=>"artCheck();", "id"=>"onartcheck" , 'required'=>'']) !!}
                                    On ART
                                </label>
                    
                                <label>
                                    {!! Form::radio('current_art_status', '0', false, ["onclick"=>"artCheck();","id"=>"notonartcheck", 'required'=>'']) !!}
                                    Not on ART
                                </label>
                                <span id="selectOne" class='card text-danger'>
                                    Please select ART Status first!
                                </span>
              </div>
         
        
        </div>
      


                <!-- on art -->

    <div id="onArtTable" class='table bg-success'>
            <div class="row">
                <div class="col-xs-4">
                        {!! Form::label('current_art_start_date', trans('quickadmin.patients.fields.current-art-start-date').'', ['class' => 'control-label']) !!}
                </div>

                <div class="col-xs-8">
                
                        {!! Form::text('current_art_start_date', old('current_art_start_date'), ['class' => 'form-control date', 'placeholder' => '']) !!}
                            <p class="help-block"></p>
                            @if($errors->has('current_art_start_date'))
                                <p class="help-block">
                                    {{ $errors->first('current_art_start_date') }}
                                </p>
                            @endif
                </div>
            
            
            </div>

            <div class="row">
                <div class="col-xs-4">
                        {!! Form::label('current_art_unit', trans('quickadmin.patients.fields.current-art-unit').'', ['class' => 'control-label']) !!}
                </div>

                <div class="col-xs-8">
                            {!! Form::text('current_art_unit', old('current_art_unit'), ['class' => 'form-control', 'placeholder' => 'ယခုဆေးယူနေသောနေရာ၊ဌာန	']) !!}
                                
                                @if($errors->has('current_art_unit'))
                                    <p class="help-block">
                                        {{ $errors->first('current_art_unit') }}
                                    </p>
                                @endif  
                    
                </div>
            </div>

           
            <div class="row">
                <div class="col-xs-4">
                {!! Form::label('regimen', trans('quickadmin.patients.fields.regimen').'', ['class' => 'control-label']) !!}
                </div>

                <div class="col-xs-8">
                        
                {!! Form::text('regimen', old('regimen'), ['class' => 'form-control', 'placeholder' => 'ဆေးတွဲ']) !!}
                        
                        @if($errors->has('regimen'))
                            <p class="help-block">
                                {{ $errors->first('regimen') }}
                            </p>
                        @endif
                    
                </div>
            </div>

            <div class="row">
                <div class="col-xs-4">
                    
                {!! Form::label('int_treatment', trans('quickadmin.patients.fields.int-treatment').'', ['class' => 'control-label']) !!}
                <p class="help-block">ဆေးသောက်ပျက်ကွက်ခြင်း</p>
                </div>

                <div class="col-xs-8">
                        
                {!! Form::hidden('int_treatment', 0) !!}
                            
                    
                                    {!! Form::checkbox('int_treatment', 1, old('int_treatment', old('int_treatment')), []) !!}
                            
                                @if($errors->has('int_treatment'))
                                    <p class="help-block">
                                        {{ $errors->first('int_treatment') }}
                                    </p>
                                @endif
                    
                </div>
            </div>
    </div>
            <!-- end on art div -->
        

            <!-- not on art -->
         <div id="notonArtTable" class='table bg-success'>
            <div class="row">
                <div class="col-xs-4">
                        
                    {!! Form::label('previous_art_history', trans('quickadmin.patients.fields.previous-art-history').'', ['class' => 'control-label']) !!}
                    {!! Form::hidden('previous_art_history', 0) !!}
                  
                  
                </div>
                <div class="col-xs-8">
                {!! Form::checkbox('previous_art_history', 1, old('previous_art_history', old('previous_art_history')), []) !!}
                    
                    @if($errors->has('previous_art_history'))
                        <p class="help-block">
                            {{ $errors->first('previous_art_history') }}
                        </p>
                    @endif
                </div>

            </div>

               <div class="row">
                    <div class="col-xs-4">
                    {!! Form::label('previous_art_option', trans('quickadmin.patients.fields.previous-art-option').'', ['class' => 'control-label']) !!}
                  
                    </div>
                    <div class="col-xs-8">
                        
                  
                            @if($errors->has('previous_art_option'))
                                <p class="help-block">
                                    {{ $errors->first('previous_art_option') }}
                                </p>
                            @endif       

                              <label>
                                    {!! Form::radio('previous_art_option', '1', false, []) !!}
                                    pARV
                                </label>
                       
                         
                                <label>
                                    {!! Form::radio('previous_art_option', '2', false, []) !!}
                                    PEP
                                </label>
                        
                    
                                <label>
                                    {!! Form::radio('previous_art_option', '3', false, []) !!}
                                    PreP
                                </label>
                        
                                <label>
                                    {!! Form::radio('previous_art_option', '4', false, []) !!}
                                    Lifelong ART &amp; Stopped
                                </label>
                                              
                    
                    </div>
               </div>
                <div class="row">
                        <div class="col-xs-4">
                        
                        {!! Form::label('previous_art_history_regimen', trans('quickadmin.patients.fields.previous-art-history-regimen').'', ['class' => 'control-label']) !!}
                      
                        </div>
                        <div class="col-xs-8">
                        
                       
                        </td>
                        <td>
                        {!! Form::text('previous_art_history_regimen', old('previous_art_history_regimen'), ['class' => 'form-control', 'placeholder' => '     သောက်ဖူးသောဆေးတွဲ']) !!}
                    
                        @if($errors->has('previous_art_history_regimen'))
                            <p class="help-block">
                                {{ $errors->first('previous_art_history_regimen') }}
                            </p>
                        @endif
                        </div>
                
                </div>                   
            </div>

        
           
                   
                
    
     
        
                 <!-- သောက်ဖူးသောဆေးတွဲ……………………………….. -->
          
            <!-- အိမ်ထောင်ဖက်သွေးစစ်ဆေးခြင်း -->

           <!-- spouse        
         -->
         <div class="card card-primary">
                <div class="card-header">
                      <span class='text-success'>အိမ်ထောင်ဖက်သွေးစစ်ဆေးခြင်း</span>
     
                </div>
                <div class="card-body">
                        <div class="row">
                            <div class="col-xs-4 form-group">
                                {!! Form::label('spouse_test_date', trans('quickadmin.patients.fields.spouse-test-date').'', ['class' => 'control-label']) !!}
                            
                            </div>
                            <div class="col-xs-8">
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
                            <div class="col-xs-4 form-group">
                                {!! Form::label('spouse_test_place', trans('quickadmin.patients.fields.spouse-test-place').'', ['class' => 'control-label']) !!}
                            
                            </div>
                            <div class="col-xs-8">
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
                            <div class="col-xs-4 form-group">
                                {!! Form::label('spouse_test_result', trans('quickadmin.patients.fields.spouse-test-result').'', ['class' => 'control-label']) !!}                    
                            </div>
                            <div class="col-xs-8">
                            <p class="help-block"></p>
                                @if($errors->has('spouse_test_result'))
                                    <p class="help-block">
                                        {{ $errors->first('spouse_test_result') }}
                                    </p>
                                @endif
                                <div>
                                    <label>
                                        {!! Form::radio('spouse_test_result', '1', false, ["onclick"=>"referCheck();", "id"=>"spousePositive"]) !!}
                                        Reactive 
                                    </label>
                            
                                    <label>
                                        {!! Form::radio('spouse_test_result', '0', false, ["onclick"=>"referCheck();"]) !!}
                                        Non Reactive
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- ARVဆေးရရှိရန် ညွှန်းပို့ခြင်း 	 -->
                        <div class="row" id='referTo'>
                            <div class="col-xs-4 form-group">
                                {!! Form::label('spouse_art_refer', trans('quickadmin.patients.fields.spouse-art-refer').'', ['class' => 'control-label']) !!}                   
                                <p class="help-block">ARVဆေးရရှိရန် ညွှန်းပို့ခြင်း</p>
                            </div>
                            <div class="col-xs-8">
                        
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
                            
                                    <label>
                                        {!! Form::radio('spouse_art_refer', '0', false, []) !!}
                                        No
                                    </label>
                                </div>
                            </div>
                        </div>
                
                </div>
                <!-- spouse -->
         
         
         </div>
         
         </div>
         <div class="panel-footer">
            <div class="row">
                <div class="col-xs-4">
                {!! Form::submit(trans('Save'), ['class' => 'btn btn-success']) !!}
                {!! Form::close() !!}
                </div>
                <div class="col-xs-6 justify-content-center">
                <a class="btn btn-link" href="/patients/{{$patient->id}}/page1"> <i class="fa fa-backward"></i>  </a>
                <a  class="btn disabled" href="/patients/{{$patient->id}}/page4"> page 2</a>
                <a class="btn btn-link" href="/patients/{{$patient->id}}/page4"> <i class="fa fa-forward"></i> </a>
                </div>
                <div class="col-xs-2">
                <a href="/patients"  class="btn btn-default btn-sm text-muted">   <i class="fa fa-list text-muted"></i> Back </a>
                </div>
            
            </div>

        </div>

                        
        </div>

     
    </div>

@stop

@section('javascript')
    @parent

     <script type="text/javascript">
  window.onload=function(){
                artCheck();
                referCheck();
            };

            function referCheck() {
                if (document.getElementById('spousePositive').checked) {
                    document.getElementById('referTo').style.display = 'block';
                } 
                else {
                    document.getElementById('referTo').style.display = 'none';
            }
            }

            function artCheck() {
                if (document.getElementById('onartcheck').checked) {
                    document.getElementById('onArtTable').style.display = 'block';
                    document.getElementById('notonArtTable').style.display = 'none';
                    document.getElementById('selectOne').style.display = 'none';
                
                } 
                else if(document.getElementById('notonartcheck').checked) {
                    document.getElementById('notonArtTable').style.display = 'block';
                    document.getElementById('onArtTable').style.display = 'none';
                    document.getElementById('selectOne').style.display = 'none';
            }
            else {
                document.getElementById('onArtTable').style.display = 'none';
                document.getElementById('notonArtTable').style.display = 'none';
                document.getElementById('selectOne').style.display = 'block';

            }}
</script>

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
            var unsaved = false;

            $(":input").change(function(){ //triggers change in all input fields including text type
                unsaved = true;
            });

            function unloadPage(){ 
                if(unsaved){
                    return "You have unsaved changes on this page. Do you want to leave this page and discard your changes or stay on this page?";
                }
            }

        window.onbeforeunload = unloadPage;
    
    </script>
            
@stop