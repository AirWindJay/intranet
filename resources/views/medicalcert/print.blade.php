@extends('layouts.app2')

@section('content')

    <form method="POST" action="/medicalcert/fastprint" enctype="multipart/form-data">
        @csrf
        <input id="hc" type="text" class="form-control" name="hc" value="{{$hc}}" hidden>
        <input id="enccode" type="text" class="form-control" name="enccode" value="{{$enccode}}" hidden>
    
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
                                <center>HEALTH INFORMATION MANAGEMENT OFFICE<h2><b>MEDICAL CERTIFICATE</b></h2></center>
                            </td>
                            <td colspan="2" style="border: 2px solid black;">
                                Form No.: <b>MS - HIM - 005</b>
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
                                <td style="width: 20%" align="right">HOSPITAL NO.: <b><u>{{$hc}}</u></b></td>
                            </tr>
                        </table>
                        <table style="width: 95%;">
                            <tr>
                                <td colspan="4"></td>
                                <td style="width: 20%" align="right">CERTIFICATE NO.: <b><u></u></b></td>
                            </tr>
                        </table>
                    <br>
                    


                    <div style="font-size: 20px">
                        <table style="width: 95%; margin-bottom: 20px;">
                            <tr>
                                <td colspan="4"></td>
                                <td style="width: 20%" align="right">DATE: <b><u>{{date('F d, Y', strtotime($datetoday))}}</u></b></td>
                            </tr>
                        </table>
                    
                        {{-- <div align="justify"> --}}
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
                                        This is to certify that <input class="input" type="text" disabled value="{{$pat->patlast}}, {{$pat->patfirst}}" size="70" style="text-align: center;">
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 100%">
                                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<sup>(Patient Name)</sup>
                                    </td>
                                </tr>
                            </table>
                            
                            <table style="width: 95%; margin-bottom: 20px;">
                                <tr>
                                    @if ($pat->patsex == 'M')
                                        <td style="width: 100%" align="center">(MALE <input type="checkbox" disabled checked>/<input type="checkbox" disabled>FEMALE) <input class="input" type="text" disabled value="{{$pat->age}}" size="3" style="text-align: center;"> of age,
                                    @elseif ($pat->patsex == 'F')
                                        <td style="width: 100%" align="center">(MALE <input type="checkbox" disabled>/<input type="checkbox" disabled checked>FEMALE) <input class="input" type="text" disabled value="{{$pat->age}}" size="3" style="text-align: center;"> of age,
                                    @endif
                                    
                                    from <input class="input" type="text" disabled value="{{$pat->bgyname}}, {{$pat->ctyname}}" size="50" style="text-align: center;"></td>
                                </tr>
                                <tr>
                                    <td style="width: 100%">
                                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<sup>(Address)</sup>
                                    </td>
                                </tr>
                            </table>

                            <table style="width: 95%; margin-bottom: 20px;">
                                <tr>
                                    <td style="width: 100%" align="center">was examined and treated/confirmed in this hospital on/from <input class="input" type="text" disabled value="{{date('F d, Y', strtotime($pat->admdate))}}" size="30" style="text-align: center;">
                                </tr>
                                <tr>
                                    <td style="width: 100%">
                                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<sup>(Date Admitted)</sup>
                                    </td>
                                </tr>
                            </table>

                            <table style="width: 95%; margin-bottom: 20px;">
                                <tr>
                                    <td  style="width: 100%" align="center">to <input class="input" type="text" disabled value="{{date('F d, Y', strtotime($pat->disdate))}}" size="45" style="text-align: center;"> for the following findings and/or diagnosis:</td>
                                </tr>
                                <tr>
                                    <td style="width: 100%">
                                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<sup>(Date Admitted)</sup>
                                    </td>
                                </tr>
                            </table>
                        {{-- </div> --}}

                        <hr style="border: 1px solid black;">
                        
                        <table class="table-bordered" style="width: 95%; margin-bottom: 20px;">
                            <tr>
                                <td align="center">
                                    <textarea name="form_details" id="form_details" cols="95" rows="8" wrap="hard">{{$pat->details}}</textarea>
                                </td>
                            </tr>
                        </table>

                        <hr style="border: 1px solid black;">

                        <table style="width: 95%; margin-bottom: 60px;">
                            <tr>
                                <td style="width: 100%">and would need medical attention for <input type="number" id="num_days" name="num_days"> day/s barring complications.</td>
                            </tr>
                        </table>

                        <table style="width: 95%; margin-bottom: 20px;">
                            <tr>
                                <td style="width: 100%">This certification is being issued at the request of <input type="text" size="50" id="requestor" name="requestor"></td>
                            </tr>
                            <tr>
                                <td style="width: 100%">
                                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<sup>(Name of the person Requesting)</sup>
                                </td>
                            </tr>
                        </table>

                        <table style="width: 95%; margin-bottom: 140px;">
                            <tr>
                                <td style="width: 100%">for <input type="text" size="95" id="purpose" name="purpose"></td>
                            </tr>
                            <tr>
                                <td style="width: 100%">
                                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<sup>(Purpose)</sup>
                                </td>
                            </tr>
                        </table>

                        <table style="width: 95%;">
                            <tr>
                                <td style="width: 100%" align="right">Physician: <input type="text" value="{{$pat->physician}}" id="physician" name="physician" size="37" style="text-align: center;"></td>
                            </tr>
                        </table>


                        <table style="width: 95%;">
                            <tr>
                                <td style="width: 100%" align="right">License Number: <input id="license" name="license" type="text" value="" size="20" style="text-align: center;"></td>
                            </tr>
                        </table>



                    </div>
                </div>
            </div>
        </div>
        
        <button id="btnprint" type="submit" style="width: 100%; height: 100px;" class="btn btn-info">READY PRINT</button>
    </form>
    

    <script type="text/javascript">
        function printpage()
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
    .input {
        background-color: transparent;
        border: none;
        border-bottom: 1px solid #CCC;
        color: BLACK;
        box-sizing: border-box;
        font-family: 'Arvo';
        font-size: 18px;
        height: 50px;
        padding: 10px 0px;
        position: relative;
        top: 50%;

        &:focus {
            outline: none;    
        }
    }
    </style>
@endsection