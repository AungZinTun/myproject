@extends('layouts.app')

@section('content')
   
    
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
                <div class="col-xs-4 form-group">
                    {!! Form::label('baby_outcome', trans('quickadmin.patients.fields.baby-outcome').'', ['class' => 'control-label']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('baby_outcome'))
                        <p class="help-block">
                            {{ $errors->first('baby_outcome') }}
                        </p>
                    @endif                    
                </div>
                <div class="col-xs-8">
                <div>
                        <label>
                            {!! Form::radio('baby_outcome1', '0', false, ["id"=>"Outcome_alive", "onclick"=>"outcomeCheck();"]) !!}
                            alive
                        </label>
               
                        <label>
                            {!! Form::radio('baby_outcome1', '1', false,  ["id"=>"Outcome_dead", "onclick"=>"outcomeCheck();"]) !!}
                            dead
                        </label>
                    </div>
                
                </div>
            </div>

            <div class="row" id="dead_date">
                <div class="col-xs-12 form-group">
                    {!! Form::label('baby_outcome_dead_date', trans('quickadmin.patients.fields.baby-outcome-dead-date').'', ['class' => 'control-label']) !!}
                    {!! Form::text('baby_outcome_dead_date', old('baby_outcome_dead_date'), ['class' => 'form-control date', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('baby_outcome_dead_date'))
                        <p class="help-block">
                            {{ $errors->first('baby_outcome_dead_date1') }}
                        </p>
                    @endif
                </div>
            </div>
           
           <div class="card" id="alive">
                
                    <div class="row">
                        <div class="col-xs-4 form-group">
                            {!! Form::label('dna_pcr1', trans('quickadmin.patients.fields.dna-pcr').'', ['class' => 'control-label']) !!}
                        
                        </div>
                        <div class="col-xs-8">
                        <p class="help-block"></p>
                            @if($errors->has('dna_pcr1'))
                                <p class="help-block">
                                    {{ $errors->first('dna_pcr1') }}
                                </p>
                            @endif
                            <div>
                                <label>
                                    {!! Form::radio('dna_pcr1', '1', false, ["id"=>"dnaTested", "onclick"=>"dnaCheck();"]) !!}
                                    Tested
                                </label>
                    
                                <label>
                                    {!! Form::radio('dna_pcr1', '0', false, ["id"=>"dnaNotTested", "onclick"=>"dnaCheck();"]) !!}
                                    Not Tested
                                </label>
                            </div>
                            
                        </div>
                    </div>
                    <div class="row" id="dnaNotReason">
                            <div class="col-xs-4 form-group">
                            {!! Form::label('dna_pcr_not_reason', 'Reason for no DNA PCR Test'.'', ['class' => 'control-label']) !!}

                            </div>
                            <div class="col-xs-8 form-group">
                            {!! Form::text('dna_pcr_not_reason', old('dna_pcr_not_reason'), ['class' => 'form-control', 'placeholder' => '']) !!}

                            </div>
                    </div>

                    <!-- dna test  -->
                    <div class="row" id="dnaTestResult">
                            <div class="col-xs-12">
                                <div class="row">
                                    <div class="col-xs-4 form-group">
                                        {!! Form::label('dna_pcr_date', trans('quickadmin.patients.fields.dna-pcr-date').'', ['class' => 'control-label']) !!}
                            
                                    </div>
                                    <div class="col-xs-8">
                                    {!! Form::text('dna_pcr_date', old('dna_pcr_date'), ['class' => 'form-control date', 'placeholder' => '']) !!}
                                        <p class="help-block"></p>
                                        @if($errors->has('dna_pcr_date'))
                                            <p class="help-block">
                                                {{ $errors->first('dna_pcr_date') }}
                                            </p>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-4 form-group">
                                        {!! Form::label('dna_pcr_result', trans('quickadmin.patients.fields.dna-pcr-result').'', ['class' => 'control-label']) !!}
                                    
                                    </div>
                                    <div class="col-xs-8">
                                    <p class="help-block"></p>
                                        @if($errors->has('dna_pcr_result'))
                                            <p class="help-block">
                                                {{ $errors->first('dna_pcr_result') }}
                                            </p>
                                        @endif
                                        <div>
                                            <label>
                                                {!! Form::radio('dna_pcr_result', '1', false, ["id"=>"dnaDetected", "onclick"=>"dnaResultCheck();"]) !!}
                                                Detected 
                                            </label>
                                    
                                            <label>
                                                {!! Form::radio('dna_pcr_result', '0', false, []) !!}
                                                Not detected 
                                            </label>
                                        </div>
                                        
                                    </div>
                                </div>

                            </div>
                    </div>
                     <!-- dna test  -->
                    <div class="row" id="arvStatus">
                        <div class="col-xs-4 form-group">
                            {!! Form::label('baby_arv', trans('quickadmin.patients.fields.baby-arv').'', ['class' => 'control-label']) !!}
                        
                        </div>
                        <div class="col-xs-8">
                        <p class="help-block"></p>
                            @if($errors->has('baby_arv'))
                                <p class="help-block">
                                    {{ $errors->first('baby_arv') }}
                                </p>
                            @endif
                            <div>
                                <label>
                                    {!! Form::radio('baby_arv', '1', false, ["id"=>"arvYes", "onclick"=>"arvCheck"]) !!}
                                    Yes
                                </label>
                                <label>
                                    {!! Form::radio('baby_arv', '0', false, ["id"=>"arvNo", "onclick"=>"arvCheck"]) !!}
                                    No
                                </label>
                            </div>
                            
                        </div>
                    </div>
                    <div class="row" id="arvNoReason">
                        <div class="col-xs-4 form-group">
                            {!! Form::label('baby_arv_no_reason', trans('quickadmin.patients.fields.baby-arv-no-reason').'', ['class' => 'control-label']) !!}
                        
                        </div>
                        <div class="col-xs-8">
                        {!! Form::text('baby_arv_no_reason', old('baby_arv_no_reason'), ['class' => 'form-control', 'placeholder' => '']) !!}
                            <p class="help-block"></p>
                            @if($errors->has('baby_arv_no_reason'))
                                <p class="help-block">
                                    {{ $errors->first('baby_arv_no_reason') }}
                                </p>
                            @endif
                        
                        </div>
                    </div>
                   <div class="row" id="arvDetail">
                        <div class="col-xs-12">
                        <div class="row">
                        <div class="col-xs-4 form-group">
                            {!! Form::label('baby_txt_start_date', trans('quickadmin.patients.fields.baby-txt-start-date').'', ['class' => 'control-label']) !!}
                        
                        </div>
                        <div class="col-xs-8">
                           {!! Form::text('baby_txt_start_date', old('baby_txt_start_date'), ['class' => 'form-control date', 'placeholder' => '']) !!}
                            <p class="help-block"></p>
                            @if($errors->has('baby_txt_start_date'))
                                <p class="help-block">
                                    {{ $errors->first('baby_txt_start_date') }}
                                </p>
                            @endif 
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4 form-group">
                            {!! Form::label('txt_unit', trans('quickadmin.patients.fields.txt-unit').'', ['class' => 'control-label']) !!}
                        
                        </div>
                        <div class="col-xs-8">
                        {!! Form::text('txt_unit', old('txt_unit'), ['class' => 'form-control', 'placeholder' => '']) !!}
                            <p class="help-block"></p>
                            @if($errors->has('txt_unit'))
                                <p class="help-block">
                                    {{ $errors->first('txt_unit') }}
                                </p>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4 form-group">
                            {!! Form::label('txt_regimen', trans('quickadmin.patients.fields.txt-regimen').'', ['class' => 'control-label']) !!}
                          
                        </div>
                        <div class="col-xs-8">
                        {!! Form::text('txt_regimen', old('txt_regimen'), ['class' => 'form-control', 'placeholder' => 'ဆေးတွဲ']) !!}
                            @if($errors->has('txt_regimen'))
                                <p class="help-block">
                                    {{ $errors->first('txt_regimen') }}
                                </p>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4 form-group">
                            {!! Form::label('baby_art_code', trans('quickadmin.patients.fields.baby-art-code').'', ['class' => 'control-label']) !!}
                          
                        </div>
                        <div class="col-xs-8">
                        {!! Form::text('baby_art_code', old('baby_art_code'), ['class' => 'form-control', 'placeholder' => '']) !!}
                            <p class="help-block"></p>
                            @if($errors->has('baby_art_code'))
                                <p class="help-block">
                                    {{ $errors->first('baby_art_code') }}
                                </p>
                            @endif
                        </div>
                    </div>
                        </div>
                   
                   </div>
                    <div class="row">
                        <div class="col-xs-4 form-group">
                            {!! Form::label('feeding_option', trans('quickadmin.patients.fields.feeding-option').'', ['class' => 'control-label']) !!}
                            <p class="help-block"></p>
                            @if($errors->has('feeding_option'))
                                <p class="help-block">
                                    {{ $errors->first('feeding_option') }}
                                </p>
                            @endif
                            <div>
                                <label>
                                    {!! Form::radio('feeding_option', '1', false, []) !!}
                                    Exclusive Breast Feeding
                                </label>
                             </div>
                             <div>
                                <label>
                                    {!! Form::radio('feeding_option', '2', false, []) !!}
                                    Mixed Feeding 
                                </label>
                            </div>
                             <div>
                                <label>
                                    {!! Form::radio('feeding_option', '3', false, []) !!}
                                    Bottle Feeding
                                </label>
                            </div>
                            {!! Form::label('bf_stop_date', trans('quickadmin.patients.fields.bf-stop-date').'', ['class' => 'control-label']) !!}
                           {!! Form::text('bf_stop_date', old('bf_stop_date'), ['class' => 'form-control date', 'placeholder' => '  မိခင်နို့တိုက်ကျွေးခြင်းရပ်သည့်နေ့စွဲ']) !!}
                          
                            @if($errors->has('bf_stop_date'))
                                <p class="help-block">
                                    {{ $errors->first('bf_stop_date') }}
                                </p>
                            @endif
                            
                        </div>
                        <div class="col-xs-8">
                       <label for=""> Immunization</label>
                            <table class='table table-xs text-xs table-bordered bg-warning'>
                                    <thead>
                                    <tr>
                                        <th>
                                            </th>
                                            <th>
                                            0 Month
                                            </th>
                                            <th>
                                            2 Month
                                            </th>
                                            <th>
                                            4 Month
                                            </th>
                                            <th>
                                            6 Month
                                            </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                            BCG
                                            </td>
                                            <td>
                                                {!! Form::hidden('immunization_bcg_0', 0) !!}
                                                {!! Form::checkbox('immunization_bcg_0', 1, old('immunization_bcg_0', old('immunization_bcg_0')), []) !!}
                                                    <p class="help-block"></p>
                                                    @if($errors->has('immunization_bcg_0'))
                                                        <p class="help-block">
                                                            {{ $errors->first('immunization_bcg_0') }}
                                                        </p>
                                                    @endif
                                               
                                            </td>   
                                            <td>
                                            {!! Form::hidden('immunization_bcg_2', 0) !!}
                                                {!! Form::checkbox('immunization_bcg_2', 1, old('immunization_bcg_2', old('immunization_bcg_2')), []) !!}
                                                    <p class="help-block"></p>
                                                    @if($errors->has('immunization_bcg_2'))
                                                        <p class="help-block">
                                                            {{ $errors->first('immunization_bcg_2') }}
                                                        </p>   @endif
                                            </td>                
               
                                        </tr>
                                        <tr>
                                            <td>
                                            Hepatitis B
                                            </td>
                                            <td>
                                                    {!! Form::hidden('immunization_hpt_0', 0) !!}
                                                    {!! Form::checkbox('immunization_hpt_0', 1, old('immunization_hpt_0', old('immunization_hpt_0')), []) !!}
                                                    <p class="help-block"></p>
                                                    @if($errors->has('immunization_hpt_0'))
                                                        <p class="help-block">
                                                            {{ $errors->first('immunization_hpt_0') }}
                                                        </p>
                                                    @endif

                                            </td>
                                            <td>

                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                            Penta
                                            </td>
                                            <td></td>
                                            <td>
                                                {!! Form::hidden('immunization_penta_2', 0) !!}
                                                {!! Form::checkbox('immunization_penta_2', 1, old('immunization_penta_2', old('immunization_penta_2')), []) !!}
                                                <p class="help-block"></p>
                                                @if($errors->has('immunization_penta_2'))
                                                    <p class="help-block">
                                                        {{ $errors->first('immunization_penta_2') }}
                                                    </p>
                                                @endif                                            
                                            </td>
                                            <td>
                                                {!! Form::hidden('immunization_penta_4', 0) !!}
                                                {!! Form::checkbox('immunization_penta_4', 1, old('immunization_penta_4', old('immunization_penta_4')), []) !!}
                                                <p class="help-block"></p>
                                                @if($errors->has('immunization_penta_4'))
                                                    <p class="help-block">
                                                        {{ $errors->first('immunization_penta_4') }}
                                                    </p>
                                                @endif
                                            </td>
                                            <td>
                                                {!! Form::hidden('immunization_penta_6', 0) !!}
                                                {!! Form::checkbox('immunization_penta_6', 1, old('immunization_penta_6', old('immunization_penta_6')), []) !!}
                                                <p class="help-block"></p>
                                                @if($errors->has('immunization_penta_6'))
                                                    <p class="help-block">
                                                        {{ $errors->first('immunization_penta_6') }}
                                                    </p>
                                                @endif  
                            
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            PCP
                                            </td>
                                            <td></td>
                                            <td>
                                                {!! Form::hidden('immunization_pcv', 0) !!}
                                                {!! Form::checkbox('immunization_pcv', 1, old('immunization_pcv', old('immunization_pcv')), []) !!}
                                                <p class="help-block"></p>
                                                @if($errors->has('immunization_pcv'))
                                                    <p class="help-block">
                                                        {{ $errors->first('immunization_pcv') }}
                                                    </p>
                                                @endif
                                            </td>
                                            <td>
                                                {!! Form::hidden('immunization_pcv_4', 0) !!}
                                                {!! Form::checkbox('immunization_pcv_4', 1, old('immunization_pcv_4', old('immunization_pcv_4')), []) !!}
                                                <p class="help-block"></p>
                                                @if($errors->has('immunization_pcv_4'))
                                                    <p class="help-block">
                                                        {{ $errors->first('immunization_pcv_4') }}
                                                    </p>
                                                @endif
                                            </td>
                                            <td>
                                                {!! Form::hidden('immunization_pcv_6', 0) !!}
                                                {!! Form::checkbox('immunization_pcv_6', 1, old('immunization_pcv_6', old('immunization_pcv_6')), []) !!}
                                                <p class="help-block"></p>
                                                @if($errors->has('immunization_pcv_6'))
                                                    <p class="help-block">
                                                        {{ $errors->first('immunization_pcv_6') }}
                                                    </p>
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            IPV
                                            </td>
                                            <td></td>
                                            <td>
                                                {!! Form::hidden('immunization_ipv', 0) !!}
                                                {!! Form::checkbox('immunization_ipv', 1, old('immunization_ipv', old('immunization_ipv')), []) !!}
                                                <p class="help-block"></p>
                                                @if($errors->has('immunization_ipv'))
                                                    <p class="help-block">
                                                        {{ $errors->first('immunization_ipv') }}
                                                    </p>
                                                @endif
                                            </td>
                                            <td>
                                                {!! Form::hidden('immunization_ipv_4', 0) !!}
                                                {!! Form::checkbox('immunization_ipv_4', 1, old('immunization_ipv_4', old('immunization_ipv_4')), []) !!}
                                                <p class="help-block"></p>
                                                @if($errors->has('immunization_ipv_4'))
                                                    <p class="help-block">
                                                        {{ $errors->first('immunization_ipv_4') }}
                                                    </p>
                                                @endif
                                            </td>
                                            <td>
                                                {!! Form::hidden('immunization_ipv6', 0) !!}
                                                {!! Form::checkbox('immunization_ipv6', 1, old('immunization_ipv6', old('immunization_ipv6')), []) !!}
                                                <p class="help-block"></p>
                                                @if($errors->has('immunization_ipv6'))
                                                    <p class="help-block">
                                                        {{ $errors->first('immunization_ipv6') }}
                                                    </p>
                                                @endif
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
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
                    <a class="btn btn-link" href="/patients/{{$patient->id}}/page5"> <i class="fa fa-backward"></i>  </a>
                    <a  class="btn disabled" href="/patients/{{$patient->id}}/page"> page 6</a>
                 <a  id="nextPage" class="btn" href="/patients/{{$patient->id}}/page7"> <i class="fa fa-forward"></i> </a>          
                    </div>
                    <div class="col-xs-2">
                    <a href="/patients"  class="btn btn-sm btn-default text-muted">   <i class="fa fa-list text-muted"></i> Back </a>
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

          window.onload=function(){
            outcomeCheck();
            pepCheck();
            cptCheck();
            dnaCheck();
            dnaResultCheck();
            arvCheck();
            };

        function outcomeCheck() {
                if (document.getElementById('Outcome_alive').checked) {
                    document.getElementById('alive').style.display="block";
                    document.getElementById('dead_date').style.display="none";
                    document.getElementById("nextPage").className="btn btn-link";
                }
                else if(document.getElementById('Outcome_dead').checked) {
                    document.getElementById('alive').style.display="none";
                    document.getElementById('dead_date').style.display="block";
                    document.getElementById("nextPage").className="btn disabled";
                }
            else {
                 document.getElementById('alive').style.display="none";
                 document.getElementById('dead_date').style.display="none";
                 document.getElementById("nextPage").className="btn disabled";
            }
        }
        function pepCheck(){
            if (document.getElementById('pepYes').checked) {
                document.getElementById('pepOption').style.display="block";
                document.getElementById('pepNoReason').style.display="none";          
            }
            else if (document.getElementById('pepNo').checked) {
                document.getElementById('pepOption').style.display="none";
                document.getElementById('pepNoReason').style.display="block";          
            }
            else {
                document.getElementById('pepOption').style.display="none";
                document.getElementById('pepNoReason').style.display="none";  
            }
        }
        function cptCheck(){
          
           if (document.getElementById('cptNo').checked) {
                document.getElementById('cptNoReason').style.display="block";          
            }
            else {
                document.getElementById('cptNoReason').style.display="none";  
            }
        }
        function dnaCheck() {
            if (document.getElementById('dnaTested').checked) {
                document.getElementById('dnaTestResult').style.display="block";
               
            }
        
            else {
                document.getElementById('dnaTestResult').style.display="none";
              
            }
        }
        function dnaResultCheck() {
            if (document.getElementById('dnaDetected').checked) {
                document.getElementById('arvStatus').style.display="block";
            }
        
            else {
                document.getElementById('arvStatus').style.display="none";
              
            }
        }
        function arvCheck(){
            if (document.getElementById('arvYes').checked) {
                document.getElementById('arvDetail').style.display="block";
                document.getElementById('arvNoReason').style.display="none";          
            }
            else if (document.getElementById('arvNo').checked) {
                document.getElementById('arvDetail').style.display="none";
                document.getElementById('arvNoReason').style.display="block";          
            }
            else {
                document.getElementById('arvDetail').style.display="none";
                document.getElementById('arvNoReason').style.display="none";  
            }
        }
    </script>
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

