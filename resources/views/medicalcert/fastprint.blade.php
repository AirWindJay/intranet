
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Intranet</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    
  </head>

  <body class="bg-light" onload="onloadpage()">


    
        <main id="main" class="py-4" style="">

    {{-- <button id="btnprint" style="width: 100%; height: 100px;" class="btn btn-info" onclick=" printpage()">PRINT</button> --}}

            <div class="card-body">
                <div class="flex-center position-ref full-height" align="center">
                    <div id="tablesize">
                        <table style="width: 95%">
                            <tr style="border: 2px solid black;">
                                <td rowspan="4" align="center" style="border: 2px solid black;">
                                    <img src="{{ asset('../img/bghmc.png') }}" width="150px" height="150px">
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
                                    <td style="width: 40%" align="right">HOSPITAL NO.: <b><u>{{$hc}}</u></b></td>
                                </tr>
                            </table>
                            <table style="width: 95%;">
                                <tr>
                                    <td colspan="4"></td>
                                    <td style="width: 40%" align="right">CERTIFICATE NO.: <b><u>{{$pat->certno}}</u></b></td>
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

                            <table style="width: 95%; margin-bottom:-10px;">
                                <tr>
                                    <td style="width: 100%" align="center">
                                        This is to certify that <input class="input" type="text" disabled value="{{$pat->patlast}}, {{$pat->patfirst}}" size="70" style="text-align: center;">
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 100%">
                                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<sup>(Patient Name)</sup>
                                    </td>
                                </tr>
                            </table>
                            
                            <table style="width: 95%; margin-bottom:-10px;">
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
                                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<sup>(Address)</sup>
                                    </td>
                                </tr>
                            </table>

                            <table style="width: 95%; margin-bottom:-10px;">
                                <tr>
                                    <td style="width: 100%" align="center">was examined and treated/confirmed in this hospital on/from <input class="input" type="text" disabled value="{{date('F d, Y', strtotime($pat->admdate))}}" size="30" style="text-align: center;">
                                </tr>
                                <tr>
                                    <td style="width: 100%">
                                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<sup>(Date Admitted)</sup>
                                    </td>
                                </tr>
                            </table>

                            <table style="width: 95%; margin-bottom:-10px;">
                                <tr>
                                    <td  style="width: 100%" align="center">to <input class="input" type="text" disabled value="{{date('F d, Y', strtotime($pat->disdate))}}" size="45" style="text-align: center;"> for the following findings and/or diagnosis:</td>
                                </tr>
                                <tr>
                                    <td style="width: 100%">
                                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<sup>(Date Discharged)</sup>
                                    </td>
                                </tr>
                            </table>

                            <hr style="border: 1px solid black;">
                            
                            <table class="table-bordered" style="width: 95%; margin-bottom: 20px;">
                                <tr>
                                    <td align="center">
                                        <textarea disabled name="" id="" cols="120" rows="7" wrap="hard">{{$request->form_details}}</textarea>
                                    </td>
                                </tr>
                            </table>

                            <hr style="border: 1px solid black;">

                            <table style="width: 95%; margin-bottom: 50px;">
                                <tr>
                                    <td style="width: 100%">and would need medical attention for <input class="input" disabled type="number" value="{{$request->num_days}}" style="text-align: center"> day/s barring complications.</td>
                                </tr>
                            </table>

                            <table style="width: 95%; margin-bottom: -20px;">
                            <tr>
                                <td style="width: 100%">This certification is being issued at the request of <input class="input" disabled type="text" size="50" value="{{$request->requestor}}" style="text-align: center"></td>
                            </tr>
                            <tr>
                                <td style="width: 100%">
                                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<sup>(Name of the person Requesting)</sup>
                                </td>
                            </tr>
                        </table>

                        <table style="width: 95%; margin-bottom: 100px;">
                            <tr>
                                <td style="width: 100%">for <input class="input" disabled type="text" size="95" value="{{$request->purpose}}" style="text-align: center"></td>
                            </tr>
                            <tr>
                                <td style="width: 100%">
                                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<sup>(Purpose)</sup>
                                </td>
                            </tr>
                        </table>

                        <table style="width: 95%;">
                            <tr>
                                <td style="width: 100%" align="right">Physician: <input class="input" type="text" disabled value="{{$request->physician}}" size="20" style="text-align: center;"></td>
                            </tr>
                        </table>


                        <table style="width: 95%;">
                            <tr>
                                <td style="width: 100%" align="right">License Number: <input class="input" disabled type="text" value="{{$request->license}}" size="20" style="text-align: center;"></td>
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
                font-size: 15px;
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
                padding: 10px-10px;
                position: relative;
                top: 50%;

                &:focus {
                    outline: none;    
                }
            }
            </style>
        </main>
    
        <script src="{{ asset('js/jquery.min.js') }}"></script>
    </body>
</html>