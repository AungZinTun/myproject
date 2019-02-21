@extends('layouts.app')

@section('content')
  
  <div class="row">
    <div class="col-xs-8">
    <span class="display3">PMCT Positive  ({{ Auth()->user()->township->title }})   Total : <span class="text-danger">{{$total}}</span> </span>
    </div>
    <div class="col-xs-4">
           <a class="btn btn-defalut btn-lg pull-right" style="margin-top: -10px;margin-bottom: 5px " href="{!! route('patients.create') !!}"> 
            <i class="fa fa-user-plus"></i></a>
    </div>
  </div>
     
       
   
        <div class="clearfix"></div>
        @include('flash::message')
            <div class="panel">
                <div class="panel-body table-responsive">
                
                    @include('patients.table')
               
                </div>
                <div class="row text-center bg-success">
        <div class="col-xs-12 text-primary">
        <span class="label">   {{ $patients->links() }}</span>
        </div>
</div>
            </div>
        
            
    
        
     
@endsection

