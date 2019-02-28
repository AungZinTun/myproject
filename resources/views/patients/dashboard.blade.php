@extends('layouts.app')


@section('content')

<div class="panel">
    <div class="panel-heading">
        <div class="row bg-default">
            <div class="col-xs-12">
              <h2 class="panel-title">PMCT Situation in {{Auth()->user()->township->title}} Township</h2>
            </div>
        </div>
        <hr>
      
        <div class="row">
           
            <div class="col-xs-12">
                <div class="panel">
                    <div class="panel-body">
                        <div class="row mr-0">
                            <div class="col-md-4 col-xs-12">
                                <div class="info-box bg-danger">
                                     <span class="info-box-icon bg-red"><i class="fa fa-user"></i></span>
                                    <div class="info-box-content">
                                        <div class="info-box-number"> 50  </div> 
                                        <span class="info-box-text">   HIV(+)ve Mothers </span>
                                        </div>

                                 </div>
                            </div>
                            <div class="col-md-4  col-xs-12">
                                <div class="info-box info-box-danger">
                                <span class="info-box-icon bg-aqua"><i class="fa fa-medkit"></i></span>
                                    <div class="info-box-content">
                                        <div class="info-box-number"> 45  </div> 
                                        <span class="info-box-text">  ART Intervention </span>
                                        </div>

                                 </div>
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <div class="info-box info-box-danger">
                                <span class="info-box-icon bg-green"><i class="fa fa-heartbeat"></i></span>
                                    <div class="info-box-content">
                                        <div class="info-box-number"> 40  </div> 
                                        <span class="info-box-text">  Children result HIV(-)ve </span>
                                        </div>

                                 </div>
                            </div>
                    </div>
                    <div class="panel-footer">
                        
                        <small class="text-xs text-italic text-info"> Data between (2010-1-1 to 2019-1-1) last updated 2 weeks ago  </small>
                        <a href="{{ route ('report')}} "> <small class="text-right text-sm btn btn-default"> See Detail Report</small></a>
                    </div>
                </div>
            
            
            </div>

        </div>
    </div>
    <div class="panel-body table-responsive">
        <div class="row text-xs">
            <div class="col-xs-12">
                <div class="panel panel-default" id="app">
                <div class="panel-heading">
               Trend of PMCT Positive
                </div>
                  <div class="panel-body">
                  {!! $chart->container() !!} 
                  </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6">
                <div class="panel panel-default" id="app">
                <div class="panel-heading bg-success">
                    ART Status
                </div>
                 <div class="panel-body">
               
                 {!! $pie->container() !!}
                 </div>
                </div>
            </div>
            <div class="col-xs-6">
                <div class="panel panel-default" id="app">
                <div class="panel-heading bg-success">
                  Outcome Chart
                </div>
                 <div class="panel-body">
               
                 {!! $pie->container() !!}
                 </div>
                </div>
            </div>
        </div>
        
    </div>
   
</div>

  

@endsection

@section('javascript')
    @parent
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>

   {!! $chart->script() !!}
   {!! $pie->script() !!}

 <!-- <script>
   var ctx = document.getElementById('myBarChart').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
        labels: ["January", "February", "March", "April", "May", "June", "July"],
        datasets: [{
            label: "My First dataset",
            backgroundColor: 'rgb(255, 99, 132)',
            borderColor: 'rgb(255, 99, 132)',
            data: [0, 10, 5, 2, 20, 30, 45],
        }]
    },
});
</script> -->

@endsection