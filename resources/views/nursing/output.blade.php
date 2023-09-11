<div class="row">
        @if ($date2 == '01')
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>7:00am - 3:00pm</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($output as $nurse) 
                            @if ($nurse->date1 == '7-3')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
    
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>3:00pm - 11:00pm</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($output as $nurse) 
                            @if ($nurse->date1 == '3-11')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
    
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>11:00pm - 7:00am</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($output as $nurse) 
                            @if ($nurse->date1 == '11-7')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
    
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>OFF</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach ($output as $nurse) 
                            @if ($nurse->date1 == 'OFF')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif


{{-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// --}}
        @if ($date2 == '02')
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>7:00am - 3:00pm</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($output as $nurse) 
                            @if ($nurse->date2 == '7-3')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
    
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>3:00pm - 11:00pm</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($output as $nurse) 
                            @if ($nurse->date2 == '3-11')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
    
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>11:00pm - 7:00am</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($output as $nurse) 
                            @if ($nurse->date2 == '11-7')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
    
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>OFF</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach ($output as $nurse) 
                            @if ($nurse->date2 == 'OFF')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif


{{-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// --}}
        @if ($date2 == '03')
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>7:00am - 3:00pm</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($output as $nurse) 
                            @if ($nurse->date3 == '7-3')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
    
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>3:00pm - 11:00pm</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($output as $nurse) 
                            @if ($nurse->date3 == '3-11')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
    
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>11:00pm - 7:00am</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($output as $nurse) 
                            @if ($nurse->date3 == '11-7')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
    
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>OFF</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach ($output as $nurse) 
                            @if ($nurse->date3 == 'OFF')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif


{{-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// --}}
        @if ($date2 == '04')
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>7:00am - 3:00pm</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($output as $nurse) 
                            @if ($nurse->date4 == '7-3')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
    
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>3:00pm - 11:00pm</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($output as $nurse) 
                            @if ($nurse->date4 == '3-11')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
    
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>11:00pm - 7:00am</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($output as $nurse) 
                            @if ($nurse->date4 == '11-7')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
    
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>OFF</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach ($output as $nurse) 
                            @if ($nurse->date4 == 'OFF')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif


{{-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// --}}
        @if ($date2 == '05')
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>7:00am - 3:00pm</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($output as $nurse) 
                            @if ($nurse->date5 == '7-3')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
    
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>3:00pm - 11:00pm</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($output as $nurse) 
                            @if ($nurse->date5 == '3-11')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
    
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>11:00pm - 7:00am</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($output as $nurse) 
                            @if ($nurse->date5 == '11-7')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
    
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>OFF</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach ($output as $nurse) 
                            @if ($nurse->date5 == 'OFF')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif


{{-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// --}}
        @if ($date2 == '06')
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>7:00am - 3:00pm</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($output as $nurse) 
                            @if ($nurse->date6 == '7-3')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
    
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>3:00pm - 11:00pm</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($output as $nurse) 
                            @if ($nurse->date6 == '3-11')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
    
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>11:00pm - 7:00am</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($output as $nurse) 
                            @if ($nurse->date6 == '11-7')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
    
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>OFF</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach ($output as $nurse) 
                            @if ($nurse->date6 == 'OFF')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif


{{-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// --}}
        @if ($date2 == '07')
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>7:00am - 3:00pm</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($output as $nurse) 
                            @if ($nurse->date7 == '7-3')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
    
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>3:00pm - 11:00pm</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($output as $nurse) 
                            @if ($nurse->date7 == '3-11')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
    
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>11:00pm - 7:00am</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($output as $nurse) 
                            @if ($nurse->date7 == '11-7')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
    
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>OFF</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach ($output as $nurse) 
                            @if ($nurse->date7 == 'OFF')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif



{{-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// --}}
        @if ($date2 == '08')
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>7:00am - 3:00pm</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($output as $nurse) 
                            @if ($nurse->date8 == '7-3')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
    
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>3:00pm - 11:00pm</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($output as $nurse) 
                            @if ($nurse->date8 == '3-11')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
    
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>11:00pm - 7:00am</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($output as $nurse) 
                            @if ($nurse->date8 == '11-7')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
    
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>OFF</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach ($output as $nurse) 
                            @if ($nurse->date8 == 'OFF')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif


{{-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// --}}
        @if ($date2 == '09')
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>7:00am - 3:00pm</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($output as $nurse) 
                            @if ($nurse->date9 == '7-3')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
    
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>3:00pm - 11:00pm</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($output as $nurse) 
                            @if ($nurse->date9 == '3-11')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
    
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>11:00pm - 7:00am</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($output as $nurse) 
                            @if ($nurse->date9 == '11-7')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
    
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>OFF</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach ($output as $nurse) 
                            @if ($nurse->date9 == 'OFF')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif


{{-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// --}}
        @if ($date2 == '10')
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>7:00am - 3:00pm</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($output as $nurse) 
                            @if ($nurse->date10 == '7-3')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
    
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>3:00pm - 11:00pm</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($output as $nurse) 
                            @if ($nurse->date10 == '3-11')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
    
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>11:00pm - 7:00am</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($output as $nurse) 
                            @if ($nurse->date10 == '11-7')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
    
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>OFF</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach ($output as $nurse) 
                            @if ($nurse->date10 == 'OFF')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif


{{-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// --}}
        @if ($date2 == '11')
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>7:00am - 3:00pm</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($output as $nurse) 
                            @if ($nurse->date11 == '7-3')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
    
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>3:00pm - 11:00pm</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($output as $nurse) 
                            @if ($nurse->date11 == '3-11')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
    
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>11:00pm - 7:00am</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($output as $nurse) 
                            @if ($nurse->date11 == '11-7')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
    
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>OFF</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach ($output as $nurse) 
                            @if ($nurse->date11 == 'OFF')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif


{{-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// --}}
        @if ($date2 == '12')
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>7:00am - 3:00pm</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($output as $nurse) 
                            @if ($nurse->date12 == '7-3')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
    
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>3:00pm - 11:00pm</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($output as $nurse) 
                            @if ($nurse->date12 == '3-11')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
    
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>11:00pm - 7:00am</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($output as $nurse) 
                            @if ($nurse->date12 == '11-7')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
    
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>OFF</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach ($output as $nurse) 
                            @if ($nurse->date12 == 'OFF')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif


{{-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// --}}
        @if ($date2 == '13')
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>7:00am - 3:00pm</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($output as $nurse) 
                            @if ($nurse->date13 == '7-3')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
    
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>3:00pm - 11:00pm</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($output as $nurse) 
                            @if ($nurse->date13 == '3-11')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
    
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>11:00pm - 7:00am</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($output as $nurse) 
                            @if ($nurse->date13 == '11-7')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
    
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>OFF</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach ($output as $nurse) 
                            @if ($nurse->date13 == 'OFF')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif


{{-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// --}}
        @if ($date2 == '14')
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>7:00am - 3:00pm</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($output as $nurse) 
                            @if ($nurse->date14 == '7-3')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
    
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>3:00pm - 11:00pm</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($output as $nurse) 
                            @if ($nurse->date14 == '3-11')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
    
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>11:00pm - 7:00am</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($output as $nurse) 
                            @if ($nurse->date14 == '11-7')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
    
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>OFF</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach ($output as $nurse) 
                            @if ($nurse->date14 == 'OFF')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif


{{-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// --}}
        @if ($date2 == '15')
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>7:00am - 3:00pm</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($output as $nurse) 
                            @if ($nurse->date15 == '7-3')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
    
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>3:00pm - 11:00pm</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($output as $nurse) 
                            @if ($nurse->date15 == '3-11')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
    
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>11:00pm - 7:00am</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($output as $nurse) 
                            @if ($nurse->date15 == '11-7')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
    
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>OFF</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach ($output as $nurse) 
                            @if ($nurse->date15 == 'OFF')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif



{{-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// --}}
        @if ($date2 == '16')
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>7:00am - 3:00pm</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($output as $nurse) 
                            @if ($nurse->date16 == '7-3')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
    
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>3:00pm - 11:00pm</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($output as $nurse) 
                            @if ($nurse->date16 == '3-11')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
    
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>11:00pm - 7:00am</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($output as $nurse) 
                            @if ($nurse->date16 == '11-7')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
    
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>OFF</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach ($output as $nurse) 
                            @if ($nurse->date16 == 'OFF')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif


{{-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// --}}
        @if ($date2 == '17')
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>7:00am - 3:00pm</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($output as $nurse) 
                            @if ($nurse->date17 == '7-3')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
    
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>3:00pm - 11:00pm</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($output as $nurse) 
                            @if ($nurse->date17 == '3-11')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
    
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>11:00pm - 7:00am</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($output as $nurse) 
                            @if ($nurse->date17 == '11-7')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
    
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>OFF</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach ($output as $nurse) 
                            @if ($nurse->date17 == 'OFF')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif


{{-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// --}}
        @if ($date2 == '18')
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>7:00am - 3:00pm</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($output as $nurse) 
                            @if ($nurse->date18 == '7-3')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
    
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>3:00pm - 11:00pm</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($output as $nurse) 
                            @if ($nurse->date18 == '3-11')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
    
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>11:00pm - 7:00am</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($output as $nurse) 
                            @if ($nurse->date18 == '11-7')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
    
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>OFF</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach ($output as $nurse) 
                            @if ($nurse->date18 == 'OFF')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif


{{-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// --}}
        @if ($date2 == '19')
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>7:00am - 3:00pm</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($output as $nurse) 
                            @if ($nurse->date19 == '7-3')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
    
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>3:00pm - 11:00pm</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($output as $nurse) 
                            @if ($nurse->date19 == '3-11')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
    
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>11:00pm - 7:00am</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($output as $nurse) 
                            @if ($nurse->date19 == '11-7')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
    
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>OFF</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach ($output as $nurse) 
                            @if ($nurse->date19 == 'OFF')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif


{{-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// --}}
        @if ($date2 == '20')
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>7:00am - 3:00pm</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($output as $nurse) 
                            @if ($nurse->date20 == '7-3')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
    
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>3:00pm - 11:00pm</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($output as $nurse) 
                            @if ($nurse->date20 == '3-11')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
    
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>11:00pm - 7:00am</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($output as $nurse) 
                            @if ($nurse->date20 == '11-7')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
    
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>OFF</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach ($output as $nurse) 
                            @if ($nurse->date20 == 'OFF')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif


{{-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// --}}
        @if ($date2 == '21')
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>7:00am - 3:00pm</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($output as $nurse) 
                            @if ($nurse->date21 == '7-3')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
    
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>3:00pm - 11:00pm</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($output as $nurse) 
                            @if ($nurse->date21 == '3-11')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
    
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>11:00pm - 7:00am</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($output as $nurse) 
                            @if ($nurse->date21 == '11-7')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
    
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>OFF</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach ($output as $nurse) 
                            @if ($nurse->date21 == 'OFF')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif


{{-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// --}}
        @if ($date2 == '22')
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>7:00am - 3:00pm</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($output as $nurse) 
                            @if ($nurse->date22 == '7-3')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
    
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>3:00pm - 11:00pm</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($output as $nurse) 
                            @if ($nurse->date22 == '3-11')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
    
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>11:00pm - 7:00am</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($output as $nurse) 
                            @if ($nurse->date22 == '11-7')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
    
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>OFF</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach ($output as $nurse) 
                            @if ($nurse->date22 == 'OFF')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif


{{-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// --}}
        @if ($date2 == '23')
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>7:00am - 3:00pm</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($output as $nurse) 
                            @if ($nurse->date23 == '7-3')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
    
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>3:00pm - 11:00pm</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($output as $nurse) 
                            @if ($nurse->date23 == '3-11')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
    
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>11:00pm - 7:00am</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($output as $nurse) 
                            @if ($nurse->date23 == '11-7')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
    
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>OFF</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach ($output as $nurse) 
                            @if ($nurse->date23 == 'OFF')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif



{{-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// --}}
        @if ($date2 == '24')
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>7:00am - 3:00pm</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($output as $nurse) 
                            @if ($nurse->date24 == '7-3')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
    
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>3:00pm - 11:00pm</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($output as $nurse) 
                            @if ($nurse->date24 == '3-11')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
    
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>11:00pm - 7:00am</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($output as $nurse) 
                            @if ($nurse->date24 == '11-7')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
    
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>OFF</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach ($output as $nurse) 
                            @if ($nurse->date24 == 'OFF')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif


{{-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// --}}
        @if ($date2 == '25')
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>7:00am - 3:00pm</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($output as $nurse) 
                            @if ($nurse->date25 == '7-3')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
    
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>3:00pm - 11:00pm</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($output as $nurse) 
                            @if ($nurse->date25 == '3-11')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
    
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>11:00pm - 7:00am</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($output as $nurse) 
                            @if ($nurse->date25 == '11-7')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
    
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>OFF</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach ($output as $nurse) 
                            @if ($nurse->date25 == 'OFF')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif


{{-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// --}}
        @if ($date2 == '26')
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>7:00am - 3:00pm</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($output as $nurse) 
                            @if ($nurse->date26 == '7-3')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
    
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>3:00pm - 11:00pm</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($output as $nurse) 
                            @if ($nurse->date26 == '3-11')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
    
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>11:00pm - 7:00am</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($output as $nurse) 
                            @if ($nurse->date26 == '11-7')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
    
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>OFF</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach ($output as $nurse) 
                            @if ($nurse->date26 == 'OFF')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif


{{-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// --}}
        @if ($date2 == '27')
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>7:00am - 3:00pm</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($output as $nurse) 
                            @if ($nurse->date27 == '7-3')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
    
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>3:00pm - 11:00pm</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($output as $nurse) 
                            @if ($nurse->date27 == '3-11')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
    
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>11:00pm - 7:00am</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($output as $nurse) 
                            @if ($nurse->date27 == '11-7')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
    
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>OFF</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach ($output as $nurse) 
                            @if ($nurse->date27 == 'OFF')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif


{{-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// --}}
        @if ($date2 == '28')
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>7:00am - 3:00pm</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($output as $nurse) 
                            @if ($nurse->date28 == '7-3')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
    
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>3:00pm - 11:00pm</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($output as $nurse) 
                            @if ($nurse->date28 == '3-11')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
    
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>11:00pm - 7:00am</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($output as $nurse) 
                            @if ($nurse->date28 == '11-7')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
    
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>OFF</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach ($output as $nurse) 
                            @if ($nurse->date28 == 'OFF')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif


{{-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// --}}
        @if ($date2 == '29')
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>7:00am - 3:00pm</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($output as $nurse) 
                            @if ($nurse->date29 == '7-3')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
    
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>3:00pm - 11:00pm</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($output as $nurse) 
                            @if ($nurse->date29 == '3-11')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
    
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>11:00pm - 7:00am</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($output as $nurse) 
                            @if ($nurse->date29 == '11-7')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
    
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>OFF</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach ($output as $nurse) 
                            @if ($nurse->date29 == 'OFF')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif


{{-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// --}}
        @if ($date2 == '30')
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>7:00am - 3:00pm</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($output as $nurse) 
                            @if ($nurse->date30 == '7-3')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
    
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>3:00pm - 11:00pm</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($output as $nurse) 
                            @if ($nurse->date30 == '3-11')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
    
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>11:00pm - 7:00am</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($output as $nurse) 
                            @if ($nurse->date30 == '11-7')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
    
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>OFF</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach ($output as $nurse) 
                            @if ($nurse->date30 == 'OFF')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif


{{-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// --}}
        @if ($date2 == '31')
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>7:00am - 3:00pm</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($output as $nurse) 
                            @if ($nurse->date31 == '7-3')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
    
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>3:00pm - 11:00pm</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($output as $nurse) 
                            @if ($nurse->date31 == '3-11')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
    
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>11:00pm - 7:00am</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($output as $nurse) 
                            @if ($nurse->date31 == '11-7')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
    
            <div class="col-lg-3">
                <table>
                    <thead>
                        <tr>
                            <td align="center"><h2>OFF</h2></td>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach ($output as $nurse) 
                            @if ($nurse->date31 == 'OFF')
                                @foreach ($users as $user)
                                    @if ($nurse->employeeid == $user->employeeid)
                                        <tr>
                                            <td>
                                                {{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>