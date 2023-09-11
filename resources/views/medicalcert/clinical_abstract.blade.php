@extends('layouts.app2')

@section('content')

    {{-- <button id="btnprint" style="width: 100%; height: 100px;" class="btn btn-info" onclick=" printpage()">PRINT</button> --}}

            <div class="card-body">
                <div class="flex-center position-ref full-height" align="center">
                    <div id="tablesize">
                        <table style="width: 95%">
                            <tr style="border: 1px solid black;">
                                <td rowspan="4" align="center" style="border: 1px solid black;">
                                    <img src="{{ asset('/image/bghmc.png') }}" width="150px" height="150px">
                                </td>
                                <td colspan="3" style="border: 1px solid black;">
                                    <center>Republic of the Philippines<br>Department if Health<br><b>BAGUIO GENERAL HOSPITAL AND MEDICAL CENTER</b><br>Baguio City</center>
                                </td>
                            </tr>
                            <tr style="border: 1px solid black;">
                                <td rowspan="3" style="border: 1px solid black;">
                                    <center>HEALTH INFORMATION MANAGEMENT OFFICE<h2><b>CLINICAL ABSTRACT</b></h2></center>
                                </td>
                                <td colspan="2" style="border: 1px solid black;">
                                    Form No.: <b>MS - COM - 012</b>
                                </td>
                            </tr>
                            <tr style="border: 1px solid black;">
                                <td colspan="2" style="border: 1px solid black;">
                                    Revision No.: 0
                                </td>
                            </tr>
                            <tr style="border: 1px solid black;">
                                <td colspan="2" style="border: 1px solid black;">
                                    Effectivity Date: June 1, 2017
                                </td>
                            </tr>
                        </table>
                        <br>

                        <table style="width: 95%">
                            <tr style="border: 2px solid black;">
                                <td colspan="3" style="border: 2px solid black; width: 60%">
                                    <b>Patient Name</b>(Surname, Firstname, M.I.)
                                </td>
                                <td colspan="2" style="border: 2px solid black; width: 20%">
                                    <b>Hospital Number:</b>
                                </td>
                                <td style="border: 2px solid black; width: 20%">
                                    <b>Date Accomplished:</b>
                                </td>
                            </tr>
                            <tr style="border: 2px solid black;">
                                <td colspan="3" style="border: 2px solid black;">
                                    <input type="text" style="width: 100%; text-align: center;">
                                </td>
                                <td colspan="2" style="border: 2px solid black;">
                                    <input type="text" style="width: 100%; text-align: center;">
                                </td>
                                <td style="border: 2px solid black;">
                                    <input type="date" style="width: 100%; text-align: center;">
                                </td>
                            </tr>
                            <tr style="border: 2px solid black;">
                                <td style="width: 25%">
                                    <b>Present Address:</b>
                                </td>
                                <td colspan="5" style="width: 75%">
                                    <textarea name="" id="" cols="80" rows="2"></textarea>
                                </td>
                            </tr>
                            <tr style="border: 2px solid black;">
                                <td colspan="2" style="border: 2px solid black; width: 40%">
                                    <b>Date of Birth: </b>(Month/Date/Year)
                                </td>
                                <td colspan="2" style="border: 2px solid black; width: 20%">
                                    <b>Age:</b>
                                </td>
                                <td style="border: 2px solid black; width: 20%">
                                    <b>Sex: </b>
                                </td>
                                <td style="border: 2px solid black; width: 20%">
                                    <b>Civil Status: </b>
                                </td>
                            </tr>
                            
                            <tr style="border: 2px solid black;">
                                <td colspan="2" style="border: 2px solid black; width: 40%">
                                    <input type="date" style="width: 100%; text-align: center;">
                                </td>
                                <td colspan="2" style="border: 2px solid black; width: 20%">
                                    <input type="number" style="width: 100%; text-align: center;">
                                </td>
                                <td style="border: 2px solid black; width: 20%">
                                    <select style="width: 100%;">
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </td>
                                <td style="border: 2px solid black; width: 20%">
                                    <input type="number" style="width: 100%; text-align: center;">
                                </td>
                            </tr>
                            
                            <tr style="border: 2px solid black;">
                                <td style="border: 2px solid black; width: 30%">
                                    <b>Date of Admission: </b>
                                </td>
                                <td colspan="4" style="border: 2px solid black; width: 50%">
                                    <b>Date Of Discharge: </b>
                                </td>
                                <td style="width: 20%" rowspan="2" align="center">
                                    <b>Still Admitted? (Please Check)</b><br>
                                    <input type="checkbox"> Yes <input type="checkbox"> No
                                </td>
                            </tr>

                            <tr style="border: 2px solid black;">
                                <td style="border: 2px solid black; width: 30%">
                                    <input type="date" style="width: 100%; text-align: center;">
                                </td>
                                <td colspan="4" style="border: 2px solid black; width: 50%">
                                    <input type="date" style="width: 100%; text-align: center;">
                                </td>
                            </tr>

                        </table>

                        <hr style="border-top: 7px double black; width: 95%">

                        <table class="table-bordered" style="width: 95%; margin-bottom: 150px;">
                            <tr>
                                <td align="left">
                                    I. Clinical History:
                                </td>
                                <td>
                                    <textarea name="" id="" cols="85" rows="5"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td align="left">
                                    II.	Diagnosis/ Working Impression:
                                </td>
                                <td>
                                    <textarea name="" id="" cols="85" rows="5"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td align="left">
                                    III.	Management (Diagnostic Test, Medication, etc.):
                                </td>
                                <td>
                                    <textarea name="" id="" cols="85" rows="5"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td align="left">
                                    IV.	Plan:
                                </td>
                                <td>
                                    <textarea name="" id="" cols="85" rows="5"></textarea>
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
                                <td style="width: 100%" align="right">Attending Physician &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                            </tr>
                        </table>

                        <table style="width: 95%;">
                            <tr>
                                <td style="width: 100%" align="right">License Number: <input type="text" value="" size="20" style="text-align: center;"></td>
                            </tr>
                        </table>

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