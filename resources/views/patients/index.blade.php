@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">PMCT Positive  ({{ Auth()->user()->township->title }})   Total : {{$total}} </h1>
        <h1 class="pull-right">
           <a class="btn btn-link pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('patients.create') !!}">  <i class="fa fa-user-plus  text-primary"></i> Register New</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('patients.table')
                  
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection

