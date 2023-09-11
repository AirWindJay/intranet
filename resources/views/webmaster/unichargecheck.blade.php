@extends('layouts.adminlayout')

@section('content')
    <h1 align="center" style="font-family:georgia"><b>UNIVERSAL CHARGING<b></h1>
    <div class="container">
        <div class="col-md-12 mb-5">
            <form action="/webmaster/unichargechecker/check" method="POST" enctype="multipart/form-data">
                @csrf
                <select name="chargetable" id="chargetable" class="form-control">
                    <option value="TBDOTS">TBDOTS</option>
                    <option value="FPPCK">FAMPLAN</option>
                    <option value="OBPRO">OB Ultrasound</option>
                    <option value="ABTC">Animal Bite</option>
                    <option value="CHEMO">Chemo (Cancer Institure)</option>
                    <option value="CANCR">Cancer Center</option>
                    <option value="ONCO">ONCO /Cancer</option>
                    <option value="DENTA">DENTAL</option>
                    <option value="Ward">OB West DR IMU</option>
                    <option value="EEG">EEG</option>
                    <option value="EGD">EGD</option>
                    <option value="PT">PT</option>
                    <option value="OBDR">OB MAIN</option>
                    <option value="OBDR">OBDR</option>
                    <option value="PNCU">PNCU</option>
                    <option value="PULMO">PULMO</option>
                    <option value="RR">Recovery Room</option>
                    <option value="OR">Operating Room</option>
                    <option value="HEMO">HEMODIALYSIS</option>
                    <option value="HEMA">HEMATHOLOGY PEDIA</option>
                    <option value="OPD">OPD</option>
                    <option value="MEDR">Medical Record</option>
                    <option value="DENT">Dental</option>
                    <option value="ECG">ECG</option>
                    <option value="UFC">Under Five Clinic</option>
                    <option value="GEN">GEN-XRAY-CTSCAN</option>
                    <option value="INFO">GEN-INFO</option>
                    <option value="XRAY">XRAY</option>
                    <option value="CTSCAN">CTSCAN</option>
                </select>
                <button type="submit" class="btn btn-success">Generate Charges</button>
            </form>
        </div>
    </div>
@endsection

@section('style')
    
@endsection

@section('script')
    
@endsection