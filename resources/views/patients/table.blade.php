<table class="table table-sm" id="patients-table">
    <thead>
        <tr>
        <th>Date Enrolled</th>
        <th> Pmct Code</th>
        <th>Name</th>
        <th>Dob</th>
        <th>Address</th>
        <th>Edd</th>
        <th>Hiv Status</th>
        <th>Hiv Test Date</th>
        <th>Hiv Test Place</th>
        <th>Current Art Option</th>
        <th>Current Art Status</th>
        
            <!-- <th colspan="3">Action</th> -->
        </tr>
    </thead>
    <tbody>
    @foreach($patients as $patient)
        <tr>
            <td>{!! $patient->date_enrolled !!}</td>
            <td>  <a href="{!! route('patients.edit', [$patient->id]) !!}" >{!! $patient->pmct_code !!} </a>
</td>
            <td>{!! $patient->name !!}</td>
            <td>{!! $patient->dob !!}</td>
            <td>{!! $patient->address !!}</td>
            <td>{!! $patient->edd !!}</td>
            <td>{!! $patient->hiv_status !!}</td>
            <td>{!! $patient->hiv_test_date !!}</td>
            <td>{!! $patient->hiv_test_place !!}</td>
            <td>{!! $patient->current_art_option !!}</td>
            <td>{!! $patient->current_art_status !!}</td>
           
            <!-- <td>
                {!! Form::open(['route' => ['patients.destroy', $patient->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('patients.show', [$patient->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td> -->
        </tr>
    @endforeach
    </tbody>
</table>