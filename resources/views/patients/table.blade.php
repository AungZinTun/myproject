<table class="table table-borderless" id="patients-table">
    <thead>
        <tr class="bg-success">
            <th>Date</th>
            <th>PMCT ID</th>
            <th>Name</th>
            <th>DOB</th>
            <!-- <th>Address</th> -->
            <th>Edd</th>
            <!-- <th>Hiv Status</th> -->
            <!-- <th>Hiv Test Date</th>
            <th>Hiv Test Place</th> -->
            <!-- <th>Art</th> -->
            <th>ART</th>
            <th>EID 1</th>
            <th>EID 2</th>
            <th>EID 3</th>
            <!-- <th colspan="3">Action</th> -->
        </tr>
    </thead>
    <tbody>
    @foreach($patients as $patient)
        <tr>
            <td>{!! $patient->date_enrolled !!}</td>
            <td>  <a href="{!! route('patients.edit', [$patient->id]) !!}" >{!! $patient->pmct_code !!} </a></td>
            <td>{!! $patient->name !!}</td>
            <td>{!! $patient->dob !!}</td>
            <!-- <td>{!! $patient->address !!}</td> -->
            <td>{!! $patient->edd !!}</td>
            <!-- <td>{!! $patient->hiv_status !!}</td> -->
            <!-- <td>{!! $patient->hiv_test_date !!}</td> -->
            <!-- <td>{!! $patient->hiv_test_place !!}</td> -->
            <!-- <td>{!! $patient->current_art_option !!}</td> -->
            <td>{!! $patient->current_art_status !!}</td>
            <td class='text-xs'>   <a href="/patients/{{$patient->id}}/page6">
            @if ($patient->dna_pcr_result=="1") <span class="label btn-danger text-danger label-many"> D </span> 
                  @elseif ($patient->dna_pcr_result=="0") <span class="label btn-success text-danger label-many">ND</span>
                  @else - @endif
            </a>
            </td>
            <td class='text-xs'>   <a href="/patients/{{$patient->id}}/page6">
            @if ($patient->dna_pcr_result_1=="1") <span class="label btn-danger text-danger label-many"> D </span> 
                  @elseif ($patient->dna_pcr_result_2=="0") <span class="label btn-success text-danger label-many">ND</span>
                  @else - @endif
            </a>
            </td>
            <td class='text-xs'>  <a href="/patients/{{$patient->id}}/page7">
            @if ($patient->dna_pcr_result_1=="1") <span class="label btn-danger text-danger label-many"> D </span> 
                  @elseif ($patient->dna_pcr_result_2=="0") <span class="label btn-success text-danger label-many">ND</span>
                  @else - @endif
            </a> 
            </td>
           
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