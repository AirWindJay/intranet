<table class="table table-fixed">
    <thead class="thead-dark">
        <tr align="center" id="thead">
            <td style="width: 40%"><strong>Problem</strong></td>
            <td style="width: 13%"><strong>Inserted By</strong></td>
            <td style="width: 18%"><strong>Location</strong></td>
            <td style="width: 7%"><strong>Time</strong></td>
            <td style="width: 9%"><strong>Status</strong></td>
            <td style="width: 13%"><strong>Officer</strong></td>
        </tr>
    </thead>
    @foreach($services0 as $service)
        @if($service->status == 0)
            <tr>
                <td>
                    {{$service->category}}
                    <hr style="border: 1px dotted #232929; width: 90%">
                    {{$service->remarks}}
                </td>

                <td style="width: 13%" align="center">
                    @foreach($users as $user)
                        @if($user->employeeid == $service->employeeid)
                            {{$user->lastname}}, {{$user->firstname}} {{$user->middlename}}
                        @endif
                    @endforeach
                </td>

                <td align="center">
                    {{$service->location}}
                </td>

                <td style="width:5%" align="center">
                    {{date('F d Y H:i:s', strtotime($service->created_at))}}
                </td>
                
                <td style="background-color:BLACK; COLOR: #E96848; width: 10%;" align="center"><h3><blink>PENDING</blink></h3></td>
                    

                <td style="width: 13%" align="center">
                    @if(is_null($service->officerid))
                    @else
                        @foreach($users as $user)
                            @if($service->officerid == $user->employeeid)
                                {{$user->lastname}}, {{$user->firstname}} {{$user->middlename}}
                            @endif
                        @endforeach
                    @endif
                </td>
            </tr>
        @endif
    @endforeach
    @foreach($services1 as $service)
        @if($service->status == 1)
            <tr>
                <td>
                    {{$service->category}}
                    <hr style="border: 1px dotted #232929; width: 90%">
                    {{$service->remarks}}
                </td>

                <td style="width: 13%" align="center">
                    @foreach($users as $user)
                        @if($user->employeeid == $service->employeeid)
                            {{$user->lastname}}, {{$user->firstname}} {{$user->middlename}}
                        @endif
                    @endforeach
                </td>

                <td align="center">
                    {{$service->location}}
                </td>

                <td style="width:5%" align="center">
                    {{date('F d Y H:i:s', strtotime($service->created_at))}}
                </td>

                <td style="background-color:BLACK; COLOR: #308BCE; width: 10%;" align="center"><b>PROCESSING</b></td>
                    
                <td style="width: 13%" align="center">
                    @if(is_null($service->officerid))
                    @else
                        @foreach($users as $user)
                            @if($service->officerid == $user->employeeid)
                                {{$user->lastname}}, {{$user->firstname}} {{$user->middlename}}
                            @endif
                        @endforeach
                    @endif
                </td>
            </tr>
        @endif
    @endforeach
</table>