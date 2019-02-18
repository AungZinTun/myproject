@extends('layouts.app')

@section('content')
    <section class="content-header">
        <span class="pull-left">PMCT Positive  ({{ Auth()->user()->township->title }})   Total : {{$total}} </span>
        <h1 class="pull-right">
           <a class="btn btn-link pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('patients.create') !!}">  <i class="fa fa-user-plus  text-primary"></i> Register New</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        
     
                    @include('patients.table')
     
    
        
        </div>
    </div>
@endsection

