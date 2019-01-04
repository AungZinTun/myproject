@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Patient
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($patient, ['route' => ['patients.update', $patient->id], 'method' => 'patch']) !!}

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
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('current_art_option', trans('quickadmin.patients.fields.current-art-option').'', ['class' => 'control-label']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('current_art_option'))
                        <p class="help-block">
                            {{ $errors->first('current_art_option') }}
                        </p>
                    @endif
                    <div>
                        <label>
                            {!! Form::radio('current_art_option', '1', false, []) !!}
                            Lifelong ART
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('current_art_option', '2', false, []) !!}
                            Option B
                        </label>
                    </div>
                    
                </div>
            </div>
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
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('art_code', trans('quickadmin.patients.fields.art-code').'', ['class' => 'control-label']) !!}
                    {!! Form::text('art_code', old('art_code'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('art_code'))
                        <p class="help-block">
                            {{ $errors->first('art_code') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('vl_test', trans('quickadmin.patients.fields.vl-test').'', ['class' => 'control-label']) !!}
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
                <div class="col-xs-12 form-group">
                    {!! Form::label('vl_test_result', trans('quickadmin.patients.fields.vl-test-result').'', ['class' => 'control-label']) !!}
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
                <div class="col-xs-12 form-group">
                    {!! Form::label('vl_test_date', trans('quickadmin.patients.fields.vl-test-date').'', ['class' => 'control-label']) !!}
                    {!! Form::text('vl_test_date', old('vl_test_date'), ['class' => 'form-control date', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('vl_test_date'))
                        <p class="help-block">
                            {{ $errors->first('vl_test_date') }}
                        </p>
                    @endif
                </div>
            </div>
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
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('pregnancy_outcome', trans('quickadmin.patients.fields.pregnancy-outcome').'', ['class' => 'control-label']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('pregnancy_outcome'))
                        <p class="help-block">
                            {{ $errors->first('pregnancy_outcome') }}
                        </p>
                    @endif
                    <div>
                        <label>
                            {!! Form::radio('pregnancy_outcome', '1', false, []) !!}
                            live birth
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('pregnancy_outcome', '2', false, []) !!}
                            abortion
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('pregnancy_outcome', '3', false, []) !!}
                            still birth
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('pregnancy_outcome', '4', false, []) !!}
                            mother death
                        </label>
                    </div>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('mod', trans('quickadmin.patients.fields.mod').'', ['class' => 'control-label']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('mod'))
                        <p class="help-block">
                            {{ $errors->first('mod') }}
                        </p>
                    @endif
                    <div>
                        <label>
                            {!! Form::radio('mod', '1', false, []) !!}
                            NVD
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('mod', '2', false, []) !!}
                            LSCS
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('mod', '3', false, []) !!}
                            ELSCS
                        </label>
                    </div>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('dod', trans('quickadmin.patients.fields.dod').'', ['class' => 'control-label']) !!}
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
                <div class="col-xs-12 form-group">
                    {!! Form::label('pod', trans('quickadmin.patients.fields.pod').'', ['class' => 'control-label']) !!}
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
                <div class="col-xs-12 form-group">
                    {!! Form::label('baby', trans('quickadmin.patients.fields.baby').'', ['class' => 'control-label']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('baby'))
                        <p class="help-block">
                            {{ $errors->first('baby') }}
                        </p>
                    @endif
                    <div>
                        <label>
                            {!! Form::radio('baby', '1', false, []) !!}
                            Male
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('baby', '2', false, []) !!}
                            Female
                        </label>
                    </div>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('baby_wt', trans('quickadmin.patients.fields.baby-wt').'', ['class' => 'control-label']) !!}
                    {!! Form::number('baby_wt', old('baby_wt'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('baby_wt'))
                        <p class="help-block">
                            {{ $errors->first('baby_wt') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('baby_outcome', trans('quickadmin.patients.fields.baby-outcome').'', ['class' => 'control-label']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('baby_outcome'))
                        <p class="help-block">
                            {{ $errors->first('baby_outcome') }}
                        </p>
                    @endif
                    <div>
                        <label>
                            {!! Form::radio('baby_outcome', '1', false, []) !!}
                            alive
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('baby_outcome', '0', false, []) !!}
                            dead
                        </label>
                    </div>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('baby_outcome_dead_date', trans('quickadmin.patients.fields.baby-outcome-dead-date').'', ['class' => 'control-label']) !!}
                    {!! Form::text('baby_outcome_dead_date', old('baby_outcome_dead_date'), ['class' => 'form-control date', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('baby_outcome_dead_date'))
                        <p class="help-block">
                            {{ $errors->first('baby_outcome_dead_date') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('pep', trans('quickadmin.patients.fields.pep').'', ['class' => 'control-label']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('pep'))
                        <p class="help-block">
                            {{ $errors->first('pep') }}
                        </p>
                    @endif
                    <div>
                        <label>
                            {!! Form::radio('pep', '1', false, []) !!}
                            Yes
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('pep', '0', false, []) !!}
                            No
                        </label>
                    </div>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('pep_option', trans('quickadmin.patients.fields.pep-option').'', ['class' => 'control-label']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('pep_option'))
                        <p class="help-block">
                            {{ $errors->first('pep_option') }}
                        </p>
                    @endif
                    <div>
                        <label>
                            {!! Form::radio('pep_option', '1', false, []) !!}
                            AZT
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('pep_option', '2', false, []) !!}
                            NVP
                        </label>
                    </div>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('pep_not_reason', trans('quickadmin.patients.fields.pep-not-reason').'', ['class' => 'control-label']) !!}
                    {!! Form::text('pep_not_reason', old('pep_not_reason'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('pep_not_reason'))
                        <p class="help-block">
                            {{ $errors->first('pep_not_reason') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('cpt', trans('quickadmin.patients.fields.cpt').'', ['class' => 'control-label']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('cpt'))
                        <p class="help-block">
                            {{ $errors->first('cpt') }}
                        </p>
                    @endif
                    <div>
                        <label>
                            {!! Form::radio('cpt', '1', false, []) !!}
                            Yes
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('cpt', '0', false, []) !!}
                            No
                        </label>
                    </div>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('cpt_not_reason', trans('quickadmin.patients.fields.cpt-not-reason').'', ['class' => 'control-label']) !!}
                    {!! Form::text('cpt_not_reason', old('cpt_not_reason'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('cpt_not_reason'))
                        <p class="help-block">
                            {{ $errors->first('cpt_not_reason') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('dna_pcr', trans('quickadmin.patients.fields.dna-pcr').'', ['class' => 'control-label']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('dna_pcr'))
                        <p class="help-block">
                            {{ $errors->first('dna_pcr') }}
                        </p>
                    @endif
                    <div>
                        <label>
                            {!! Form::radio('dna_pcr', '1', false, []) !!}
                            Tested
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('dna_pcr', '0', false, []) !!}
                            Not Tested
                        </label>
                    </div>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('dna_pcr_date', trans('quickadmin.patients.fields.dna-pcr-date').'', ['class' => 'control-label']) !!}
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
                <div class="col-xs-12 form-group">
                    {!! Form::label('dna_pcr_result', trans('quickadmin.patients.fields.dna-pcr-result').'', ['class' => 'control-label']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('dna_pcr_result'))
                        <p class="help-block">
                            {{ $errors->first('dna_pcr_result') }}
                        </p>
                    @endif
                    <div>
                        <label>
                            {!! Form::radio('dna_pcr_result', '1', false, []) !!}
                            Detected 
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('dna_pcr_result', '0', false, []) !!}
                            Not detected 
                        </label>
                    </div>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('baby_arv', trans('quickadmin.patients.fields.baby-arv').'', ['class' => 'control-label']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('baby_arv'))
                        <p class="help-block">
                            {{ $errors->first('baby_arv') }}
                        </p>
                    @endif
                    <div>
                        <label>
                            {!! Form::radio('baby_arv', '1', false, []) !!}
                            Yes
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('baby_arv', '0', false, []) !!}
                            No
                        </label>
                    </div>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('baby_arv_no_reason', trans('quickadmin.patients.fields.baby-arv-no-reason').'', ['class' => 'control-label']) !!}
                    {!! Form::text('baby_arv_no_reason', old('baby_arv_no_reason'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('baby_arv_no_reason'))
                        <p class="help-block">
                            {{ $errors->first('baby_arv_no_reason') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('baby_txt_start_date', trans('quickadmin.patients.fields.baby-txt-start-date').'', ['class' => 'control-label']) !!}
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
                <div class="col-xs-12 form-group">
                    {!! Form::label('txt_unit', trans('quickadmin.patients.fields.txt-unit').'', ['class' => 'control-label']) !!}
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
                <div class="col-xs-12 form-group">
                    {!! Form::label('txt_regimen', trans('quickadmin.patients.fields.txt-regimen').'', ['class' => 'control-label']) !!}
                    {!! Form::text('txt_regimen', old('txt_regimen'), ['class' => 'form-control', 'placeholder' => 'ဆေးတွဲ']) !!}
                    <p class="help-block">ဆေးတွဲ</p>
                    @if($errors->has('txt_regimen'))
                        <p class="help-block">
                            {{ $errors->first('txt_regimen') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('baby_art_code', trans('quickadmin.patients.fields.baby-art-code').'', ['class' => 'control-label']) !!}
                    {!! Form::text('baby_art_code', old('baby_art_code'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('baby_art_code'))
                        <p class="help-block">
                            {{ $errors->first('baby_art_code') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
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
                    
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('bf_stop_date', trans('quickadmin.patients.fields.bf-stop-date').'', ['class' => 'control-label']) !!}
                    {!! Form::text('bf_stop_date', old('bf_stop_date'), ['class' => 'form-control date', 'placeholder' => '  မိခင်နို့တိုက်ကျွေးခြင်းရပ်သည့်နေ့စွဲ']) !!}
                    <p class="help-block">  မိခင်နို့တိုက်ကျွေးခြင်းရပ်သည့်နေ့စွဲ</p>
                    @if($errors->has('bf_stop_date'))
                        <p class="help-block">
                            {{ $errors->first('bf_stop_date') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('immunization_bcg_0', trans('quickadmin.patients.fields.immunization-bcg-0').'', ['class' => 'control-label']) !!}
                    {!! Form::hidden('immunization_bcg_0', 0) !!}
                    {!! Form::checkbox('immunization_bcg_0', 1, old('immunization_bcg_0', old('immunization_bcg_0')), []) !!}
                    <p class="help-block"></p>
                    @if($errors->has('immunization_bcg_0'))
                        <p class="help-block">
                            {{ $errors->first('immunization_bcg_0') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('immunization_bcg_2', trans('quickadmin.patients.fields.immunization-bcg-2').'', ['class' => 'control-label']) !!}
                    {!! Form::hidden('immunization_bcg_2', 0) !!}
                    {!! Form::checkbox('immunization_bcg_2', 1, old('immunization_bcg_2', old('immunization_bcg_2')), []) !!}
                    <p class="help-block"></p>
                    @if($errors->has('immunization_bcg_2'))
                        <p class="help-block">
                            {{ $errors->first('immunization_bcg_2') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('immunization_hpt_0', trans('quickadmin.patients.fields.immunization-hpt-0').'', ['class' => 'control-label']) !!}
                    {!! Form::hidden('immunization_hpt_0', 0) !!}
                    {!! Form::checkbox('immunization_hpt_0', 1, old('immunization_hpt_0', old('immunization_hpt_0')), []) !!}
                    <p class="help-block"></p>
                    @if($errors->has('immunization_hpt_0'))
                        <p class="help-block">
                            {{ $errors->first('immunization_hpt_0') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('immunization_penta_2', trans('quickadmin.patients.fields.immunization-penta-2').'', ['class' => 'control-label']) !!}
                    {!! Form::hidden('immunization_penta_2', 0) !!}
                    {!! Form::checkbox('immunization_penta_2', 1, old('immunization_penta_2', old('immunization_penta_2')), []) !!}
                    <p class="help-block"></p>
                    @if($errors->has('immunization_penta_2'))
                        <p class="help-block">
                            {{ $errors->first('immunization_penta_2') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('immunization_penta_4', trans('quickadmin.patients.fields.immunization-penta-4').'', ['class' => 'control-label']) !!}
                    {!! Form::hidden('immunization_penta_4', 0) !!}
                    {!! Form::checkbox('immunization_penta_4', 1, old('immunization_penta_4', old('immunization_penta_4')), []) !!}
                    <p class="help-block"></p>
                    @if($errors->has('immunization_penta_4'))
                        <p class="help-block">
                            {{ $errors->first('immunization_penta_4') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('immunization_penta_6', trans('quickadmin.patients.fields.immunization-penta-6').'', ['class' => 'control-label']) !!}
                    {!! Form::hidden('immunization_penta_6', 0) !!}
                    {!! Form::checkbox('immunization_penta_6', 1, old('immunization_penta_6', old('immunization_penta_6')), []) !!}
                    <p class="help-block"></p>
                    @if($errors->has('immunization_penta_6'))
                        <p class="help-block">
                            {{ $errors->first('immunization_penta_6') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('immunization_pcv', trans('quickadmin.patients.fields.immunization-pcv').'', ['class' => 'control-label']) !!}
                    {!! Form::hidden('immunization_pcv', 0) !!}
                    {!! Form::checkbox('immunization_pcv', 1, old('immunization_pcv', old('immunization_pcv')), []) !!}
                    <p class="help-block"></p>
                    @if($errors->has('immunization_pcv'))
                        <p class="help-block">
                            {{ $errors->first('immunization_pcv') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('immunization_pcv_4', trans('quickadmin.patients.fields.immunization-pcv-4').'', ['class' => 'control-label']) !!}
                    {!! Form::hidden('immunization_pcv_4', 0) !!}
                    {!! Form::checkbox('immunization_pcv_4', 1, old('immunization_pcv_4', old('immunization_pcv_4')), []) !!}
                    <p class="help-block"></p>
                    @if($errors->has('immunization_pcv_4'))
                        <p class="help-block">
                            {{ $errors->first('immunization_pcv_4') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('immunization_pcv_6', trans('quickadmin.patients.fields.immunization-pcv-6').'', ['class' => 'control-label']) !!}
                    {!! Form::hidden('immunization_pcv_6', 0) !!}
                    {!! Form::checkbox('immunization_pcv_6', 1, old('immunization_pcv_6', old('immunization_pcv_6')), []) !!}
                    <p class="help-block"></p>
                    @if($errors->has('immunization_pcv_6'))
                        <p class="help-block">
                            {{ $errors->first('immunization_pcv_6') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('immunization_ipv', trans('quickadmin.patients.fields.immunization-ipv').'', ['class' => 'control-label']) !!}
                    {!! Form::hidden('immunization_ipv', 0) !!}
                    {!! Form::checkbox('immunization_ipv', 1, old('immunization_ipv', old('immunization_ipv')), []) !!}
                    <p class="help-block"></p>
                    @if($errors->has('immunization_ipv'))
                        <p class="help-block">
                            {{ $errors->first('immunization_ipv') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('immunization_ipv_4', trans('quickadmin.patients.fields.immunization-ipv-4').'', ['class' => 'control-label']) !!}
                    {!! Form::hidden('immunization_ipv_4', 0) !!}
                    {!! Form::checkbox('immunization_ipv_4', 1, old('immunization_ipv_4', old('immunization_ipv_4')), []) !!}
                    <p class="help-block"></p>
                    @if($errors->has('immunization_ipv_4'))
                        <p class="help-block">
                            {{ $errors->first('immunization_ipv_4') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('immunization_ipv6', trans('quickadmin.patients.fields.immunization-ipv6').'', ['class' => 'control-label']) !!}
                    {!! Form::hidden('immunization_ipv6', 0) !!}
                    {!! Form::checkbox('immunization_ipv6', 1, old('immunization_ipv6', old('immunization_ipv6')), []) !!}
                    <p class="help-block"></p>
                    @if($errors->has('immunization_ipv6'))
                        <p class="help-block">
                            {{ $errors->first('immunization_ipv6') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('baby_outcome1', trans('quickadmin.patients.fields.baby-outcome1').'', ['class' => 'control-label']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('baby_outcome1'))
                        <p class="help-block">
                            {{ $errors->first('baby_outcome1') }}
                        </p>
                    @endif
                    <div>
                        <label>
                            {!! Form::radio('baby_outcome1', '1', false, []) !!}
                            Alive 
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('baby_outcome1', '0', false, []) !!}
                            Dead
                        </label>
                    </div>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('dna_pcr1', trans('quickadmin.patients.fields.dna-pcr1').'', ['class' => 'control-label']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('dna_pcr1'))
                        <p class="help-block">
                            {{ $errors->first('dna_pcr1') }}
                        </p>
                    @endif
                    <div>
                        <label>
                            {!! Form::radio('dna_pcr1', '1', false, []) !!}
                            Tested
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('dna_pcr1', '0', false, []) !!}
                            Not Tested
                        </label>
                    </div>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('dna_pcr_date1', trans('quickadmin.patients.fields.dna-pcr-date1').'', ['class' => 'control-label']) !!}
                    {!! Form::text('dna_pcr_date1', old('dna_pcr_date1'), ['class' => 'form-control date', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('dna_pcr_date1'))
                        <p class="help-block">
                            {{ $errors->first('dna_pcr_date1') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('dna_pcr_result1', trans('quickadmin.patients.fields.dna-pcr-result1').'', ['class' => 'control-label']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('dna_pcr_result1'))
                        <p class="help-block">
                            {{ $errors->first('dna_pcr_result1') }}
                        </p>
                    @endif
                    <div>
                        <label>
                            {!! Form::radio('dna_pcr_result1', '1', false, []) !!}
                            Detected 
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('dna_pcr_result1', '0', false, []) !!}
                            Not Detected
                        </label>
                    </div>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('baby_arv1', trans('quickadmin.patients.fields.baby-arv1').'', ['class' => 'control-label']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('baby_arv1'))
                        <p class="help-block">
                            {{ $errors->first('baby_arv1') }}
                        </p>
                    @endif
                    <div>
                        <label>
                            {!! Form::radio('baby_arv1', '1', false, []) !!}
                            Yes
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('baby_arv1', '0', false, []) !!}
                            No
                        </label>
                    </div>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('feeding_option1', trans('quickadmin.patients.fields.feeding-option1').'', ['class' => 'control-label']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('feeding_option1'))
                        <p class="help-block">
                            {{ $errors->first('feeding_option1') }}
                        </p>
                    @endif
                    <div>
                        <label>
                            {!! Form::radio('feeding_option1', '1', false, []) !!}
                            Exclusive Breast Feeding 
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('feeding_option1', '2', false, []) !!}
                            Mixed Feeding 
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('feeding_option1', '3', false, []) !!}
                            Bottle Feeding 
                        </label>
                    </div>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('baby_outcome2', trans('quickadmin.patients.fields.baby-outcome2').'', ['class' => 'control-label']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('baby_outcome2'))
                        <p class="help-block">
                            {{ $errors->first('baby_outcome2') }}
                        </p>
                    @endif
                    <div>
                        <label>
                            {!! Form::radio('baby_outcome2', '1', false, []) !!}
                            Alive
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('baby_outcome2', '0', false, []) !!}
                            Dead
                        </label>
                    </div>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('hiv_ab_test', trans('quickadmin.patients.fields.hiv-ab-test').'', ['class' => 'control-label']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('hiv_ab_test'))
                        <p class="help-block">
                            {{ $errors->first('hiv_ab_test') }}
                        </p>
                    @endif
                    <div>
                        <label>
                            {!! Form::radio('hiv_ab_test', '1', false, []) !!}
                            Yes
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('hiv_ab_test', '0', false, []) !!}
                            No
                        </label>
                    </div>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('hiv_ab_test_date', trans('quickadmin.patients.fields.hiv-ab-test-date').'', ['class' => 'control-label']) !!}
                    {!! Form::text('hiv_ab_test_date', old('hiv_ab_test_date'), ['class' => 'form-control date', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('hiv_ab_test_date'))
                        <p class="help-block">
                            {{ $errors->first('hiv_ab_test_date') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('hiv_ab_test_not_reason', trans('quickadmin.patients.fields.hiv-ab-test-not-reason').'', ['class' => 'control-label']) !!}
                    {!! Form::text('hiv_ab_test_not_reason', old('hiv_ab_test_not_reason'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('hiv_ab_test_not_reason'))
                        <p class="help-block">
                            {{ $errors->first('hiv_ab_test_not_reason') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('hiv_ab_test_result', trans('quickadmin.patients.fields.hiv-ab-test-result').'', ['class' => 'control-label']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('hiv_ab_test_result'))
                        <p class="help-block">
                            {{ $errors->first('hiv_ab_test_result') }}
                        </p>
                    @endif
                    <div>
                        <label>
                            {!! Form::radio('hiv_ab_test_result', '1', false, []) !!}
                            Reactive
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('hiv_ab_test_result', '0', false, []) !!}
                            Non Reactive 
                        </label>
                    </div>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('dna_pcr2', trans('quickadmin.patients.fields.dna-pcr2').'', ['class' => 'control-label']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('dna_pcr2'))
                        <p class="help-block">
                            {{ $errors->first('dna_pcr2') }}
                        </p>
                    @endif
                    <div>
                        <label>
                            {!! Form::radio('dna_pcr2', '1', false, []) !!}
                            Tested
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('dna_pcr2', '0', false, []) !!}
                            Not Tested
                        </label>
                    </div>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('dna_pcr_date2', trans('quickadmin.patients.fields.dna-pcr-date2').'', ['class' => 'control-label']) !!}
                    {!! Form::text('dna_pcr_date2', old('dna_pcr_date2'), ['class' => 'form-control date', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('dna_pcr_date2'))
                        <p class="help-block">
                            {{ $errors->first('dna_pcr_date2') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('dna_pcr_result2', trans('quickadmin.patients.fields.dna-pcr-result2').'', ['class' => 'control-label']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('dna_pcr_result2'))
                        <p class="help-block">
                            {{ $errors->first('dna_pcr_result2') }}
                        </p>
                    @endif
                    <div>
                        <label>
                            {!! Form::radio('dna_pcr_result2', '1', false, []) !!}
                            Detected 
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('dna_pcr_result2', '0', false, []) !!}
                            Not Detected
                        </label>
                    </div>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('baby_arv2', trans('quickadmin.patients.fields.baby-arv2').'', ['class' => 'control-label']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('baby_arv2'))
                        <p class="help-block">
                            {{ $errors->first('baby_arv2') }}
                        </p>
                    @endif
                    <div>
                        <label>
                            {!! Form::radio('baby_arv2', '1', false, []) !!}
                            Yes
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('baby_arv2', '0', false, []) !!}
                            No
                        </label>
                    </div>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('feeding_option2', trans('quickadmin.patients.fields.feeding-option2').'', ['class' => 'control-label']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('feeding_option2'))
                        <p class="help-block">
                            {{ $errors->first('feeding_option2') }}
                        </p>
                    @endif
                    <div>
                        <label>
                            {!! Form::radio('feeding_option2', '1', false, []) !!}
                            Exclusive Breast Feeding
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('feeding_option2', '2', false, []) !!}
                            Mixed Feeding
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('feeding_option2', '3', false, []) !!}
                            Bottle Feeding
                        </label>
                    </div>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('immunization_mr', trans('quickadmin.patients.fields.immunization-mr').'', ['class' => 'control-label']) !!}
                    {!! Form::hidden('immunization_mr', 0) !!}
                    {!! Form::checkbox('immunization_mr', 1, old('immunization_mr', old('immunization_mr')), []) !!}
                    <p class="help-block"></p>
                    @if($errors->has('immunization_mr'))
                        <p class="help-block">
                            {{ $errors->first('immunization_mr') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('immunization_mr1', trans('quickadmin.patients.fields.immunization-mr1').'', ['class' => 'control-label']) !!}
                    {!! Form::hidden('immunization_mr1', 0) !!}
                    {!! Form::checkbox('immunization_mr1', 1, old('immunization_mr1', old('immunization_mr1')), []) !!}
                    <p class="help-block"></p>
                    @if($errors->has('immunization_mr1'))
                        <p class="help-block">
                            {{ $errors->first('immunization_mr1') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('immunization_je', trans('quickadmin.patients.fields.immunization-je').'', ['class' => 'control-label']) !!}
                    {!! Form::hidden('immunization_je', 0) !!}
                    {!! Form::checkbox('immunization_je', 1, old('immunization_je', old('immunization_je')), []) !!}
                    <p class="help-block"></p>
                    @if($errors->has('immunization_je'))
                        <p class="help-block">
                            {{ $errors->first('immunization_je') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('baby_outcome3', trans('quickadmin.patients.fields.baby-outcome3').'', ['class' => 'control-label']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('baby_outcome3'))
                        <p class="help-block">
                            {{ $errors->first('baby_outcome3') }}
                        </p>
                    @endif
                    <div>
                        <label>
                            {!! Form::radio('baby_outcome3', '1', false, []) !!}
                            Alive 
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('baby_outcome3', '0', false, []) !!}
                            Dead
                        </label>
                    </div>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('hiv_ab_test1', trans('quickadmin.patients.fields.hiv-ab-test1').'', ['class' => 'control-label']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('hiv_ab_test1'))
                        <p class="help-block">
                            {{ $errors->first('hiv_ab_test1') }}
                        </p>
                    @endif
                    <div>
                        <label>
                            {!! Form::radio('hiv_ab_test1', '1', false, []) !!}
                            Tested
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('hiv_ab_test1', '0', false, []) !!}
                            Not Tested
                        </label>
                    </div>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('hiv_ab_test_date1', trans('quickadmin.patients.fields.hiv-ab-test-date1').'', ['class' => 'control-label']) !!}
                    {!! Form::text('hiv_ab_test_date1', old('hiv_ab_test_date1'), ['class' => 'form-control date', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('hiv_ab_test_date1'))
                        <p class="help-block">
                            {{ $errors->first('hiv_ab_test_date1') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('hiv_ab_test_not_reason1', trans('quickadmin.patients.fields.hiv-ab-test-not-reason1').'', ['class' => 'control-label']) !!}
                    {!! Form::text('hiv_ab_test_not_reason1', old('hiv_ab_test_not_reason1'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('hiv_ab_test_not_reason1'))
                        <p class="help-block">
                            {{ $errors->first('hiv_ab_test_not_reason1') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('hiv_ab_test_result1', trans('quickadmin.patients.fields.hiv-ab-test-result1').'', ['class' => 'control-label']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('hiv_ab_test_result1'))
                        <p class="help-block">
                            {{ $errors->first('hiv_ab_test_result1') }}
                        </p>
                    @endif
                    <div>
                        <label>
                            {!! Form::radio('hiv_ab_test_result1', '1', false, []) !!}
                            Reactive 
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('hiv_ab_test_result1', '0', false, []) !!}
                            Non Reactive 
                        </label>
                    </div>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('dna_pcr3', trans('quickadmin.patients.fields.dna-pcr3').'', ['class' => 'control-label']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('dna_pcr3'))
                        <p class="help-block">
                            {{ $errors->first('dna_pcr3') }}
                        </p>
                    @endif
                    <div>
                        <label>
                            {!! Form::radio('dna_pcr3', '1', false, []) !!}
                            Tested
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('dna_pcr3', '0', false, []) !!}
                            Not Tested
                        </label>
                    </div>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('dna_pcr_date3', trans('quickadmin.patients.fields.dna-pcr-date3').'', ['class' => 'control-label']) !!}
                    {!! Form::text('dna_pcr_date3', old('dna_pcr_date3'), ['class' => 'form-control date', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('dna_pcr_date3'))
                        <p class="help-block">
                            {{ $errors->first('dna_pcr_date3') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('dna_pcr_result3', trans('quickadmin.patients.fields.dna-pcr-result3').'', ['class' => 'control-label']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('dna_pcr_result3'))
                        <p class="help-block">
                            {{ $errors->first('dna_pcr_result3') }}
                        </p>
                    @endif
                    <div>
                        <label>
                            {!! Form::radio('dna_pcr_result3', '1', false, []) !!}
                            Detected
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('dna_pcr_result3', '0', false, []) !!}
                            Not Detected
                        </label>
                    </div>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('baby_arv3', trans('quickadmin.patients.fields.baby-arv3').'', ['class' => 'control-label']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('baby_arv3'))
                        <p class="help-block">
                            {{ $errors->first('baby_arv3') }}
                        </p>
                    @endif
                    <div>
                        <label>
                            {!! Form::radio('baby_arv3', '1', false, []) !!}
                            Yes
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('baby_arv3', '0', false, []) !!}
                            No
                        </label>
                    </div>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('feeding_option3', trans('quickadmin.patients.fields.feeding-option3').'', ['class' => 'control-label']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('feeding_option3'))
                        <p class="help-block">
                            {{ $errors->first('feeding_option3') }}
                        </p>
                    @endif
                    <div>
                        <label>
                            {!! Form::radio('feeding_option3', '1', false, []) !!}
                            Exclusive Breast Feeding 
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('feeding_option3', '2', false, []) !!}
                            Mixed Feeding 
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('feeding_option3', '3', false, []) !!}
                            Bottle Feeding
                        </label>
                    </div>
                    
                </div>
            </div>

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection