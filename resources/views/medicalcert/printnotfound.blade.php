@extends('layouts.app2')

@section('content')

    <button id="btnprint" style="width: 100%; height: 100px;" class="btn btn-info" onclick=" printpage()">PRINT</button>
    
    <button onclick="window.history.back();">Go Back</button>
    <div id="hidewhenprint0" style="background-color: RED; color: white;">
        <h1>NO MEDICAL CERTIFICATE RECORD FOUND</h1>
    </div>

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
                <br>
                


                <div style="font-size: 20px">
                    <table style="width: 95%; margin-bottom: 20px;">
                        <tr>
                            <td colspan="4"></td>
                            <td style="width: 20%" align="right">DATE: <b><u>{{date('F d, Y', strtotime($datetoday))}}</u></b></td>
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
                                This is to certify that <b><u></u></b> (Name Of Patient)
                            </td>
                        </tr>
                    </table>
                    
                    <table style="width: 95%; margin-bottom: 20px;">
                        <tr>
                            <td style="width: 100%" align="center">(MALE <input type="checkbox">/<input type="checkbox" disabled>FEMALE) <b><u><input type="number"></u></u></b> of age,from <b><u><input type="text"></u></u></b> (Address)</td>
                        </tr>
                    </table>

                    <table style="width: 95%; margin-bottom: 20px;">
                        <tr>
                            <td style="width: 100%" align="center">was examined and treated/confirmed in this hospital on/from <b><u><input type="text"></u></b>(Date Admitted)</td>
                        </tr>
                    </table>

                    <table style="width: 95%; margin-bottom: 20px;">
                        <tr>
                            <td  style="width: 100%" align="center">to <b><u><input type="text"></u></b> (Date Discharged) for the following findings and/or diagnosis:</td>
                        </tr>
                    </table>

                    <hr style="border: 1px solid black;">
                    
                    <table class="table-bordered" style="width: 95%; margin-bottom: 20px;">
                        <tr>
                            <td align="center">
                                <textarea name="" id="" cols="95" rows="10" wrap="hard"></textarea>
                            </td>
                        </tr>
                    </table>

                    <hr style="border: 1px solid black;">

                    <table style="width: 95%; margin-bottom: 200px;">
                        <tr>
                            <td style="width: 100%">and would need medical attention for <input type="number"> day/s barring complications.</td>
                        </tr>
                    </table>

                    <table style="width: 95%;">
                        <tr>
                            <td style="width: 100%" align="right"><input type="text" value=""></td>
                        </tr>
                    </table>

                    
                    <table style="width: 95%; margin-bottom: 20px;">
                        <tr>
                            <td style="width: 100%" align="right">ATTENDING PHYSICIAN</td>
                        </tr>
                    </table>
                </div>
                

            </div>
        </div>
    </div>
    

    <script type="text/javascript">
        function printpage()
        {
            $("#hidewhenprint0").hide();
            $("#hidewhenprint1").hide();
            $("#hidewhenprint2").hide();
            $("#btnprint").hide();
            window.print();
            $("#btnprint").show();
            $("#hidewhenprint0").show();
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