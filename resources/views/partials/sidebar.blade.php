@inject('request', 'Illuminate\Http\Request')
<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar text-primary mb-0" style=" 
       color: black;
       background-color:  #dae5ee;
       ">
    <!-- sidebar: style can be found in sidebar.less -->
    <div class="sidebar text-md">
        <ul class="sidebar-menu bg-light">

        <li class="treeview text-success">
                <a href="#">
                    <i class="fa fa-user-circle text-primary"></i>
                    <span>Account </span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                              
                         <li class="#">
                            <a href="#">
                                <i class="fa fa-circle text-green"></i>
                                <span class="title">{{ Auth()->user()->name}}</span>
                            </a>
                        </li>   
                                   
                        <li class="{{ $request->segment(1) == 'change_password' ? 'active' : '' }}">
                            <a href="{{ route('auth.change_password') }}">
                                <i class="fa fa-key"></i>
                                <span class="title">@lang('quickadmin.qa_change_password')</span>
                            </a>
                        </li>

                        <li>
                            <a href="#logout" onclick="$('#logout').submit();">
                                <i class="fa fa-arrow-left"></i>
                                <span class="title">@lang('quickadmin.qa_logout')</span>
                            </a>
                        </li>
                    
                </ul>
        </li>



            <li class="{{ $request->segment(1) == 'home' ? 'active' : '' }}">
                <a href="{{ url('/dashboard') }}">
                    <i class="fa fa-dashboard  text-primary"></i>
                    <span class="title">@lang('quickadmin.qa_dashboard')</span>
                </a>
            </li>


             <li class="treeview">
               <a href="{{ route('report') }}     ">
               <i class="fa fa-file text-primary"></i>
                <span>Report</span> </a>
                
            </li>     

            <li>
            <style > .badge {
        padding: 1px 9px 2px;
        font-size: 12.025px;
        font-weight: bold;
        white-space: nowrap;
        color: #ffffff;
        background-color: #999999;
        -webkit-border-radius: 9px;
        -moz-border-radius: 9px;
        border-radius: 9px;
        }
        .badge:hover {
        color: #ffffff;
        text-decoration: none;
        cursor: pointer;
        }
        .badge-error {
        background-color: #b94a48;
        }
        .badge-error:hover {
        background-color: #953b39;
        }
        .badge-warning {
        background-color: #f89406;
        }
        .badge-warning:hover {
        background-color: #c67605;
        }
        .badge-success {
        background-color: #468847;
        }
        .badge-success:hover {
        background-color: #356635;
        }
        .badge-info {
        background-color: #3a87ad;
        }
        .badge-info:hover {
        background-color: #2d6987;
        }
        .badge-inverse {
        background-color: #333333;
        }
        .badge-inverse:hover {
        background-color: #1a1a1a;
}</style>

            @if( Auth()->User()->role_id== 1)
                <a href="{{url('admin/calendar')}}">
            @else 
            <a href="{{url('/calendar')}}">
            @endif
                  <i class="fa fa-calendar  text-primary"></i>
                  <span class="title">
                  
                    Calendar  <span class="badge badge-error">{{$notification}}</span>
                  </span>
                </a>
            </li>
        
            @can('user_management_access')
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users text-primary"></i>
                    <span>@lang('quickadmin.user-management.title')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    @can('role_access')
                    <li>
                        <a href="{{ route('admin.roles.index') }}">
                            <i class="fa fa-briefcase  text-primary"></i>
                            <span>@lang('quickadmin.roles.title')</span>
                        </a>
                    </li>@endcan
                    
                    @can('user_access')
                    <li>
                        <a href="{{ route('admin.users.index') }}">
                            <i class="fa fa-user  text-primary"></i>
                            <span>@lang('quickadmin.users.title')</span>
                        </a>
                    </li>@endcan
                    
                    @can('township_access')
                    <li>
                        <a href="{{ route('admin.townships.index') }}">
                            <i class="fa fa-map-marker  text-primary"></i>
                            <span>@lang('quickadmin.township.title')</span>
                        </a>
                    </li>@endcan
                    
                    @can('user_action_access')
                    <li>
                        <a href="{{ route('admin.user_actions.index') }}">
                            <i class="fa fa-th-list text-primary"></i>
                            <span>@lang('quickadmin.user-actions.title')</span>
                        </a>
                    </li>@endcan
                    
                </ul>
            </li>@endcan
            
            @can('patient_access')
            <li class="treeview">
            @if( Auth()->User()->role_id== 1)<a href="{{ route('admin.patients.index') }}" >
            @else <a href="{{ route('patients.index') }}" > @endif
                    <i class="fa fa-list text-primary"></i>
                    <span>@lang('quickadmin.patient.title')</span>
                    <span class="pull-right-container">
                        <!-- <i class="fa fa-angle-left pull-right"></i> -->
                    </span>
                </a>
                
            </li>@endcan       



           
        </ul>
    </section>
</aside>

