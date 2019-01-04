<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::hidden('user_id', 'User Id:') !!}
    {!! Form::hidden('user_id', Auth()->user()->id , ['class' => 'form-control']) !!}
</div>

<!-- Township Id Field -->
<div class="form-group col-sm-6">
    {!! Form::hidden('township_id', 'Township Id:') !!}
    {!! Form::hidden('township_id', Auth()->user()->township_id , ['class' => 'form-control']) !!}
</div>

<!-- Mpi Code Field -->
<div class="form-group col-xs-12">
    {!! Form::label('mpi_code', 'Mpi Code:') !!}
    {!! Form::text('mpi_code', null, ['class' => 'form-control']) !!}
</div>

<!-- Date Enrolled Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_enrolled', 'Date Enrolled:') !!}
    {!! Form::date('date_enrolled', null, ['class' => 'form-control']) !!}
</div>

<!-- Pmct Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pmct_code', 'Pmct Code:') !!}
    {!! Form::text('pmct_code', null, ['class' => 'form-control']) !!}
</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Dob Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dob', 'Dob:') !!}
    {!! Form::date('dob', null, ['class' => 'form-control']) !!}
</div>

<!-- Address Field -->
<div class="form-group col-sm-6">
    {!! Form::label('address', 'Address:') !!}
    {!! Form::text('address', null, ['class' => 'form-control']) !!}
</div>

<!-- Gravida Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gravida', 'Gravida:') !!}
    {!! Form::number('gravida', null, ['class' => 'form-control']) !!}
</div>

<!-- Parity Field -->
<div class="form-group col-sm-6">
    {!! Form::label('parity', 'Parity:') !!}
    {!! Form::number('parity', null, ['class' => 'form-control']) !!}
</div>

<!-- Edd Field -->
<div class="form-group col-sm-6">
    {!! Form::label('edd', 'Edd:') !!}
    {!! Form::date('edd', null, ['class' => 'form-control']) !!}
</div>

<!-- Hiv Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('hiv_status', 'Hiv Status:') !!}
    {!! Form::text('hiv_status', null, ['class' => 'form-control']) !!}
</div>

<!-- Hiv Test Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('hiv_test_date', 'Hiv Test Date:') !!}
    {!! Form::date('hiv_test_date', null, ['class' => 'form-control']) !!}
</div>

<!-- Hiv Test Place Field -->
<div class="form-group col-sm-6">
    {!! Form::label('hiv_test_place', 'Hiv Test Place:') !!}
    {!! Form::text('hiv_test_place', null, ['class' => 'form-control']) !!}
</div>

<!-- Current Art Option Field -->
<div class="form-group col-sm-6">
    {!! Form::label('current_art_option', 'Current Art Option:') !!}
    {!! Form::text('current_art_option', null, ['class' => 'form-control']) !!}
</div>

<!-- Current Art Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('current_art_status', 'Current Art Status:') !!}
    {!! Form::text('current_art_status', null, ['class' => 'form-control']) !!}
</div>

<!-- Current Art Start Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('current_art_start_date', 'Current Art Start Date:') !!}
    {!! Form::date('current_art_start_date', null, ['class' => 'form-control']) !!}
</div>

<!-- Current Art Unit Field -->
<div class="form-group col-sm-6">
    {!! Form::label('current_art_unit', 'Current Art Unit:') !!}
    {!! Form::text('current_art_unit', null, ['class' => 'form-control']) !!}
</div>

<!-- Regimen Field -->
<div class="form-group col-sm-6">
    {!! Form::label('regimen', 'Regimen:') !!}
    {!! Form::text('regimen', null, ['class' => 'form-control']) !!}
</div>

<!-- Int Treatment Field -->
<div class="form-group col-sm-6">
    {!! Form::label('int_treatment', 'Int Treatment:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('int_treatment', false) !!}
        {!! Form::checkbox('int_treatment', '1', null) !!} 1
    </label>
</div>

<!-- Art Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('art_code', 'Art Code:') !!}
    {!! Form::text('art_code', null, ['class' => 'form-control']) !!}
</div>

<!-- Vl Test Field -->
<div class="form-group col-sm-6">
    {!! Form::label('vl_test', 'Vl Test:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('vl_test', false) !!}
        {!! Form::checkbox('vl_test', '1', null) !!} 1
    </label>
</div>

<!-- Vl Test Result Field -->
<div class="form-group col-sm-6">
    {!! Form::label('vl_test_result', 'Vl Test Result:') !!}
    {!! Form::number('vl_test_result', null, ['class' => 'form-control']) !!}
</div>

<!-- Vl Test Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('vl_test_date', 'Vl Test Date:') !!}
    {!! Form::date('vl_test_date', null, ['class' => 'form-control']) !!}
</div>

<!-- Previous Art History Field -->
<div class="form-group col-sm-6">
    {!! Form::label('previous_art_history', 'Previous Art History:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('previous_art_history', false) !!}
        {!! Form::checkbox('previous_art_history', '1', null) !!} 1
    </label>
</div>

<!-- Previous Art Option Field -->
<div class="form-group col-sm-6">
    {!! Form::label('previous_art_option', 'Previous Art Option:') !!}
    {!! Form::text('previous_art_option', null, ['class' => 'form-control']) !!}
</div>

<!-- Previous Art History Regimen Field -->
<div class="form-group col-sm-6">
    {!! Form::label('previous_art_history_regimen', 'Previous Art History Regimen:') !!}
    {!! Form::text('previous_art_history_regimen', null, ['class' => 'form-control']) !!}
</div>

<!-- Spouse Test Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('spouse_test_date', 'Spouse Test Date:') !!}
    {!! Form::date('spouse_test_date', null, ['class' => 'form-control']) !!}
</div>

<!-- Spouse Test Place Field -->
<div class="form-group col-sm-6">
    {!! Form::label('spouse_test_place', 'Spouse Test Place:') !!}
    {!! Form::text('spouse_test_place', null, ['class' => 'form-control']) !!}
</div>

<!-- Spouse Test Result Field -->
<div class="form-group col-sm-6">
    {!! Form::label('spouse_test_result', 'Spouse Test Result:') !!}
    {!! Form::text('spouse_test_result', null, ['class' => 'form-control']) !!}
</div>

<!-- Spouse Art Refer Field -->
<div class="form-group col-sm-6">
    {!! Form::label('spouse_art_refer', 'Spouse Art Refer:') !!}
    {!! Form::text('spouse_art_refer', null, ['class' => 'form-control']) !!}
</div>

<!-- Pregnancy Outcome Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pregnancy_outcome', 'Pregnancy Outcome:') !!}
    {!! Form::text('pregnancy_outcome', null, ['class' => 'form-control']) !!}
</div>

<!-- Mod Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mod', 'Mod:') !!}
    {!! Form::text('mod', null, ['class' => 'form-control']) !!}
</div>

<!-- Dod Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dod', 'Dod:') !!}
    {!! Form::date('dod', null, ['class' => 'form-control']) !!}
</div>

<!-- Pod Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pod', 'Pod:') !!}
    {!! Form::text('pod', null, ['class' => 'form-control']) !!}
</div>

<!-- Baby Field -->
<div class="form-group col-sm-6">
    {!! Form::label('baby', 'Baby:') !!}
    {!! Form::text('baby', null, ['class' => 'form-control']) !!}
</div>

<!-- Baby Wt Field -->
<div class="form-group col-sm-6">
    {!! Form::label('baby_wt', 'Baby Wt:') !!}
    {!! Form::number('baby_wt', null, ['class' => 'form-control']) !!}
</div>

<!-- Baby Outcome Field -->
<div class="form-group col-sm-6">
    {!! Form::label('baby_outcome', 'Baby Outcome:') !!}
    {!! Form::text('baby_outcome', null, ['class' => 'form-control']) !!}
</div>

<!-- Baby Outcome Dead Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('baby_outcome_dead_date', 'Baby Outcome Dead Date:') !!}
    {!! Form::date('baby_outcome_dead_date', null, ['class' => 'form-control']) !!}
</div>

<!-- Pep Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pep', 'Pep:') !!}
    {!! Form::text('pep', null, ['class' => 'form-control']) !!}
</div>

<!-- Pep Option Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pep_option', 'Pep Option:') !!}
    {!! Form::text('pep_option', null, ['class' => 'form-control']) !!}
</div>

<!-- Pep Not Reason Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pep_not_reason', 'Pep Not Reason:') !!}
    {!! Form::text('pep_not_reason', null, ['class' => 'form-control']) !!}
</div>

<!-- Cpt Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cpt', 'Cpt:') !!}
    {!! Form::text('cpt', null, ['class' => 'form-control']) !!}
</div>

<!-- Cpt Not Reason Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cpt_not_reason', 'Cpt Not Reason:') !!}
    {!! Form::text('cpt_not_reason', null, ['class' => 'form-control']) !!}
</div>

<!-- Dna Pcr Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dna_pcr', 'Dna Pcr:') !!}
    {!! Form::text('dna_pcr', null, ['class' => 'form-control']) !!}
</div>

<!-- Dna Pcr Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dna_pcr_date', 'Dna Pcr Date:') !!}
    {!! Form::date('dna_pcr_date', null, ['class' => 'form-control']) !!}
</div>

<!-- Dna Pcr Result Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dna_pcr_result', 'Dna Pcr Result:') !!}
    {!! Form::text('dna_pcr_result', null, ['class' => 'form-control']) !!}
</div>

<!-- Baby Arv Field -->
<div class="form-group col-sm-6">
    {!! Form::label('baby_arv', 'Baby Arv:') !!}
    {!! Form::text('baby_arv', null, ['class' => 'form-control']) !!}
</div>

<!-- Baby Arv No Reason Field -->
<div class="form-group col-sm-6">
    {!! Form::label('baby_arv_no_reason', 'Baby Arv No Reason:') !!}
    {!! Form::text('baby_arv_no_reason', null, ['class' => 'form-control']) !!}
</div>

<!-- Baby Txt Start Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('baby_txt_start_date', 'Baby Txt Start Date:') !!}
    {!! Form::date('baby_txt_start_date', null, ['class' => 'form-control']) !!}
</div>

<!-- Txt Unit Field -->
<div class="form-group col-sm-6">
    {!! Form::label('txt_unit', 'Txt Unit:') !!}
    {!! Form::text('txt_unit', null, ['class' => 'form-control']) !!}
</div>

<!-- Txt Regimen Field -->
<div class="form-group col-sm-6">
    {!! Form::label('txt_regimen', 'Txt Regimen:') !!}
    {!! Form::text('txt_regimen', null, ['class' => 'form-control']) !!}
</div>

<!-- Baby Art Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('baby_art_code', 'Baby Art Code:') !!}
    {!! Form::text('baby_art_code', null, ['class' => 'form-control']) !!}
