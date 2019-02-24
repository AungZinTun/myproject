<table class="table" id="patients-table">
    <thead>
        <tr class="bg-success text-centered">
            <th colspan=8 class="bg-success text-center"> Mother</th>
            <th colspan=4 class="bg-success text-center">Baby Outcome&Intervention</th>
            <th colspan=4 class="bg-success text-center">Early Infant Diagnosis</th>
            <th colspan=4 class="bg-success text-center"> Infant Feeding Option </th>
            <th colspan=2 class="bg-success text-center" >HIV Anitbody Test</th>
        </tr>
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
            <th>Spouse's HIV Status</th>
            <th>Pregnancy Outcome</th>

            <th> Baby Outcome </th>
            <th>PEP</th>
            <th>CPT</th>
            <th> ARV</th>

            <th> Mth 0</th>
            <th> Mth 3</th>
            <th> Mth 9 </th>
            <th> Mth 24</th>
            <!-- <th colspan="3">Action</th> -->
            <th> Mth 0</th>
            <th> Mth 3</th>
            <th> Mth 9 </th>
            <th> Mth 24</th>

            <th> Mth 9 </th>
            <th> Mth 24</th>
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
            <td > <a href=" @if ( $patient->hiv_status==1)/patients/{{$patient->id}}/page2 
                            @else /patients/{{$patient->id}}/page3 @endif ">
                    @if ( $patient->current_art_status==1) <span class="label btn-success btn-sm text-success">On ART </span>
                        @elseif ( $patient->current_art_status==NULL) <span class="label">--</span>
                        @else <span class="label btn-danger btn-sm text-danger">No ART</span> @endif
                </a>
            </td>
             <td class="text-center"> @if ( $patient->spouse_test_result==1) <span class="text-danger">P</span>
                  @elseif ( $patient->spouse_test_result==0) <span class="text-success">N</span>
                  @else <span class="text-muted">U</span> @endif
            </td>
            
            <td class="text-center"> @if($patient->pregnancy_outcome==1) LV
                @elseif ($patient->pregnancy_outcome==2) Ab
                @elseif ($patient->pregnancy_outcome==3) SB
                @elseif ($patient->pregnancy_outcome==4) MD
                @else -
                @endif
             </td>
             <!-- baby_outcome -->
             <td> @if($patient->baby_outcome==1)Alive 
                @elseif($patient->baby_outcome==1)Dead
                @else - @endif
             </td>
             <td>
             @if ($patient->pep==1) <input type="checkbox" checked disabled > </input> 
             @else <input type="checkbox" disabled> </input> 
             @endif
            
             </td>
             <td> 
             @if ($patient->cpt==1) <input type="checkbox" checked disabled > </input> 
             @else <input type="checkbox" disabled> </input> 
             @endif
            
             </td>
             <td> 
             @if ($patient->baby_arv==1) <input type="checkbox" checked disabled > </input> 
             @else <input type="checkbox" disabled> </input> 
             @endif
            
             </td>
             <!-- dnapcr -->
            <td class='text-xs'>   <a href="/patients/{{$patient->id}}/page5">
            @if ($patient->dna_pcr_result=="1") <span class="label btn-danger text-danger label-many"> D </span> 
                  @elseif ($patient->dna_pcr_result=="0") <span class="label btn-success text-danger label-many">N</span>
                  @else - @endif
            </a>
            </td>
            <td class='text-xs'>   <a href="/patients/{{$patient->id}}/page6">
            @if ($patient->dna_pcr_result1=="1") <span class="label btn-danger text-danger label-many"> D </span> 
                  @elseif ($patient->dna_pcr_result1=="0") <span class="label btn-success text-danger label-many">N</span>
                  @else - @endif
            </a>
            </td>
            <td class='text-xs'>  <a href="/patients/{{$patient->id}}/page7">
            @if ($patient->dna_pcr_result2=="1") <span class="label btn-danger text-danger label-many"> D </span> 
                  @elseif ($patient->dna_pcr_result2=="0") <span class="label btn-success text-danger label-many">N</span>
                  @else - @endif
            </a> 
            </td>
            <td class='text-xs'>  <a href="/patients/{{$patient->id}}/page7">
            @if ($patient->dna_pcr_result3=="1") <span class="label btn-danger text-danger label-many"> D </span> 
                  @elseif ($patient->dna_pcr_result3=="0") <span class="label btn-success text-danger label-many">N</span>
                  @else - @endif
            </a> 
            </td>
              <!-- dnapcr -->
            <td class="text-xs"> 
                @if ($patient->feeding_option==1) EBF
                @elseif ($patient->feeding_option==2) MXF
                @elseif ($patient->feeding_option==3) BTF 
                @else - @endif
            </td>
            <td class="text-xs"> 
                @if ($patient->feeding_option1==1) EBF
                @elseif ($patient->feeding_option1==2) MXF
                @elseif ($patient->feeding_option1==3) BTF 
                @else - @endif
            </td>

            <td class="text-xs"> 
                @if ($patient->feeding_option2==1) EBF
                @elseif ($patient->feeding_option2==2) MXF
                @elseif ($patient->feeding_option2==3) BTF 
                @else - @endif
            </td>

            <td class="text-xs"> 
                @if ($patient->feeding_option3==1) EBF
                @elseif ($patient->feeding_option3==2) MXF
                @elseif ($patient->feeding_option3==3) BTF 
                @else - @endif
            </td>
            <td>
                @if($patient->hiv_ab_test_result==NULL) -
                @elseif ($patient->hiv_ab_test_result==1) <span class="label btn-danger text-danger label-many"> R </span> 
                @else <span class="label btn-success text-danger label-many"> N </span>  @endif
            </td>
            <td>
                @if($patient->hiv_ab_test_result1==NULL) -
                @elseif ($patient->hiv_ab_test_result1==1) <span class="label btn-danger text-danger label-many"> R </span> 
                @else <span class="label btn-success text-danger label-many"> N </span>  @endif
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
