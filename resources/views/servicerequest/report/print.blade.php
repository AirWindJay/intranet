<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Intranet') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        
        <script>
            function printpage()
            {
                $("#btnprint").hide();
                window.print();
                $("#btnprint").show();
            }
        </script>

    </head>
    <body>
        <div class="flex-center position-ref full-height" align="center">
            <div id="tablesize">
                <button id="btnprint" style="width: 25%; height: 50px;" class="btn btn-info" onclick=" printpage()">PRINT</button>
                <table class="table-bordered" style="width: 95%">
                    <tr>
                        <td rowspan="4" align="center">
                            <img src="{{ asset('/image/bghmc.png') }}" width="150px" height="150px">
                        </td>
                        <td colspan="3">
                            <center>Republic of the Philippines<br>Department if Health<br>BAGUIO GENERAL HOSPITAL AND MEDICAL CENTER<br>Baguio City</center>
                        </td>
                    </tr>
                    <tr>
                        <td rowspan="3">
                            <center><strong><b>GENERAL SUMMARY OF CLIENT<br>RESPONSE</b></strong></center>
                        </td>
                        <td>
                            Form No:
                        </td>
                        <td>
                            HS-CCRU
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Revision No.
                        </td>
                        <td>
                            0
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Effectivity
                        </td>
                        <td>
                            1-Aug-14
                        </td>
                    </tr>
                </table>
                <br>
                <div class="row">
                    <div class="col-sm-4">Department/Section:</div>
                    <div class="col-sm-4">Management Information Section</div>
                    <div class="col-sm-4">Total Number of Respondent: 12</div>
                    
                    <div class="col-sm-4">Perion Covered:</div>
                    <div class="col-sm-4">March 01, 2019 to March 31, 2019</div>
                    <div class="col-sm-4">External: 0</div>
                    
                    <div class="col-sm-4">Total Clients for the Period:</div>
                    <div class="col-sm-4"></div>
                    <div class="col-sm-4">Internal: 12</div>
                </div>
            </div>
        </div>
        <div class="flex-center position-ref full-height" align="center">
            <div id="tablesize">
                <div class="row">
                    <div class="col-sm-12"></div>
                    <div class="col-sm-5"><strong><h5>B. Internal Customer Satisfaction Survey Result:</h5></strong></div>
                    <div class="col-sm-7"></div>

                    <div class="col-sm-12"><strong><h5>Table 1: Purpose of Visit/Transact</h5></strong></div>
                    
                    <div class="col-sm-12">
                        <table class="table-bordered" style="width: 95%">
                            <thead>
                                <tr>
                                    <th rowspan="2">
                                        What is the purpose of your<br>visit/transaction
                                    </th>
                                    <th rowspan="2">
                                        # OF RESPONDENTS
                                    </th>
                                    <th rowspan="2">
                                        Percentages
                                    </th>
                                    <th colspan="5">
                                        WAITING TIME
                                    </th>
                                </tr>
                                <tr>
                                    <td>
                                        Minutes/s
                                    </td>
                                    <td>
                                        Hour/s
                                    </td>
                                    <td>
                                        Day/s
                                    </td>
                                    <td>
                                        Week/s
                                    </td>
                                    <td>
                                        Month/s
                                    </td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Patient Medical Treatment</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Submit report/documents</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Inquire, request data/documents</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Seek technical assistance</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Interview, researce</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Follow-up documents</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Apply for Certificate/Authentication</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Others</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Unresponsive</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <br>
                    <div class="col-sm-12"><strong><h3>Table 2: Satisfactory Rating</h3></strong></div>
                    <div class="col-sm-12" style="margin-bottom: 300px">
                        <table class="table-bordered" style="width: 95%">
                            <thead>
                                <tr>
                                    <th>
                                        <strong>DESCRIPTION</strong>
                                    </th>
                                    <th colspan="2">
                                        <strong>STRONGLY<br>AGREE+AGREE</strong>
                                    </th>
                                    <th colspan="4">
                                        <strong>STRONGLY<br>DISAGREE+DISAGREE</strong>
                                    </th>
                                    <th colspan="2">
                                        UNRESPONSIVE
                                    </th>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td># OF<br>RESPONDENTS</td>
                                    <td>PERCENTAGE</td>
                                    <td colspan="2"># OF<br>RESPONDENTS</td>
                                    <td colspan="2">PERCENTAGE</td>
                                    <td colspan="2"># OF<br>RESPONDENTS</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Received the appropriate services</td>
                                    <td></td>
                                    <td></td>
                                    <td colspan="2"></td>
                                    <td colspan="2"></td>
                                    <td colspan="2"></td>
                                </tr>
                                <tr>
                                    <td>Timely response was given</td>
                                    <td></td>
                                    <td></td>
                                    <td colspan="2"></td>
                                    <td colspan="2"></td>
                                    <td colspan="2"></td>
                                </tr>
                                <tr>
                                    <td>Staff was well informed</td>
                                    <td></td>
                                    <td></td>
                                    <td colspan="2"></td>
                                    <td colspan="2"></td>
                                    <td colspan="2"></td>
                                </tr>
                                <tr>
                                    <td>Staff was courteous/approachable</td>
                                    <td></td>
                                    <td></td>
                                    <td colspan="2"></td>
                                    <td colspan="2"></td>
                                    <td colspan="2"></td>
                                </tr>
                                <tr>
                                    <td>Services rendered were just & fair</td>
                                    <td></td>
                                    <td></td>
                                    <td colspan="2"></td>
                                    <td colspan="2"></td>
                                    <td colspan="2"></td>
                                </tr>
                                <tr>
                                    <td>Workplace was clean & organized</td>
                                    <td></td>
                                    <td></td>
                                    <td colspan="2"></td>
                                    <td colspan="2"></td>
                                    <td colspan="2"></td>
                                </tr>
                                <tr>
                                    <td>Restroom was clean</td>
                                    <td></td>
                                    <td></td>
                                    <td colspan="2"></td>
                                    <td colspan="2"></td>
                                    <td colspan="2"></td>
                                </tr>
                                <tr>
                                    <td>Sub Total Average Rating</td>
                                    <td></td>
                                    <td></td>
                                    <td colspan="2"></td>
                                    <td colspan="2"></td>
                                    <td colspan="2"></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td colspan="2"><b>Strongly Agree + Agree</b></td>
                                    <td><b>100.00%</b></td>
                                    <td colspan="4">Strongly Disagree + Disagree</td>
                                    <td>0.00%</td>
                                </tr>
                                <tr>
                                    <td><b>Total Average Rating</b></td>
                                    <td colspan="8">100.00%</td>
                                </tr>
                                <tr>
                                    <td colspan="9"></td>
                                </tr>
                                <tr>
                                    <td rowspan="2" colspan="3"></td>
                                    <td colspan="2"><b>YES</b></td>
                                    <td colspan="2"><b>NO</b></td>
                                    <td colspan="2"><b>UNRESPONSIVE</b></td>
                                </tr>
                                <tr>
                                    <td># OF<br>RESPONDENTS</td>
                                    <td>PERCENTAGE</td>
                                    <td># OF<br>RESPONDENTS</td>
                                    <td>PERCENTAGE</td>
                                    <td># OF<br>RESPONDENTS</td>
                                    <td>PERCENTAGE</td>
                                </tr>
                                <tr>
                                    <td colspan="3">Are you a BGHMC employee?</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td colspan="3">Are you satisfied with the services received?</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                </div>
            </div>
        </div>




        {{-- 2nd PAGE
        //////////////////////////////
        //////////////////////////////
        //////////////////////////////
        //////////////////////////////
        //////////////////////////////
        //////////////////////////////
        //////////////////////////////
        //////////////////////////////
        //////////////////////////////
        //////////////////////////////
        //////////////////////////////
        //////////////////////////////
        //////////////////////////////
        //////////////////////////////
        //////////////////////////////
        --}}

        <div class="flex-center position-ref full-height" align="center">
            <div id="tablesize">
                <table class="table-bordered" style="width: 95%">
                    <tr>
                        <td rowspan="4" align="center">
                            <img src="{{ asset('/image/bghmc.png') }}" width="150px" height="150px">
                        </td>
                        <td colspan="3">
                            <center>Republic of the Philippines<br>Department if Health<br>BAGUIO GENERAL HOSPITAL AND MEDICAL CENTER<br>Baguio City</center>
                        </td>
                    </tr>
                    <tr>
                        <td rowspan="3">
                            <center><strong><b>GENERAL SUMMARY OF CLIENT<br>RESPONSE</b></strong></center>
                        </td>
                        <td>
                            Form No:
                        </td>
                        <td>
                            HS-CCRU
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Revision No.
                        </td>
                        <td>
                            0
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Effectivity
                        </td>
                        <td>
                            1-Aug-14
                        </td>
                    </tr>
                </table>
                <br>
                <div class="row">
                    <div class="col-sm-4">Department/Section:</div>
                    <div class="col-sm-4">Management Information Section</div>
                    <div class="col-sm-4">Total Number of Respondent: 12</div>
                    
                    <div class="col-sm-4">Perion Covered:</div>
                    <div class="col-sm-4">March 01, 2019 to November March 31, 2019</div>
                    <div class="col-sm-4">External: 0</div>
                    
                    <div class="col-sm-4">Total Clients for the Period:</div>
                    <div class="col-sm-4"></div>
                    <div class="col-sm-4">Internal: 12</div>

                    <div class="col-sm-12"><strong><h3>COMMENTS AND SUGGESTIONS:</h3></strong></div>


                    <div class="col-sm-12">
                        <table class="table-borderless" style="width: 95%; margin-bottom: 200px">
                            <tr>
                                <td>
                                    <h4><b>COMMENTS/SUGGESTIONS:</b></h4>
                                </td>
                                <td>
                                    <h4>

                                    </h4>
                                </td>
                            </tr>
                        </table>
                    </div>

                </div>

                
            </div>
        </div>
    </body>
</html>