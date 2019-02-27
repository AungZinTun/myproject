@extends('layouts.app')


@section('content')

<div class="panel">
    <div class="panel-heading">
        <div class="row bg-info ">
            <p class="text-sm text-center"> National AIDS Programme</p>
            <div class="col-xs-12">
              <h2 class="panel-title text-center">PMCT Cohort Report  </h2>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-xs-8">
                <span> Reporting Unit : </span> <p></p>
                <span class="text-muted">
                {{Auth()->user()->township->title}} Township
                </span>
            </div>      
            <div class="col-xs-4">
                <span> Reporting Period</span>
                    <form action="" method="GET">
                    
                            {!! Form::text('start', $start, ['class' => 'form-control date', 'placeholder' => '']) !!}
                            <p></p>
                            {!! Form::text('end', $end, ['class' => 'form-control date', 'placeholder' => '']) !!}
                            <p></p>
                    <button type='submit' class='btn btn-xs btn-primary'><i class="fa fa-filter"></i></button>  
                    
                    </form>
            </div>
        </div>
    </div>
    <div class="panel-body table-responsive">
        <div class="row text-xs">
            <div class="col-xs-12">
                <div class="panel panel-info" id="app">
                    <div class="panel-heading">
                    1. ANC
                    </div>
                    <div class="panel-body ">
                            <table class="table text-sm mb-0">
                                <tbody>
                                    <tr>
                                        <td>
                                            1.1 ANC Target
                                        </td>
                                        <td style="width: 100px;" >
                                       100
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            1.2 ANC Attandence 
                                        </td>
                                        <td>
                                        90
                                        </td>
                                    </tr>
                                    <tr class="text-bold">
                                        <td>
                                            1.3 ANC Coverage
                                        </td>
                                        <td>
                                      90%
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                    </div>
                    <!-- <div class="panel-footer text-sm ">
                        <small> WHO ANC Coverage Target=95% </small>
                    </div> -->
                </div>



                 <div class="panel panel-info" id="app">
                    <div class="panel-heading">
                    2. ART Status
                    </div>
                    <div class="panel-body">
                            <table class="table text-sm">
                                <tbody>
                                    <tr>
                                        <td>
                                        2.1	All Pregnant women living with HIV
                                        </td>
                                        <td>
                                       10
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        2.2	On ART
                                        </td>
                                        <td>
                                      9
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        2.3 Not On ART
                                        </td>
                                        <td>
                                        1
                                        </td>
                                    </tr>
                                    <tr class="text-bold">
                                        <td>
                                        2.4	ART Coverage 
                                        </td>
                                        <td  style="width: 100px;">
                                        90 %
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                    </div>
                </div>

                <div class="panel panel-info" id="app">
                    <div class="panel-heading">
                   3. Pregnancy Outcome
                    </div>
                    <div class="panel-body">
                            <table class="table text-sm">
                                <tbody>
                                    <tr>
                                        <td>
                                        3.1	Live Birth

                                        </td>
                                        <td  style="width: 100px;">
                                       7
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        3.2	Abortion 

                                        </td>
                                        <td>
                                       1
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        3.3	Still Birth

                                        </td>
                                        <td>
                                       1
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        3.4	Mother Death
                                        </td>
                                        <td>
                                        -
                                        </td>
                                    </tr>

                                    <tr class="text-bold">
                                        <td>
                                        3.5	Total 


                                        </td>
                                        <td>
                                       9
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                    </div>
                </div>
                <div class="panel panel-info" id="app">
                    <div class="panel-heading">
                    4. HIV Outcome of Child		
                    </div>
                    <div class="panel-body">
                            <table class="table text-sm">
                                <tbody>
                                    <tr>
                                        <td>
                                        3.1	Reactive 

                                        </td>
                                        <td  style="width: 100px;">
                                       0
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        3.2	Non Reactive 

                                        </td>
                                        <td>
                                       7
                                        </td>
                                    </tr>
                                    <tr class="text-bold">
                                        <td>
                                        3.5	MTCT Rate

                                        </td>
                                        <td>
                                       0 %
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                    </div>
                </div>



            </div>
        </div>
    </div>
   
</div>

  

@endsection

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
  

@endsection