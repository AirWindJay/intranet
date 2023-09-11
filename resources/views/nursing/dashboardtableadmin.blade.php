<table class="table table-striped" style="width: 100%">
        <thead>
            <tr>
                <td align="center" style="width: 50%">WARD</td>
                <td align="center" style="width: 25%">TOTAL PERSONNEL IN WARD</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($wards as $ward)
                <tr>
                    <td>
                        @if ($mydata[0]->role_id == '9' || $mydata[0]->role_id == '4')
                            <a href="/printschedule/{{$ward->id}}" target="_blank"><button class="btn btn-dark">PRINT</button></a>
                        @endif
                        @if ($mydata[0]->role_id == '11')
                            <a href="/nurse1/printschedule/{{$ward->id}}" target="_blank"><button class="btn btn-dark">PRINT</button></a>
                        @endif
                        @if ($mydata[0]->role_id == '12')
                            <a href="/nurse2/printschedule/{{$ward->id}}" target="_blank"><button class="btn btn-dark">PRINT</button></a>
                        @endif
                        <a href="/ward/{{$ward->id}}">{{$ward->ward_name}}</a>
                    </td>
                    <td>
                        @if($ward->id == 1)
                            {{$count1[0]->count}}
                        @elseif($ward->id == 2)
                            {{$count2[0]->count}}
                        @elseif($ward->id == 3)
                            {{$count3[0]->count}}
                        @elseif($ward->id == 4)
                            {{$count4[0]->count}}
                        @elseif($ward->id == 5)
                            {{$count5[0]->count}}
                        @elseif($ward->id == 6)
                            {{$count6[0]->count}}
                        @elseif($ward->id == 7)
                            {{$count7[0]->count}}
                        @elseif($ward->id == 8)
                            {{$count8[0]->count}}
                        @elseif($ward->id == 9)
                            {{$count9[0]->count}}
                        @elseif($ward->id == 10)
                            {{$count10[0]->count}}
                        @elseif($ward->id == 11)
                            {{$count11[0]->count}}
                        @elseif($ward->id == 12)
                            {{$count12[0]->count}}
                        @elseif($ward->id == 13)
                            {{$count13[0]->count}}
                        @elseif($ward->id == 14)
                            {{$count14[0]->count}}
                        @elseif($ward->id == 15)
                            {{$count15[0]->count}}
                        @elseif($ward->id == 16)
                            {{$count16[0]->count}}
                        @elseif($ward->id == 17)
                            {{$count17[0]->count}}
                        @elseif($ward->id == 18)
                            {{$count18[0]->count}}
                        @elseif($ward->id == 19)
                            {{$count19[0]->count}}
                        @elseif($ward->id == 20)
                            {{$count20[0]->count}}
                        @elseif($ward->id == 21)
                            {{$count21[0]->count}}
                        @elseif($ward->id == 22)
                            {{$count22[0]->count}}
                        @elseif($ward->id == 23)
                            {{$count23[0]->count}}
                        @elseif($ward->id == 24)
                            {{$count24[0]->count}}
                        @elseif($ward->id == 25)
                            {{$count25[0]->count}}
                        @elseif($ward->id == 26)
                            {{$count26[0]->count}}
                        @elseif($ward->id == 27)
                            {{$count27[0]->count}}
                        @elseif($ward->id == 28)
                            {{$count28[0]->count}}
                        @elseif($ward->id == 29)
                            {{$count29[0]->count}}
                        @elseif($ward->id == 30)
                            {{$count30[0]->count}}
                        @elseif($ward->id == 31)
                            {{$count31[0]->count}}
                        @elseif($ward->id == 32)
                            {{$count32[0]->count}}
                        @elseif($ward->id == 33)
                            {{$count33[0]->count}}
                        @elseif($ward->id == 34)
                            {{$count34[0]->count}}
                        @elseif($ward->id == 35)
                            {{$count35[0]->count}}
                        @elseif($ward->id == 36)
                            {{$count36[0]->count}}
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>