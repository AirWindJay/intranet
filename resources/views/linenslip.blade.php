@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <table class="mt-2" style="width: 100%; text-align: center">
                <tr>
                    <td rowspan="4">
                        <img src="{{ asset('/image/bghmc.png') }}" width="150px" height="150px">
                    </td>
                    <td colspan="3">
                        Republic of the Philippines<br>Department of Health<br><b>BAGUIO GENERAL HOSPITAL AND MEDICAL CENTER</b><br>Baguio City
                    </td>
                </tr>
                <tr>
                    <td rowspan="3">
                        GENERAL SERVICES SECTION - LINEN ROOM<br><h2><b>INVENTORY (LINEN) CUSTODIAN SLIP</b></h2>
                    </td>
                    <td>
                        Form No.:
                    </td>
                    <td>
                        HS - GSS - 008
                    </td>
                </tr>
                <tr>
                    <td>
                        Revision No.:
                    </td>
                    <td>
                        1
                    </td>
                </tr>
                <tr>
                    <td>
                        Effectivity Date:
                    </td>
                    <td>
                        August 1, 2019
                    </td>
                </tr>
            </table>
        </div>
        <div class="col-md-12">
            <table class="mt-3" style="width: 100%; text-align: center">
                <tr>
                    <td>
                        Quantity
                    </td>
                    <td>
                        Unit
                    </td>
                    <td style="width: 35%">
                        Item/Description
                    </td>
                    <td>
                        Amount
                    </td>
                    <td>
                        Date Issued
                    </td>
                    <td>
                        Estimated Useful<br>Life<br>(in years)
                    </td>
                    <td>
                        Remarks
                    </td>
                </tr>
                <tr>
                    <td style="height: 350px"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="3">
                        <div class="row">
                            <div class="col-sm-4">
                                Received by:
                            </div>
                            <div class="col-sm-8">

                            </div>
                            <div class="col-sm-12 mt-3 mb-3">
                                <hr style="border: 1px solid black; border-radius: 5px; width: 35%; margin:auto">
                                Signature Over Printed Name
                            </div>
                            <div class="col-sm-12 mt-3 mb-3">
                                <hr style="border: 1px solid black; border-radius: 5px; width: 35%; margin:auto">
                                Position
                            </div>
                            <div class="col-sm-12 mt-3 mb-3">
                                <hr style="border: 1px solid black; border-radius: 5px; width: 35%; margin:auto">
                                Date
                            </div>
                        </div>
                    </td>
                    <td colspan="4">
                        <div class="row">
                            <div class="col-sm-4">
                                
                                Received from:
                            </div>
                            <div class="col-sm-8">

                            </div>
                            <div class="col-sm-12 mt-3 mb-3">
                                IRMA C. COPA
                            </div>
                            <div class="col-sm-12 mt-3 mb-3">
                                <hr style="border: 1px solid black; border-radius: 5px; width: 35%; margin:auto">
                                Signature Over Printed Name
                            </div>
                            <div class="col-sm-12 mt-3 mb-3">
                                Hospital Housekeeper<hr style="border: 1px solid black; border-radius: 5px; width: 35%; margin:auto">Position
                            </div>
                            <div class="col-sm-12 mt-3 mb-3">
                                <hr style="border: 1px solid black; border-radius: 5px; width: 35%; margin:auto">
                                Date
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </div>
@endsection

@section('style')
    <style>
        @media print{@page {size: landscape}}
        table,tr,td
        {
            border: 1px solid black;
        }
    </style>
@endsection