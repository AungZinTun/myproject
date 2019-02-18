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
   
   
      <div class="panel panel-defaul text-sm">
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

        <div class="panel-body bg-success">
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
                                    Please select ART Status!
                                </span>
              </div>
         
        
        </div>


        <div id="onArtTable"> 

           <!-- ဆေးစတင်သောက်သည့်ရက်စွဲ	  -->
            <div class="row">
                <div class="col-xs-4 form-group">
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

<!-- ယခုဆေးယူနေသောနေရာ၊ဌာန	 -->

            <div class="row">
                <div class="col-xs-4 form-group">
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

            <!-- art code -->


         
            <div class="row">
                <div class="col-xs-4 form-group">
                    {!! Form::label('art_code', trans('quickadmin.patients.fields.art-code').'', ['class' => 'control-label']) !!}
                 
                </div>
                <div class="col-xs-8">
                {!! Form::text('art_code', old('art_code'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('art_code'))
                        <p class="help-block">
                            {{ $errors->first('art_code') }}
                        </p>
                    @endif
                </div>
            </div>
            <!-- ဆေးသောက်ပျက်ကွက်ခြင်း 	 -->

            <div class="row">
                <div class="col-xs-4 form-group">
                    {!! Form::label('int_treatment', trans('quickadmin.patients.fields.int-treatment').'', ['class' => 'control-label']) !!}
                
                </div>
                <div class="col-xs-8">
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

               <div class="row">
                <div class="col-xs-4 form-group">
                    {!! Form::label('vl_test', trans('quickadmin.patients.fields.vl-test').'', ['class' => 'control-label']) !!}
                
                </div>
                <div class="col-xs-8">
                {!! Form::hidden('vl_test', 0) !!}
                    {!! Form::checkbox('vl_test', 1, old('vl_test', old('vl_test')), []) !!}
                    <p class="help-block">HIVပိုးကောင်ရေ(VL)</p>
                    @if($errors->has('vl_test'))
                        <p class="help-block">
                            {{ $errors->first('vl_test') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-4 form-group">
                    {!! Form::label('vl_test_result', trans('quickadmin.patients.fields.vl-test-result').'', ['class' => 'control-label']) !!}
                
                </div>
                <div class="col-xs-8">
                {!! Form::number('vl_test_result', old('vl_test_result'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('vl_test_result'))
                        <p class="help-block">
                            {{ $errors->first('vl_test_result') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-4 form-group">
                    {!! Form::label('vl_test_date', trans('quickadmin.patients.fields.vl-test-date').'', ['class' => 'control-label']) !!}
                 
                </div>
                <div class="col-xs-8">
                {!! Form::text('vl_test_date', old('vl_test_date'), ['class' => 'form-control date', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('vl_test_date'))
                        <p class="help-block">
                            {{ $errors->first('vl_test_date') }}
                        </p>
                    @endif
                </div>
            </div>
        </div>

         <!-- not on art -->
            <div class="row" id='notonArtTable'>
                <div class="col-xs-4 form-group">
                    {!! Form::label('no_art_reason','Reason for not On ART', ['class' => 'control-label']) !!}
                   
                </div>
                <div class="col-xs-8">
                {!! Form::text('no_art_reason', old('no_art_reason'), ['class' => 'form-control', 'placeholder' => 'အကြောင်းအရင်း']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('no_art_reason'))
                        <p class="help-block">
                            {{ $errors->first('no_art_reason') }}
                        </p>
                    @endif
                </div>
            </div>  
                <!-- not on art -->

         <hr class='text-primary'>
 
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
        
      


<hr>
  
<span class='text-success'>ကိုယ်ဝန်ရလဒ်-</span>
        <p></p>

            <div class="row">
                <div class="col-xs-4 form-group">
                    {!! Form::label('pregnancy_outcome', trans('quickadmin.patients.fields.pregnancy-outcome').'', ['class' => 'control-label']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('pregnancy_outcome'))
                        <p class="help-block">
                            {{ $errors->first('pregnancy_outcome') }}
                        </p>
                    @endif                    
                </div>
                <div class="col-xs-8">
                    <div>
                            <label>
                                {!! Form::radio('pregnancy_outcome', '1', false, ['id'=>'livebirth', 'onclick'=>'outcomeCheck();']) !!}
                                live birth
                            </label>
                    
                            <label>
                                {!! Form::radio('pregnancy_outcome', '2', false, ['onclick'=>'outcomeCheck();']) !!}
                                abortion
                            </label>
                    
                            <label>
                                {!! Form::radio('pregnancy_outcome', '3', false, ['onclick'=>'outcomeCheck();']) !!}
                                still birth
                            </label>
                    
                            <label>
                                {!! Form::radio('pregnancy_outcome', '4', false, ['onclick'=>'outcomeCheck();']) !!}
                                mother death
                            </label>
                        </div>
                
                </div>
            </div>

           <div class="card" id="mod">
              <div class="card-body" id="bg-primary">
              <div class="row">
                        <div class="col-xs-4 form-group">
                            {!! Form::label('mod', trans('quickadmin.patients.fields.mod').'', ['class' => 'control-label']) !!}
                            <p class="help-block"></p>
                            @if($errors->has('mod'))
                                <p class="help-block">
                                    {{ $errors->first('mod') }}
                                </p>
                            @endif                    
                        </div>
                        <div class="col-xs-8">
                        <div>
                                <label>
                                    {!! Form::radio('mod', '1', false, []) !!}
                                    NVD
                                </label>
                        
                                <label>
                                    {!! Form::radio('mod', '2', false, []) !!}
                                    LSCS
                                </label>
                        
                                <label>
                                    {!! Form::radio('mod', '3', false, []) !!}
                                    ELSCS
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4 form-group">
                            {!! Form::label('dod', trans('quickadmin.patients.fields.dod').'', ['class' => 'control-label']) !!}
                        </div>
                        <div class="col-xs-8">
                        {!! Form::text('dod', old('dod'), ['class' => 'form-control date', 'placeholder' => '']) !!}
                            <p class="help-block"></p>
                            @if($errors->has('dod'))
                                <p class="help-block">
                                    {{ $errors->first('dod') }}
                                </p>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4 form-group">
                            {!! Form::label('pod', trans('quickadmin.patients.fields.pod').'', ['class' => 'control-label']) !!}
                        </div>
                        <div class="col-xs-8">
                        {!! Form::text('pod', old('pod'), ['class' => 'form-control', 'placeholder' => '']) !!}
                            <p class="help-block"></p>
                            @if($errors->has('pod'))
                                <p class="help-block">
                                    {{ $errors->first('pod') }}
                                </p>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4 form-group">
                            {!! Form::label('baby', trans('quickadmin.patients.fields.baby').'', ['class' => 'control-label']) !!}
                            <p class="help-block"></p>
                            @if($errors->has('baby'))
                                <p class="help-block">
                                    {{ $errors->first('baby') }}
                                </p>
                            @endif                   
                        </div>
                        <div class="col-xs-8">
                        <div>
                                <label>
                                    {!! Form::radio('baby', '1', false, []) !!}
                                    Male
                                </label>
                        
                                <label>
                                    {!! Form::radio('baby', '2', false, []) !!}
                                    Female
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4 form-group">
                            {!! Form::label('baby_wt', trans('quickadmin.patients.fields.baby-wt').'', ['class' => 'control-label']) !!}
                        </div>
                        <div class="col-xs-8">
                        {!! Form::number('baby_wt', old('baby_wt'), ['class' => 'form-control', 'placeholder' => '']) !!}
                            <p class="help-block"></p>
                            @if($errors->has('baby_wt'))
                                <p class="help-block">
                                    {{ $errors->first('baby_wt') }}
                                </p>
                            @endif
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
                    @if ($patient->hiv_status==0 )   <a class="btn btn-link" href="/patients/{{$patient->id}}/page3"> <i class="fa fa-backward"></i> </a>
                  @else   <a class="btn btn-link" href="/patients/{{$patient->id}}/page2"> <i class="fa fa-backward"></i> </a>
                  @endif
                    <a  class="btn disabled" href="/patients/{{$patient->id}}/page4"> page 4</a>
                    <a class="btn btn-link" href="/patients/{{$patient->id}}/page5"> <i class="fa fa-forward"></i> </a>
                    </div>
                    <div class="col-xs-2">
                    <a href="/patients"  class=" btn btn-sm btn-default text-muted">   <i class="fa fa-list text-muted"></i> Back </a>
                    </div>
                
                </div>
                
            </div>





@stop

@section('javascript')
    @parent

 <script>

            window.onload=function(){
                artCheck();
                referCheck();
                outcomeCheck();
            };

            function outcomeCheck(){
                if (document.getElementById('livebirth').checked) {
                    document.getElementById('mod').style.display="block";
                }
                else{
                    document.getElementById('mod').style.display="none";
                }
            }

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
            
@stop