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
            <div class="col-xs-4">
               
                <div class="panel panel-danger">
                    <div class="panel-body bg-danger">
                       <div class="text-lg display-1 text-danger text-center"> 50 <p></p> HIV(+)ve <span class="text-sm text-muted">   Mothers </span></div> 
                    </div>

                </div>
            </div>
            <div class="col-xs-4">
                <div class="panel panel-success">
                    <div class="panel-body bg-success">
                       <div class="text-lg display-1 text-success text-center"> 45 <p></p> ART   <span class="text-sm text-muted">  intervention</span></div> 
                    </div>
                </div>
            </div>
            <div class="col-xs-4">
                <div class="panel panel-info">
                    <div class="panel-body bg-info">
                       <div class="text-lg display-1 text-info text-center"> 40 <p></p> Children <span class="text-sm text-muted"> result HIV(-)ve </span></div> 
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
                  Chart2
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