</div>

<!-- Feeding Option Field -->
<div class="form-group col-sm-6">
    {!! Form::label('feeding_option', 'Feeding Option:') !!}
    {!! Form::text('feeding_option', null, ['class' => 'form-control']) !!}
</div>

<!-- Bf Stop Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bf_stop_date', 'Bf Stop Date:') !!}
    {!! Form::date('bf_stop_date', null, ['class' => 'form-control']) !!}
</div>

<!-- Immunization Bcg 0 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('immunization_bcg_0', 'Immunization Bcg 0:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('immunization_bcg_0', false) !!}
        {!! Form::checkbox('immunization_bcg_0', '1', null) !!} 1
    </label>
</div>

<!-- Immunization Bcg 2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('immunization_bcg_2', 'Immunization Bcg 2:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('immunization_bcg_2', false) !!}
        {!! Form::checkbox('immunization_bcg_2', '1', null) !!} 1
    </label>
</div>

<!-- Immunization Hpt 0 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('immunization_hpt_0', 'Immunization Hpt 0:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('immunization_hpt_0', false) !!}
        {!! Form::checkbox('immunization_hpt_0', '1', null) !!} 1
    </label>
</div>

<!-- Immunization Penta 2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('immunization_penta_2', 'Immunization Penta 2:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('immunization_penta_2', false) !!}
        {!! Form::checkbox('immunization_penta_2', '1', null) !!} 1
    </label>
</div>

<!-- Immunization Penta 6 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('immunization_penta_6', 'Immunization Penta 6:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('immunization_penta_6', false) !!}
        {!! Form::checkbox('immunization_penta_6', '1', null) !!} 1
    </label>
</div>

<!-- Immunization Pcv Field -->
<div class="form-group col-sm-6">
    {!! Form::label('immunization_pcv', 'Immunization Pcv:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('immunization_pcv', false) !!}
        {!! Form::checkbox('immunization_pcv', '1', null) !!} 1
    </label>
</div>

<!-- Immunization Ipv Field -->
<div class="form-group col-sm-6">
    {!! Form::label('immunization_ipv', 'Immunization Ipv:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('immunization_ipv', false) !!}
        {!! Form::checkbox('immunization_ipv', '1', null) !!} 1
    </label>
</div>

<!-- Immunization Ipv6 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('immunization_ipv6', 'Immunization Ipv6:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('immunization_ipv6', false) !!}
        {!! Form::checkbox('immunization_ipv6', '1', null) !!} 1
    </label>
</div>

<!-- Baby Outcome1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('baby_outcome1', 'Baby Outcome1:') !!}
    {!! Form::text('baby_outcome1', null, ['class' => 'form-control']) !!}
</div>

<!-- Dna Pcr1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dna_pcr1', 'Dna Pcr1:') !!}
    {!! Form::text('dna_pcr1', null, ['class' => 'form-control']) !!}
</div>

<!-- Dna Pcr Date1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dna_pcr_date1', 'Dna Pcr Date1:') !!}
    {!! Form::date('dna_pcr_date1', null, ['class' => 'form-control']) !!}
</div>

<!-- Dna Pcr Result1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dna_pcr_result1', 'Dna Pcr Result1:') !!}
    {!! Form::text('dna_pcr_result1', null, ['class' => 'form-control']) !!}
</div>

<!-- Baby Arv1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('baby_arv1', 'Baby Arv1:') !!}
    {!! Form::text('baby_arv1', null, ['class' => 'form-control']) !!}
</div>

<!-- Hiv Ab Test Field -->
<div class="form-group col-sm-6">
    {!! Form::label('hiv_ab_test', 'Hiv Ab Test:') !!}
    {!! Form::text('hiv_ab_test', null, ['class' => 'form-control']) !!}
</div>

<!-- Hiv Ab Test Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('hiv_ab_test_date', 'Hiv Ab Test Date:') !!}
    {!! Form::date('hiv_ab_test_date', null, ['class' => 'form-control']) !!}
</div>

<!-- Hiv Ab Test Not Reason Field -->
<div class="form-group col-sm-6">
    {!! Form::label('hiv_ab_test_not_reason', 'Hiv Ab Test Not Reason:') !!}
    {!! Form::text('hiv_ab_test_not_reason', null, ['class' => 'form-control']) !!}
</div>

<!-- Dna Pcr Date2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dna_pcr_date2', 'Dna Pcr Date2:') !!}
    {!! Form::date('dna_pcr_date2', null, ['class' => 'form-control']) !!}
</div>

<!-- Feeding Option2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('feeding_option2', 'Feeding Option2:') !!}
    {!! Form::text('feeding_option2', null, ['class' => 'form-control']) !!}
</div>

<!-- Immunization Mr Field -->
<div class="form-group col-sm-6">
    {!! Form::label('immunization_mr', 'Immunization Mr:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('immunization_mr', false) !!}
        {!! Form::checkbox('immunization_mr', '1', null) !!} 1
    </label>
</div>

<!-- Immunization Je Field -->
<div class="form-group col-sm-6">
    {!! Form::label('immunization_je', 'Immunization Je:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('immunization_je', false) !!}
        {!! Form::checkbox('immunization_je', '1', null) !!} 1
    </label>
</div>

<!-- Hiv Ab Test1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('hiv_ab_test1', 'Hiv Ab Test1:') !!}
    {!! Form::text('hiv_ab_test1', null, ['class' => 'form-control']) !!}
</div>

<!-- Hiv Ab Test Date1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('hiv_ab_test_date1', 'Hiv Ab Test Date1:') !!}
    {!! Form::date('hiv_ab_test_date1', null, ['class' => 'form-control']) !!}
</div>

<!-- Hiv Ab Test Not Reason1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('hiv_ab_test_not_reason1', 'Hiv Ab Test Not Reason1:') !!}
    {!! Form::text('hiv_ab_test_not_reason1', null, ['class' => 'form-control']) !!}
</div>

<!-- Dna Pcr Result3 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dna_pcr_result3', 'Dna Pcr Result3:') !!}
    {!! Form::text('dna_pcr_result3', null, ['class' => 'form-control']) !!}
</div>

<!-- Immunization Penta 4 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('immunization_penta_4', 'Immunization Penta 4:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('immunization_penta_4', false) !!}
        {!! Form::checkbox('immunization_penta_4', '1', null) !!} 1
    </label>
</div>

<!-- Immunization Pcv 4 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('immunization_pcv_4', 'Immunization Pcv 4:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('immunization_pcv_4', false) !!}
        {!! Form::checkbox('immunization_pcv_4', '1', null) !!} 1
    </label>
</div>

<!-- Immunization Ipv 4 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('immunization_ipv_4', 'Immunization Ipv 4:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('immunization_ipv_4', false) !!}
        {!! Form::checkbox('immunization_ipv_4', '1', null) !!} 1
    </label>
</div>

<!-- Feeding Option1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('feeding_option1', 'Feeding Option1:') !!}
    {!! Form::text('feeding_option1', null, ['class' => 'form-control']) !!}
</div>

<!-- Baby Outcome2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('baby_outcome2', 'Baby Outcome2:') !!}
    {!! Form::text('baby_outcome2', null, ['class' => 'form-control']) !!}
</div>

<!-- Hiv Ab Test Result Field -->
<div class="form-group col-sm-6">
    {!! Form::label('hiv_ab_test_result', 'Hiv Ab Test Result:') !!}
    {!! Form::text('hiv_ab_test_result', null, ['class' => 'form-control']) !!}
</div>

<!-- Dna Pcr2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dna_pcr2', 'Dna Pcr2:') !!}
    {!! Form::text('dna_pcr2', null, ['class' => 'form-control']) !!}
</div>

<!-- Baby Arv2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('baby_arv2', 'Baby Arv2:') !!}
    {!! Form::text('baby_arv2', null, ['class' => 'form-control']) !!}
</div>

<!-- Immunization Mr1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('immunization_mr1', 'Immunization Mr1:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('immunization_mr1', false) !!}
        {!! Form::checkbox('immunization_mr1', '1', null) !!} 1
    </label>
</div>

<!-- Dna Pcr Date3 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dna_pcr_date3', 'Dna Pcr Date3:') !!}
    {!! Form::date('dna_pcr_date3', null, ['class' => 'form-control']) !!}
</div>

<!-- Immunization Pcv 6 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('immunization_pcv_6', 'Immunization Pcv 6:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('immunization_pcv_6', false) !!}
        {!! Form::checkbox('immunization_pcv_6', '1', null) !!} 1
    </label>
</div>

<!-- Dna Pcr Result2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dna_pcr_result2', 'Dna Pcr Result2:') !!}
    {!! Form::text('dna_pcr_result2', null, ['class' => 'form-control']) !!}
</div>

<!-- Baby Outcome3 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('baby_outcome3', 'Baby Outcome3:') !!}
    {!! Form::text('baby_outcome3', null, ['class' => 'form-control']) !!}
</div>

<!-- Dna Pcr3 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dna_pcr3', 'Dna Pcr3:') !!}
    {!! Form::text('dna_pcr3', null, ['class' => 'form-control']) !!}
</div>

<!-- Baby Arv3 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('baby_arv3', 'Baby Arv3:') !!}
    {!! Form::text('baby_arv3', null, ['class' => 'form-control']) !!}
</div>

<!-- Feeding Option3 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('feeding_option3', 'Feeding Option3:') !!}
    {!! Form::text('feeding_option3', null, ['class' => 'form-control']) !!}
</div>

<!-- Hiv Ab Test Result1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('hiv_ab_test_result1', 'Hiv Ab Test Result1:') !!}
    {!! Form::text('hiv_ab_test_result1', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('patients.index') !!}" class="btn btn-default">Cancel</a>
</div>
