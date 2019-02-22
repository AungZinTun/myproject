@extends('layouts.app')


@section('content')

<div class="panel">
    <!-- <div class="panel-heading table-responsive">
        <div class="row">
            <div class="col-xs-12">
                <canvas id="myBarChart"></canvas>
            </div>
        </div>
    </div> -->
    <div class="panel-body table-responsive">
        <div class="row">
            <div class="col-xs-12">
            <canvas style="display: block;" id="{!! $chart->id !!}"></canvas>  @include('charts::loader')  
            </div>
        </div>
    </div>
</div>

  

@endsection

@section('javascript')
    @parent
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>

   {!! $chart->script() !!}

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