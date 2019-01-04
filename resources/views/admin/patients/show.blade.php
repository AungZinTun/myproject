@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.patients.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.patients.fields.user')</th>
                            <td field-key='user'>{{ $patient->user->name ?? '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patients.fields.township')</th>
                            <td field-key='township'>{{ $patient->township->title ?? '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patients.fields.mpi-code')</th>
                            <td field-key='mpi_code'>{{ $patient->mpi_code }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patients.fields.date-enrolled')</th>
                            <td field-key='date_enrolled'>{{ $patient->date_enrolled }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patients.fields.pmct-code')</th>
                            <td field-key='pmct_code'>{{ $patient->pmct_code }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patients.fields.name')</th>
                            <td field-key='name'>{{ $patient->name }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patients.fields.dob')</th>
                            <td field-key='dob'>{{ $patient->dob }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patients.fields.address')</th>
                            <td field-key='address'>{{ $patient->address }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patients.fields.gravida')</th>
                            <td field-key='gravida'>{{ $patient->gravida }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patients.fields.parity')</th>
                            <td field-key='parity'>{{ $patient->parity }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patients.fields.edd')</th>
                            <td field-key='edd'>{{ $patient->edd }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patients.fields.hiv-status')</th>
                            <td field-key='hiv_status'>{{ $patient->hiv_status }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patients.fields.hiv-test-date')</th>
                            <td field-key='hiv_test_date'>{{ $patient->hiv_test_date }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patients.fields.hiv-test-place')</th>
                            <td field-key='hiv_test_place'>{{ $patient->hiv_test_place }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patients.fields.current-art-status')</th>
                            <td field-key='current_art_status'>{{ $patient->current_art_status }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patients.fields.current-art-option')</th>
                            <td field-key='current_art_option'>{{ $patient->current_art_option }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patients.fields.current-art-start-date')</th>
                            <td field-key='current_art_start_date'>{{ $patient->current_art_start_date }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patients.fields.current-art-unit')</th>
                            <td field-key='current_art_unit'>{{ $patient->current_art_unit }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patients.fields.regimen')</th>
                            <td field-key='regimen'>{{ $patient->regimen }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patients.fields.int-treatment')</th>
                            <td field-key='int_treatment'>{{ Form::checkbox("int_treatment", 1, $patient->int_treatment == 1 ? true : false, ["disabled"]) }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patients.fields.art-code')</th>
                            <td field-key='art_code'>{{ $patient->art_code }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patients.fields.vl-test')</th>
                            <td field-key='vl_test'>{{ Form::checkbox("vl_test", 1, $patient->vl_test == 1 ? true : false, ["disabled"]) }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patients.fields.vl-test-result')</th>
                            <td field-key='vl_test_result'>{{ $patient->vl_test_result }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patients.fields.vl-test-date')</th>
                            <td field-key='vl_test_date'>{{ $patient->vl_test_date }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patients.fields.previous-art-history')</th>
                            <td field-key='previous_art_history'>{{ Form::checkbox("previous_art_history", 1, $patient->previous_art_history == 1 ? true : false, ["disabled"]) }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patients.fields.previous-art-option')</th>
                            <td field-key='previous_art_option'>{{ $patient->previous_art_option }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patients.fields.previous-art-history-regimen')</th>
                            <td field-key='previous_art_history_regimen'>{{ $patient->previous_art_history_regimen }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patients.fields.spouse-test-date')</th>
                            <td field-key='spouse_test_date'>{{ $patient->spouse_test_date }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patients.fields.spouse-test-place')</th>
                            <td field-key='spouse_test_place'>{{ $patient->spouse_test_place }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patients.fields.spouse-test-result')</th>
                            <td field-key='spouse_test_result'>{{ $patient->spouse_test_result }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patients.fields.spouse-art-refer')</th>
                            <td field-key='spouse_art_refer'>{{ $patient->spouse_art_refer }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patients.fields.pregnancy-outcome')</th>
                            <td field-key='pregnancy_outcome'>{{ $patient->pregnancy_outcome }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patients.fields.mod')</th>
                            <td field-key='mod'>{{ $patient->mod }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patients.fields.dod')</th>
                            <td field-key='dod'>{{ $patient->dod }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patients.fields.pod')</th>
                            <td field-key='pod'>{{ $patient->pod }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patients.fields.baby')</th>
                            <td field-key='baby'>{{ $patient->baby }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patients.fields.baby-wt')</th>
                            <td field-key='baby_wt'>{{ $patient->baby_wt }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patients.fields.baby-outcome')</th>
                            <td field-key='baby_outcome'>{{ $patient->baby_outcome }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patients.fields.baby-outcome-dead-date')</th>
                            <td field-key='baby_outcome_dead_date'>{{ $patient->baby_outcome_dead_date }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patients.fields.pep')</th>
                            <td field-key='pep'>{{ $patient->pep }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patients.fields.pep-option')</th>
                            <td field-key='pep_option'>{{ $patient->pep_option }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patients.fields.pep-not-reason')</th>
                            <td field-key='pep_not_reason'>{{ $patient->pep_not_reason }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patients.fields.cpt')</th>
                            <td field-key='cpt'>{{ $patient->cpt }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patients.fields.cpt-not-reason')</th>
                            <td field-key='cpt_not_reason'>{{ $patient->cpt_not_reason }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patients.fields.dna-pcr')</th>
                            <td field-key='dna_pcr'>{{ $patient->dna_pcr }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patients.fields.dna-pcr-date')</th>
                            <td field-key='dna_pcr_date'>{{ $patient->dna_pcr_date }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patients.fields.dna-pcr-result')</th>
                            <td field-key='dna_pcr_result'>{{ $patient->dna_pcr_result }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patients.fields.baby-arv')</th>
                            <td field-key='baby_arv'>{{ $patient->baby_arv }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patients.fields.baby-arv-no-reason')</th>
                            <td field-key='baby_arv_no_reason'>{{ $patient->baby_arv_no_reason }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patients.fields.baby-txt-start-date')</th>
                            <td field-key='baby_txt_start_date'>{{ $patient->baby_txt_start_date }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patients.fields.txt-unit')</th>
                            <td field-key='txt_unit'>{{ $patient->txt_unit }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patients.fields.txt-regimen')</th>
                            <td field-key='txt_regimen'>{{ $patient->txt_regimen }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patients.fields.baby-art-code')</th>
                            <td field-key='baby_art_code'>{{ $patient->baby_art_code }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patients.fields.feeding-option')</th>
                            <td field-key='feeding_option'>{{ $patient->feeding_option }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patients.fields.bf-stop-date')</th>
                            <td field-key='bf_stop_date'>{{ $patient->bf_stop_date }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patients.fields.immunization-bcg-0')</th>
                            <td field-key='immunization_bcg_0'>{{ Form::checkbox("immunization_bcg_0", 1, $patient->immunization_bcg_0 == 1 ? true : false, ["disabled"]) }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patients.fields.immunization-bcg-2')</th>
                            <td field-key='immunization_bcg_2'>{{ Form::checkbox("immunization_bcg_2", 1, $patient->immunization_bcg_2 == 1 ? true : false, ["disabled"]) }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patients.fields.immunization-hpt-0')</th>
                            <td field-key='immunization_hpt_0'>{{ Form::checkbox("immunization_hpt_0", 1, $patient->immunization_hpt_0 == 1 ? true : false, ["disabled"]) }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patients.fields.immunization-penta-2')</th>
                            <td field-key='immunization_penta_2'>{{ Form::checkbox("immunization_penta_2", 1, $patient->immunization_penta_2 == 1 ? true : false, ["disabled"]) }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patients.fields.immunization-penta-4')</th>
                            <td field-key='immunization_penta_4'>{{ Form::checkbox("immunization_penta_4", 1, $patient->immunization_penta_4 == 1 ? true : false, ["disabled"]) }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patients.fields.immunization-penta-6')</th>
                            <td field-key='immunization_penta_6'>{{ Form::checkbox("immunization_penta_6", 1, $patient->immunization_penta_6 == 1 ? true : false, ["disabled"]) }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patients.fields.immunization-pcv')</th>
                            <td field-key='immunization_pcv'>{{ Form::checkbox("immunization_pcv", 1, $patient->immunization_pcv == 1 ? true : false, ["disabled"]) }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patients.fields.immunization-pcv-4')</th>
                            <td field-key='immunization_pcv_4'>{{ Form::checkbox("immunization_pcv_4", 1, $patient->immunization_pcv_4 == 1 ? true : false, ["disabled"]) }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patients.fields.immunization-pcv-6')</th>
                            <td field-key='immunization_pcv_6'>{{ Form::checkbox("immunization_pcv_6", 1, $patient->immunization_pcv_6 == 1 ? true : false, ["disabled"]) }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patients.fields.immunization-ipv')</th>
                            <td field-key='immunization_ipv'>{{ Form::checkbox("immunization_ipv", 1, $patient->immunization_ipv == 1 ? true : false, ["disabled"]) }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patients.fields.immunization-ipv-4')</th>
                            <td field-key='immunization_ipv_4'>{{ Form::checkbox("immunization_ipv_4", 1, $patient->immunization_ipv_4 == 1 ? true : false, ["disabled"]) }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patients.fields.immunization-ipv6')</th>
                            <td field-key='immunization_ipv6'>{{ Form::checkbox("immunization_ipv6", 1, $patient->immunization_ipv6 == 1 ? true : false, ["disabled"]) }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patients.fields.baby-outcome1')</th>
                            <td field-key='baby_outcome1'>{{ $patient->baby_outcome1 }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patients.fields.dna-pcr1')</th>
                            <td field-key='dna_pcr1'>{{ $patient->dna_pcr1 }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patients.fields.dna-pcr-date1')</th>
                            <td field-key='dna_pcr_date1'>{{ $patient->dna_pcr_date1 }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patients.fields.dna-pcr-result1')</th>
                            <td field-key='dna_pcr_result1'>{{ $patient->dna_pcr_result1 }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patients.fields.baby-arv1')</th>
                            <td field-key='baby_arv1'>{{ $patient->baby_arv1 }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patients.fields.feeding-option1')</th>
                            <td field-key='feeding_option1'>{{ $patient->feeding_option1 }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patients.fields.baby-outcome2')</th>
                            <td field-key='baby_outcome2'>{{ $patient->baby_outcome2 }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patients.fields.hiv-ab-test')</th>
                            <td field-key='hiv_ab_test'>{{ $patient->hiv_ab_test }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patients.fields.hiv-ab-test-date')</th>
                            <td field-key='hiv_ab_test_date'>{{ $patient->hiv_ab_test_date }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patients.fields.hiv-ab-test-not-reason')</th>
                            <td field-key='hiv_ab_test_not_reason'>{{ $patient->hiv_ab_test_not_reason }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patients.fields.hiv-ab-test-result')</th>
                            <td field-key='hiv_ab_test_result'>{{ $patient->hiv_ab_test_result }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patients.fields.dna-pcr2')</th>
                            <td field-key='dna_pcr2'>{{ $patient->dna_pcr2 }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patients.fields.dna-pcr-date2')</th>
                            <td field-key='dna_pcr_date2'>{{ $patient->dna_pcr_date2 }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patients.fields.dna-pcr-result2')</th>
                            <td field-key='dna_pcr_result2'>{{ $patient->dna_pcr_result2 }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patients.fields.baby-arv2')</th>
                            <td field-key='baby_arv2'>{{ $patient->baby_arv2 }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patients.fields.feeding-option2')</th>
                            <td field-key='feeding_option2'>{{ $patient->feeding_option2 }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patients.fields.immunization-mr')</th>
                            <td field-key='immunization_mr'>{{ Form::checkbox("immunization_mr", 1, $patient->immunization_mr == 1 ? true : false, ["disabled"]) }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patients.fields.immunization-mr1')</th>
                            <td field-key='immunization_mr1'>{{ Form::checkbox("immunization_mr1", 1, $patient->immunization_mr1 == 1 ? true : false, ["disabled"]) }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patients.fields.immunization-je')</th>
                            <td field-key='immunization_je'>{{ Form::checkbox("immunization_je", 1, $patient->immunization_je == 1 ? true : false, ["disabled"]) }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patients.fields.baby-outcome3')</th>
                            <td field-key='baby_outcome3'>{{ $patient->baby_outcome3 }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patients.fields.hiv-ab-test1')</th>
                            <td field-key='hiv_ab_test1'>{{ $patient->hiv_ab_test1 }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patients.fields.hiv-ab-test-date1')</th>
                            <td field-key='hiv_ab_test_date1'>{{ $patient->hiv_ab_test_date1 }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patients.fields.hiv-ab-test-not-reason1')</th>
                            <td field-key='hiv_ab_test_not_reason1'>{{ $patient->hiv_ab_test_not_reason1 }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patients.fields.hiv-ab-test-result1')</th>
                            <td field-key='hiv_ab_test_result1'>{{ $patient->hiv_ab_test_result1 }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patients.fields.dna-pcr3')</th>
                            <td field-key='dna_pcr3'>{{ $patient->dna_pcr3 }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patients.fields.dna-pcr-date3')</th>
                            <td field-key='dna_pcr_date3'>{{ $patient->dna_pcr_date3 }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patients.fields.dna-pcr-result3')</th>
                            <td field-key='dna_pcr_result3'>{{ $patient->dna_pcr_result3 }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patients.fields.baby-arv3')</th>
                            <td field-key='baby_arv3'>{{ $patient->baby_arv3 }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patients.fields.feeding-option3')</th>
                            <td field-key='feeding_option3'>{{ $patient->feeding_option3 }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.patients.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
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
