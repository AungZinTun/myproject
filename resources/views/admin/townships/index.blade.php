@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.township.title')</h3>
    @can('township_create')
    <p>
        <a href="{{ route('admin.townships.create') }}" class="btn btn-success">@lang('quickadmin.qa_add_new')</a>
        
    </p>
    @endcan

    

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped ajaxTable ">
                <thead>
                    <tr>
                        
                        <th>@lang('quickadmin.township.fields.title')</th>
                                                <th>&nbsp;</th>

                    </tr>
                </thead>
            </table>
        </div>
    </div>
@stop

@section('javascript') 
    <script>
                $(document).ready(function () {
            window.dtDefaultOptions.ajax = '{!! route('admin.townships.index') !!}';
            window.dtDefaultOptions.columns = [{data: 'title', name: 'title'},
                
                {data: 'actions', name: 'actions', searchable: false, sortable: false}
            ];
            processAjaxTables();
        });
    </script>
@endsection