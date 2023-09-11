@extends('layouts.app2')

@section('content')

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
                                <center>HEALTH INFORMATION MANAGEMENT OFFICE<h2><b>CERTIFICATE OF CONFINEMENT</b></h2></center>
                            </td>
                            <td colspan="2" style="border: 2px solid black;">
                                Form No.: <b></b>
                            </td>
                        </tr>
                        <tr style="border: 2px solid black;">
                            <td colspan="2" style="border: 2px solid black;">
                                Revision No.: 
                            </td>
                        </tr>
                        <tr style="border: 2px solid black;">
                            <td colspan="2" style="border: 2px solid black;">
                                Effectivity Date: 
                            </td>
                        </tr>
                    </table>
                        <table style="width: 95%;">
                            <tr>
                                <td colspan="4"></td>
                                <td style="width: 20%" align="right">HOSPITAL NO.: <b><u></u></b></td>
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
                                <td style="width: 100%" align="center">
                                    This is to certify that <input type="text" size="50" style="text-align: center">, <input type="number" style="width: 70px; text-align: center"> years old
                                </td>
                            </tr>
                        </table>

                        
                        <table style="width: 95%; margin-bottom: 20px;">
                            <tr>
                                <td style="width: 100%" align="center">
                                    of <input type="text" size="60" style="text-align: center"> has been confined in this
                                </td>
                            </tr>
                        </table>

                        
                        <table style="width: 95%; margin-bottom: 200px;">
                            <tr>
                                <td style="width: 100%" align="center">
                                    hospital from <input type="text" size="60" style="text-align: center"> to the present
                                </td>
                            </tr>
                        </table>

                        <table style="width: 95%; margin-bottom: 20px;">
                            <tr>
                                <td style="width: 100%" align="center">This certification is being issued at the request of <input type="text" size="50" style="text-align: center"></td>
                            </tr>
                            <tr>
                                <td style="width: 100%" align="center">
                                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<sup>(Name of the person Requesting)</sup>
                                </td>
                            </tr>
                        </table>

                        <table style="width: 95%; margin-bottom: 140px;">
                            <tr>
                                <td style="width: 100%" align="center">for <input type="text" size="95" style="text-align: center"></td>
                            </tr>
                            <tr>
                                <td style="width: 100%" align="center">
                                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<sup>(Purpose)</sup>
                                </td>
                            </tr>
                        </table>

                        <table style="width: 95%;">
                            <tr>
                                <td style="width: 100%" align="right"><input type="text" value="" size="37" style="text-align: center;"></td>
                            </tr>
                        </table>

                        
                        <table style="width: 95%; margin-bottom: 20px;">
                            <tr>
                                <td style="width: 100%" align="right">HIMD Head / Supervisor &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                            </tr>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    

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
    </style>
@endsection