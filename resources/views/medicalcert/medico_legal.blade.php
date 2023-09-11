@extends('layouts.app2')

@section('content')

    {{-- <button id="btnprint" style="width: 100%; height: 100px;" class="btn btn-info" onclick=" printpage()">PRINT</button> --}}

            <div class="card-body">
                <div class="flex-center position-ref full-height" align="center">
                    <div id="tablesize">
                        <table style="width: 95%">
                            <tr style="border: 2px solid black;">
                                <td rowspan="4" align="center" style="border: 2px solid black;">
                                    <img src="{{ asset('/image/bghmc.png') }}" width="150px" height="150px">
                                </td>
                                <td colspan="3" style="border: 2px solid black;">
                                    <center>Republic of the Philippines<br>Department if Health<br><b>BAGUIO GENERAL HOSPITAL AND MEDICAL CENTER</b><br>Baguio City</center>
                                </td>
                            </tr>
                            <tr style="border: 2px solid black;">
                                <td rowspan="3" style="border: 2px solid black;">
                                    <center>HEALTH INFORMATION MANAGEMENT OFFICE<h2><b>MEDICO - LEGAL CERTIFICATE</b></h2></center>
                                </td>
                                <td colspan="2" style="border: 2px solid black;">
                                    Form No.: <b>MS - HIM - 004</b>
                                </td>
                            </tr>
                            <tr style="border: 2px solid black;">
                                <td colspan="2" style="border: 2px solid black;">
                                    Revision No.: 1
                                </td>
                            </tr>
                            <tr style="border: 2px solid black;">
                                <td colspan="2" style="border: 2px solid black;">
                                    Effectivity Date: July 1, 2015
                                </td>
                            </tr>
                        </table>
                            <table style="width: 95%;">
                                <tr>
                                    <td colspan="4"></td>
                                    <td style="width: 40%" align="right">HOSPITAL NO.: <b><u></u></b></td>
                                </tr>
                            </table>
                            <table style="width: 95%;">
                                <tr>
                                    <td colspan="4"></td>
                                    <td style="width: 40%" align="right">CERTIFICATE NO.: <b><u></u></b></td>
                                </tr>
                            </table>
                        <br>
                        


                        <div style="font-size: 20px">
                            <table style="width: 95%; margin-bottom: 20px;">
                                <tr>
                                    <td colspan="4"></td>
                                    <td style="width: 40%" align="right">DATE: <b><u>{{date('F d, Y', strtotime($datetoday))}}</u></b></td>
                                </tr>
                            </table>

                            <table style="width: 95%; margin-bottom: 20px;">
                                <tr>
                                    <td style="width: 100%">
                                        TO WHOM IT MAY CONCERN:
                                    </td>
                                </tr>
                            </table>

                            <table style="width: 95%; margin-bottom: 20px;">
                                <tr>
                                    <td style="width: 100%" align="center">
                                        This is to certify that <b><u> <input type="text" size="80" style="text-align: center;"></u></b>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 100%" align="center">
                                        <sup>(Name Of Patient)</sup>
                                    </td>
                                </tr>
                            </table>

                            {{-- @if ($pat->patsex == 'M')
                                    <td style="width: 100%" align="center">(MALE <input type="checkbox" disabled checked>/<input type="checkbox" disabled>FEMALE) <b><u>{{$pat->age}}</u></b> of age,
                                @elseif ($pat->patsex == 'F')
                                    <td style="width: 100%" align="center">(MALE <input type="checkbox" disabled>/<input type="checkbox" disabled checked>FEMALE) <b>{{$pat->age}}</b> of age,
                                @endif --}}
                            
                            <table style="width: 95%; margin-bottom: 20px;">
                                <tr>
                                    <td style="width: 100%" align="center">(MALE <input type="checkbox" disabled>/<input type="checkbox" disabled>FEMALE)
                                    <input type="number" style="width: 50px"> of age, from <input type="text" size="60" style="text-align: center;"></td>
                                </tr>
                                <tr>
                                    <td style="width: 100%" align="center">
                                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<sup>(Address)</sup>
                                    </td>
                                </tr>
                            </table>

                            <table style="width: 95%; margin-bottom: 20px;">
                                <tr>
                                    <td style="width: 100%" align="center">was examined and treated/confirmed in this hospital on/from <input type="date" style="text-align: center; width: 400px"></td>
                                </tr>
                                
                                <tr>
                                    <td style="width: 100%" align="center">
                                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<sup>(Date Admitted)</sup>
                                    </td>
                                </tr>
                            </table>

                            <table style="width: 95%; margin-bottom: 20px; margin-left: -370px">
                                <tr>
                                    <td  style="width: 100%" align="center">to <input type="date" style="text-align: center; width: 400px"> for the following</td>
                                </tr>
                                <tr>
                                    <td  style="width: 100%" align="center"><sup>(Date Admitted)&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</sup></td>
                                </tr>
                            </table>

                            <hr style="border: 1px solid black;">
                            
                            <table class="table-bordered" style="width: 95%; margin-bottom: 20px;">
                                <tr>
                                    <td align="center">
                                        <textarea name="" id="" cols="95" rows="5" wrap="hard"></textarea>
                                    </td>
                                </tr>
                            </table>

                            <hr style="border: 1px solid black;">


                            <table style="width: 95%; margin-bottom: 20px;">
                                <tr>
                                    <td style="width: 100%">TIME OF ARRIVAL: <input type="time"></td>
                                </tr>
                            </table>

                            <table style="width: 95%; margin-bottom: 20px;">
                                <tr>
                                    <td style="width: 100%">Brought by: <input type="text" size="53" style="text-align: center;"> /Relationship: <input type="text" style="text-align: center;"></td>
                                </tr>
                            </table>

                            <table style="width: 95%; margin-bottom: 20px;">
                                <tr>
                                    <td style="width: 100%">Address: <input type="text" size="96" style="text-align: center;"></td>
                                </tr>
                            </table>

                            <table style="width: 95%; margin-bottom: 20px;">
                                <tr>
                                    <td style="width: 100%">Treatment will take from <input type="text" size="26" style="text-align: center;"> to <input type="text" size="26" style="text-align: center;"> days for the above</td>
                                </tr>
                            </table>

                            

                            <table style="width: 95%; margin-bottom: 80px;">
                                <tr>
                                    <td style="width: 100%">conditions/injuries to heal/recover unless complications will arise</td>
                                </tr>
                            </table>


                            <table style="width: 95%;">
                                <tr>
                                    <td style="width: 100%" align="right"><input type="text" value="" size="37" style="text-align: center;"></td>
                                </tr>
                            </table>

                            
                            <table style="width: 95%; margin-bottom: 20px;">
                                <tr>
                                    <td style="width: 100%" align="right">Attending Physician / Medico-legal Officer</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            

            <script type="text/javascript">
                function onloadpage()
                {
                    $("#hidewhenprint1").hide();
                    $("#hidewhenprint2").hide();
                    $("#btnprint").hide();
                    window.print();

                    // $.ajax({
                    // 	type: 'POST',
                    // 	url:'/call/again',
                    // 	success: function(data) {
                    // 		getdata();
                    // 	}
                    // });
                    $("#btnprint").show();
                    $("#hidewhenprint1").show();
                    $("#hidewhenprint2").show();
                }
            </script>
            <style>
            textarea
            {
                white-space: normal;
                text-align: center;
                -moz-text-align-last: center; /* Firefox 12+ */
                text-align-last: center;
            font-weight: bold;
            }
            input[type="checkbox"]
            {
                width: 20px; /*Desired width*/
                height: 20px; /*Desired height*/
            }
            </style>

        <script src="{{ asset('js/jquery.min.js') }}"></script>

@endsection