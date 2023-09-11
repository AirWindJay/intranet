@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-sm-12 d-print-none mb-5">
        <button class="btn btn-info" onclick="window.print()">PRINT</button>
    </div>
    <div class="col-sm-12">
        <table style="width: 95%; margin:auto">
            <tr>
                <td rowspan="4" align="center" style="border: 2px solid black;">
                    <img src="{{ asset('/image/bghmc.png') }}" width="150px" height="150px">
                </td>
                <td colspan="3">
                    <center>
                        Republic of the Philippines<br>Department of Health<br>BAGUIO GENERAL HOSPITAL AND MEDICAL CENTER<br>Baguio City
                    </center>
                </td>
            </tr>
            <tr>
                <td rowspan="3">
                    <h3><center><b>GENERAL SUMMARY OF CLIENT<br>RESPONSE</b></center></h3>
                </td>
                <td>
                    Form No.:
                </td>
                <td>
                    HS-CCRU -
                </td>
            </tr>
            <tr>
                <td>
                    Revision No.:
                </td>
                <td align="right">
                    0
                </td>
            </tr>
            <tr>
                <td>
                    Effectivity
                </td>
                <td align="right">
                    1-Aug-14
                </td>
            </tr>
        </table>
    </div>
    <div class="col-sm-4">
        Department/Section:
    </div>
    <div class="col-sm-4" align="center">
        {{$data[84]->result1}}
        {{-- LOCATION OF UNIT OF CSAT --}}
    </div>
    <div class="col-sm-4" align="right">
        Total Number of Respondent: {{$data[0]->result1}}
    </div>
    <div class="col-sm-4">
        Period Covered:
    </div>
    <div class="col-sm-4" align="center">
        {{$month}} {{$year}}
    </div>
    <div class="col-sm-4" align="right">
        External: @php $i = $data[0]->result1 - $data[82]->result1; @endphp {{$i}}
    </div>
    <div class="col-sm-8">
        Total Clients for the Period: 
    </div>
    <div class="col-sm-4" align="right">
        Internal: @php $x = $data[0]->result1 - $i @endphp {{$x}}
    </div>
    
    <div class="col-sm-12 mt-3">
        <b>B. Internal Customer Satisfaction Survey Result:</b>
    </div>

    
    <div class="col-sm-12 mt-3" align="center">
        <b>Table 1: Purpose of Visit/Transact</b>
    </div>

    <div class="col-sm-12">
        <table style="width: 95%; margin:auto">
            <tr>
                <td rowspan="2" align="center">
                    <b>What is the purpose of your<br>visit/transaction</b>
                </td>
                <td rowspan="2" align="center">
                    <b># OF RESPONDENTS</b>
                </td>
                <td rowspan="2" align="center">
                    <b>PERCENTAGE</b>
                </td>
                <td colspan="5" align="center">
                    <b>WAITING TIME</b>
                </td>
            </tr>
            <tr>
                <td>
                    Minute/s
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
            <tr>
                <td>
                    Patient Medical Treatment
                </td>
                <td align="center">{{$data[1]->result1}}</td>
                <td align="center">@php $i = ($data[1]->result1/$data[0]->result1)*100 @endphp {{$i}}%</td>
                <td align="center">{{$data[2]->result1}}</td>
                <td align="center">{{$data[3]->result1}}</td>
                <td align="center">{{$data[4]->result1}}</td>
                <td align="center">{{$data[5]->result1}}</td>
                <td align="center">{{$data[6]->result1}}</td>
            </tr>
            <tr>
                <td>
                    Submit report/documents
                </td>
                <td align="center">{{$data[7]->result1}}</td>
                <td align="center">@php $i = ($data[7]->result1/$data[0]->result1)*100 @endphp {{$i}}%</td>
                <td align="center">{{$data[8]->result1}}</td>
                <td align="center">{{$data[9]->result1}}</td>
                <td align="center">{{$data[10]->result1}}</td>
                <td align="center">{{$data[11]->result1}}</td>
                <td align="center">{{$data[12]->result1}}</td>
            </tr>
            <tr>
                <td>
                    Inquire, request data/documents
                </td>
                <td align="center">{{$data[13]->result1}}</td>
                <td align="center">@php $i = ($data[13]->result1/$data[0]->result1)*100 @endphp {{$i}}%</td>
                <td align="center">{{$data[14]->result1}}</td>
                <td align="center">{{$data[15]->result1}}</td>
                <td align="center">{{$data[16]->result1}}</td>
                <td align="center">{{$data[17]->result1}}</td>
                <td align="center">{{$data[18]->result1}}</td>
            </tr>
            <tr>
                <td>
                    Seek technical assistance
                </td>
                <td align="center">{{$data[19]->result1}}</td>
                <td align="center">@php $i = ($data[19]->result1/$data[0]->result1)*100 @endphp {{$i}}%</td>
                <td align="center">{{$data[20]->result1}}</td>
                <td align="center">{{$data[21]->result1}}</td>
                <td align="center">{{$data[22]->result1}}</td>
                <td align="center">{{$data[23]->result1}}</td>
                <td align="center">{{$data[24]->result1}}</td>
            </tr>
            <tr>
                <td>
                    Interview, research
                </td>
                <td align="center">{{$data[25]->result1}}</td>
                <td align="center">@php $i = ($data[25]->result1/$data[0]->result1)*100 @endphp {{$i}}%</td>
                <td align="center">{{$data[26]->result1}}</td>
                <td align="center">{{$data[27]->result1}}</td>
                <td align="center">{{$data[28]->result1}}</td>
                <td align="center">{{$data[29]->result1}}</td>
                <td align="center">{{$data[30]->result1}}</td>
            </tr>
            <tr>
                <td>
                    Follow-up documents
                </td>
                <td align="center">{{$data[31]->result1}}</td>
                <td align="center">@php $i = ($data[31]->result1/$data[0]->result1)*100 @endphp {{$i}}%</td>
                <td align="center">{{$data[32]->result1}}</td>
                <td align="center">{{$data[33]->result1}}</td>
                <td align="center">{{$data[34]->result1}}</td>
                <td align="center">{{$data[35]->result1}}</td>
                <td align="center">{{$data[36]->result1}}</td>
            </tr>
            <tr>
                <td>
                    Apply for Certificate/Authentication
                </td>
                <td align="center">{{$data[43]->result1}}</td>
                <td align="center">@php $i = ($data[43]->result1/$data[0]->result1)*100 @endphp {{$i}}%</td>
                <td align="center">{{$data[44]->result1}}</td>
                <td align="center">{{$data[45]->result1}}</td>
                <td align="center">{{$data[46]->result1}}</td>
                <td align="center">{{$data[47]->result1}}</td>
                <td align="center">{{$data[48]->result1}}</td>
            </tr>
            <tr>
                <td>
                    Others
                </td>
                <td align="center">{{$data[55]->result1}}</td>
                <td align="center">@php $i = ($data[55]->result1/$data[0]->result1)*100 @endphp {{$i}}%</td>
                <td align="center">{{$data[56]->result1}}</td>
                <td align="center">{{$data[57]->result1}}</td>
                <td align="center">{{$data[58]->result1}}</td>
                <td align="center">{{$data[59]->result1}}</td>
                <td align="center">{{$data[60]->result1}}</td>
            </tr>
            <tr>
                <td>
                    Unresponsive
                </td>
                <td align="center">@php $i = 
                    $data[0]->result1-($data[1]->result1+$data[7]->result1+$data[13]->result1+$data[19]->result1+$data[25]->result1+$data[31]->result1+$data[43]->result1+$data[55]->result1) 
                @endphp {{$i}}</td>
                <td align="center">@php $r = ($i/$data[0]->result1)*100 @endphp {{$r}}%</td>
                <td colspan="5" align="center">@php $i = 
                    $data[0]->result1-($data[2]->result1+$data[3]->result1+$data[4]->result1+$data[5]->result1+$data[6]->result1+$data[8]->result1+$data[9]->result1+$data[10]->result1+$data[11]->result1+$data[12]->result1+$data[20]->result1+$data[21]->result1+$data[23]->result1+$data[24]->result1+$data[26]->result1+$data[27]->result1+$data[28]->result1+$data[29]->result1+$data[30]->result1+$data[32]->result1+$data[33]->result1+$data[34]->result1+$data[35]->result1+$data[36]->result1+$data[44]->result1+$data[45]->result1+$data[46]->result1+$data[47]->result1+$data[48]->result1+$data[56]->result1+$data[57]->result1+$data[58]->result1+$data[59]->result1+$data[60]->result1) 
                @endphp {{$i}}</td>
            </tr>
        </table>
    </div>

    <div class="col-sm-12 mt-3" align="center">
        <b>Table 2: Satisfactory Rating</b>
    </div>

    <div class="col-sm-12">
        <table style="width: 95%; margin:auto">
            <tr>
                <td>
                    <h5><center><b>DESCRIPTION</b></center></h3>
                </td>
                <td colspan="2">
                    <h5><center><b>STRONGLY<br>AGREE+AGREE</br></center></h3>
                </td>
                <td colspan="4">
                        <h5><center><b>STRONGLY<br>DISAGREE+DISAGREE</br></center></h5>
                </td>
                <td colspan="2">
                    <h5><center><b>UNRESPONSIVE</b></center></h5>
                </td>
            </tr>
            <tr>
                <td></td>
                <td align="center">
                    # OF RESPONDENTS
                </td>
                <td align="center">
                    PERCENTAGE
                </td>
                <td colspan="2" align="center">
                    # OF RESPONDENTS
                </td>
                <td colspan="2" align="center">
                    PERCENTAGE
                </td>
                <td colspan="2" align="center">
                    # OF RESPONDENTS
                </td>
            </tr>
            <tr>
                <td>
                Received the appropriate services
                </td>
                <td align="center">{{$data[61]->result1}}</td>
                <td align="center">@php $i = ($data[61]->result1/($data[61]->result1 + $data[62]->result1))*100 @endphp {{$i}}%</td>
                <td colspan="2" align="center">{{$data[62]->result1}}</td>
                <td colspan="2" align="center">@php $i = ($data[62]->result1/($data[61]->result1 + $data[62]->result1))*100 @endphp {{$i}}%</td>
                <td colspan="2" align="center">{{$data[63]->result1}}</td>
            </tr>
            <tr>
                <td>
                    Timely response was given
                </td>
                <td align="center">{{$data[64]->result1}}</td>
                <td align="center">@php $i = ($data[64]->result1/($data[64]->result1 - $data[65]->result1))*100 @endphp {{$i}}%</td>
                <td colspan="2" align="center">{{$data[65]->result1}}</td>
                <td colspan="2" align="center">@php $i = ($data[65]->result1/($data[64]->result1 - $data[65]->result1))*100 @endphp {{$i}}%</td>
                <td colspan="2" align="center">{{$data[66]->result1}}</td>
            </tr>
            <tr>
                <td>
                    Staff was well informed
                </td>
                <td align="center">{{$data[67]->result1}}</td>
                <td align="center">@php $i = ($data[67]->result1/($data[67]->result1 + $data[68]->result1))*100 @endphp {{$i}}%</td>
                <td colspan="2" align="center">{{$data[68]->result1}}</td>
                <td colspan="2" align="center">@php $i = ($data[68]->result1/($data[67]->result1 + $data[68]->result1))*100 @endphp {{$i}}%</td>
                <td colspan="2" align="center">{{$data[69]->result1}}</td>
            </tr>
            <tr>
                <td>
                    Staff was courteous/approachable
                </td>
                <td align="center">{{$data[70]->result1}}</td>
                <td align="center">@php $i = ($data[70]->result1/($data[70]->result1 + $data[71]->result1))*100 @endphp {{$i}}%</td>
                <td colspan="2" align="center">{{$data[71]->result1}}</td>
                <td colspan="2" align="center">@php $i = ($data[71]->result1/($data[70]->result1 + $data[71]->result1))*100 @endphp {{$i}}%</td>
                <td colspan="2" align="center">{{$data[72]->result1}}</td>
            </tr>
            <tr>
                <td>
                    Services rendered were just & fair
                </td>
                <td align="center">{{$data[73]->result1}}</td>
                <td align="center">@php $i = ($data[73]->result1/($data[73]->result1 + $data[74]->result1))*100 @endphp {{$i}}%</td>
                <td colspan="2" align="center">{{$data[74]->result1}}</td>
                <td colspan="2" align="center">@php $i = ($data[74]->result1/($data[73]->result1 + $data[74]->result1))*100 @endphp {{$i}}%</td>
                <td colspan="2" align="center">{{$data[75]->result1}}</td>
            </tr>
            <tr>
                <td>
                    Workplace was clean & organized
                </td>
                <td align="center">{{$data[76]->result1}}</td>
                <td align="center">@php $i = ($data[76]->result1/($data[76]->result1 + $data[77]->result1))*100 @endphp {{$i}}%</td>
                <td colspan="2" align="center">{{$data[77]->result1}}</td>
                <td colspan="2" align="center">@php $i = ($data[77]->result1/($data[76]->result1 + $data[77]->result1))*100 @endphp {{$i}}%</td>
                <td colspan="2" align="center">{{$data[78]->result1}}</td>
            </tr>
            <tr>
                <td>
                    Restroom was clean
                </td>
                <td align="center">{{$data[79]->result1}}</td>
                <td align="center">@php $i = ($data[79]->result1/($data[79]->result1 + $data[80]->result1))*100 @endphp {{$i}}%</td>
                <td colspan="2" align="center">{{$data[80]->result1}}</td>
                <td colspan="2" align="center">@php $i = ($data[80]->result1/($data[79]->result1 + $data[80]->result1))*100 @endphp {{$i}}%</td>
                <td colspan="2" align="center">{{$data[81]->result1}}</td>
            </tr>
            <tr>
                <td>
                    Sub Total Average Rating
                </td>
                <td align="center">@php $si1 = ($data[61]->result1 + $data[64]->result1 + $data[67]->result1 + $data[70]->result1 + $data[73]->result1 + $data[76]->result1 + $data[79]->result1)/7 @endphp {{$si1}}</td>
                <td align="center">@php $fi1 = ($si1/($si1+(($data[62]->result1 + $data[65]->result1 + $data[68]->result1 + $data[71]->result1 + $data[74]->result1 + $data[77]->result1 + $data[80]->result1)/7)))*100 @endphp {{$fi1}}%</td>
                <td colspan="2" align="center">@php $si2 = ($data[62]->result1 + $data[65]->result1 + $data[68]->result1 + $data[71]->result1 + $data[74]->result1 + $data[77]->result1 + $data[80]->result1)/7 @endphp {{$si2}}</td>
                <td colspan="2" align="center">@php $fi2 = ($si2/($si1+$si2))*100 @endphp {{$fi2}}%</td>
                <td colspan="2" align="center"></td>
            </tr>
            <tr>
                <td align="center"></td>
                <td colspan="2" align="center"><b>Strongly Agree + Agree</b></td>
                <td align="center"><b>{{$fi1}}%</b></td>
                <td colspan="4" align="center"><b>Disagree + Strongly Disagree</b></td>
                <td align="center"><b>{{$fi2}}%</b></td>
            </tr>
            <tr>
                <td>
                    <b>Total Average Rating</b>
                </td>
                <td colspan="8" align="right">
                    <b>{{$fi1}}%</b>
                </td>
            </tr>
            <tr>
                <td colspan="9"><b><p> </p></b></td>
            </tr>
            <tr>
                <td colspan="3" rowspan="2">
                </td>
                <td align="center" colspan="2">
                    <b>YES</b>
                </td>
                <td align="center" colspan="2">
                    <b>NO</b>
                </td>
                <td align="center" colspan="2">
                    <b>UNRESPONSIVE</b>
                </td>
            </tr>
            <tr>
                <td>
                    # OF RESPONDENTS
                </td>
                <td>
                    PERCENTAGE
                </td>
                <td>
                    # OF RESPONDENTS
                </td>
                <td>
                    PERCENTAGE
                </td>
                <td>
                    # OF RESPONDENTS
                </td>
                <td>
                    PERCENTAGE
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    Are you a BGHMC employee?
                </td>
                <td align="center">{{$data[82]->result1}}</td>
                <td align="center">@php $i = ($data[82]->result1/$data[0]->result1)*100 @endphp {{$i}}%</td>
                <td align="center">{{$data[85]->result1}}</td>
                <td align="center">@php $i = ($data[85]->result1/$data[0]->result1)*100 @endphp {{$i}}%</td>
                <td align="center">@php $i = $data[0]->result1-($data[82]->result1+$data[85]->result1) @endphp {{$i}}</td>
                <td align="center">@php $li1 = ($i/$data[0]->result1)*100 @endphp {{$li1}}%</td>
            </tr>
            <tr>
                <td colspan="3">
                    Are you satisfied with the services received?
                </td>
                <td align="center">{{$data[83]->result1}}</td>
                <td align="center">@php $i = ($data[83]->result1/$data[0]->result1)*100 @endphp {{$i}}%</td>
                <td align="center">{{$data[86]->result1}}</td>
                <td align="center">@php $i = ($data[86]->result1/$data[0]->result1)*100 @endphp {{$i}}%</td>
                <td align="center">@php $i = $data[0]->result1-($data[83]->result1+$data[86]->result1) @endphp {{$i}}</td>
                <td align="center">@php $li1 = ($i/$data[0]->result1)*100 @endphp {{$li1}}%</td>
            </tr>
        </table>
    </div>
    <div class="col-sm-12" style="margin-bottom: 100px">
            <br><br><br><br><br><br><br><br><br><br><br>
    </div>
    
    <div class="col-sm-12">
        <table style="width: 95%; margin:auto">
            <tr>
                <td rowspan="4" align="center" style="border: 2px solid black;">
                    <img src="{{ asset('/image/bghmc.png') }}" width="150px" height="150px">
                </td>
                <td colspan="3">
                    <center>
                        Republic of the Philippines<br>Department of Health<br>BAGUIO GENERAL HOSPITAL AND MEDICAL CENTER<br>Baguio City
                    </center>
                </td>
            </tr>
            <tr>
                <td rowspan="3">
                    <h3><center><b>GENERAL SUMMARY OF CLIENT<br>RESPONSE</b></center></h3>
                </td>
                <td>
                    Form No.:
                </td>
                <td>
                    HS-CCRU -
                </td>
            </tr>
            <tr>
                <td>
                    Revision No.:
                </td>
                <td align="right">
                    0
                </td>
            </tr>
            <tr>
                <td>
                    Effectivity
                </td>
                <td align="right">
                    1-Aug-14
                </td>
            </tr>
        </table>
    </div>
    <div class="col-sm-4">
        Department/Section:
    </div>
    <div class="col-sm-4" align="center">
        {{$data[84]->result1}}
        {{-- LOCATION OF UNIT OF CSAT --}}
    </div>
    <div class="col-sm-4" align="right">
        Total Number of Respondent: {{$data[0]->result1}}
    </div>
    <div class="col-sm-4">
        Period Covered:
    </div>
    <div class="col-sm-4" align="center">
        {{$month}} {{$year}}
    </div>
    <div class="col-sm-4" align="right">
        External: @php $i = $data[0]->result1 - $data[82]->result1; @endphp {{$i}}
    </div>
    <div class="col-sm-8">
        Total Clients for the Period: 
    </div>
    <div class="col-sm-4" align="right">
        Internal: @php $x = $data[0]->result1 - $i @endphp {{$x}}
    </div>
    
    <div class="col-sm-12 mt-3 mb-3" align="center">
        <b>COMMENTS AND SUGGESTIONS</b>
    </div>
    <div class="col-sm-12 mt-5 mb-5">
        <b>POSITIVE COMMENTS/SUGGESTIONS:</b><br>
        @foreach ($pos as $po)
            *{{$po->comment}}<br>
        @endforeach
    </div>
    <div class="col-sm-12 mt-5 mb-5">
        <b>NEGATIVE COMMENTS/SUGGESTIONS:</b><br>
        @foreach ($neg as $ne)
            *{{$ne->comment}}<br>
        @endforeach
    </div>
    <div class="col-sm-6 mt-5">
        Prepared by:
    </div>
    <div class="col-sm-6 mt-5">
        Noted by:
    </div>
    <div class="col-sm-6" align="center">
        <b><u>MARIA MAGDALENA S. DAWAWONG</u></b><br>Librarian 1<br>Quality Assurance Office
    </div>
    <div class="col-sm-6" align="center">
        <b><u>FERDINAND P. GANGGANGAN, MD</u></b><br>Quality Assurance Officer<br>Quality Assurance Office
    </div>
</div>
@endsection

@section('style')
<style type="text/css">
    table, th, td {
        border: 2px solid black;
    }
</style>
@endsection
