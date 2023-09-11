@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h1>Per Encounter Type</h1>
                </div>
                <div class="card-body">
                    <form action="/PatientCounter/index/generate" method="POST" enctype="multipart/form-data">
                        @csrf
                        <label for="type">SELECT TYPE: </label>
                        <select name="type" id="type" class="form-control">
                            <option value="OPD">Out Patient</option>
                            <option value="ER">Emergency Room</option>
                            <option value="ADM">In Patient</option>
                        </select>
                        <hr>
                        <label for="date">SELECT DATE: </label>
                        <input type="date" name="date" id="date" class="form-control">
                        
                        <button class="btn btn-success" type="submit">GENERATE PATIENT COUNT</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <h3 style="background-color: grey; color: white">PATIENT COUNT: {{$patcount}}</h3>
        </div>

         
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h1>Per Department</h1>
                </div>
                <div class="card-body">
                    <form action="/PatientCounter/index/generatedept" method="POST" enctype="multipart/form-data">
                        @csrf
                        <label for="dept">SELECT TYPE: </label>
                        <select name="dept" id="dept" class="form-control mt-2 mb-2">
                            <option value="ABTC">ABTC</option>
                            <option value="ADVISORY BOARD">ADVISORY BOARD</option>
                            <option value="AMBULATORY CARE">AMBULATORY CARE</option>
                            <option value="CHEMOTHERAPY">CHEMOTHERAPY</option>
                            <option value="DENTAL">DENTAL</option>
                            <option value="DIAGNOSTIC CENTER">DIAGNOSTIC CENTER</option>
                            <option value="DRUG REHAB">DRUG REHAB</option>
                            <option value="DSWD">DSWD</option>
                            <option value="ED-CORNEA">ED-CORNEA</option>
                            <option value="EMPLOYEE HEALTH SERVICE">EMPLOYEE HEALTH SERVICE</option>
                            <option value="ENT ENDOSCOPY">ENT ENDOSCOPY</option>
                            <option value="ENT ONCO">ENT ONCO</option>
                            <option value="ENT PAY">ENT PAY</option>
                            <option value="ENT PEDIATRIC">ENT PEDIATRIC</option>
                            <option value="ENT-HNS">ENT-HNS</option>
                            <option value="FAMILY MEDICINE">FAMILY MEDICINE</option>
                            <option value="FAMILY PLANNING">FAMILY PLANNING</option>
                            <option value="GLAUCOMA">GLAUCOMA</option>
                            <option value="GYNE ONCO">GYNE ONCO</option>
                            <option value="GYNECOLOGY">GYNECOLOGY</option>
                            <option value="HEAD, NECK SURGERY">HEAD, NECK SURGERY</option>
                            <option value="HEMODIALYSIS">HEMODIALYSIS</option>
                            <option value="INDUSTRIAL CLINIC">INDUSTRIAL CLINIC</option>
                            <option value="INTEGRATIVE CLINIC">INTEGRATIVE CLINIC</option>
                            <option value="LARYNGOLOGY BRONCHOESOPHALOGY">LARYNGOLOGY BRONCHOESOPHALOGY</option>
                            <option value="MAIP">MAIP</option>
                            <option value="MALASAKIT CENTER">MALASAKIT CENTER</option>
                            <option value="MAXILLOFACIAL PLASTICS & RECON">MAXILLOFACIAL PLASTICS & RECON</option>
                            <option value="MED. SENIOR">MED. SENIOR</option>
                            <option value="MEDICAL ASSISTANCE PROGRAM">MEDICAL ASSISTANCE PROGRAM</option>
                            <option value="MEDICAL SOCIAL WORKER OFFICE">MEDICAL SOCIAL WORKER OFFICE</option>
                            <option value="MEDICINE">MEDICINE</option>
                            <option value="MEDICINE - CARDIO">MEDICINE - CARDIO</option>
                            <option value="MEDICINE - CONTINUITY">MEDICINE - CONTINUITY</option>
                            <option value="MEDICINE - DIABETOLOGY">MEDICINE - DIABETOLOGY</option>
                            <option value="MEDICINE - GASTROENTEROLOGY">MEDICINE - GASTROENTEROLOGY</option>
                            <option value="MEDICINE - HEMA ONCO">MEDICINE - HEMA ONCO</option>
                            <option value="MEDICINE - IDS">MEDICINE - IDS</option>
                            <option value="MEDICINE - NEPHRO">MEDICINE - NEPHRO</option>
                            <option value="MEDICINE - PULMO">MEDICINE - PULMO</option>
                            <option value="MEDICINE - RHUMA">MEDICINE - RHUMA</option>
                            <option value="MEDICINE - NEUROSCIENCE">NEUROSCIENCE</option>
                            <option value="OB HIGH RISK">OB HIGH RISK</option>
                            <option value="OB ONCO">OB ONCO</option>
                            <option value="OB REI">OB REI</option>
                            <option value="OBSTETRICS">OBSTETRICS</option>
                            <option value="OCCUPATIONAL THERAPY">OCCUPATIONAL THERAPY</option>
                            <option value="OPHTHALMOLOGY">OPHTHALMOLOGY</option>
                            <option value="OPTHA PEDIATRIC">OPTHA PEDIATRIC</option>
                            <option value="ORBIT/PLASTIC">ORBIT/PLASTIC</option>
                            <option value="ORTHO ADULT">ORTHO ADULT</option>
                            <option value="ORTHO HAND">ORTHO HAND</option>
                            <option value="ORTHO ONCO">ORTHO ONCO</option>
                            <option value="ORTHO PEDIA">ORTHO PEDIA</option>
                            <option value="ORTHO SPINE">ORTHO SPINE</option>
                            <option value="ORTHO TRAUMA">ORTHO TRAUMA</option>
                            <option value="ORTHOPEDICS">ORTHOPEDICS</option>
                            <option value="ORTHOPEDICS PAY">ORTHOPEDICS PAY</option>
                            <option value="OTOLOGY, AUDIOLOGY,NEUROTOLOGY">OTOLOGY, AUDIOLOGY,NEUROTOLOGY</option>
                            <option value="PAIN CLINIC/ANESTHESIA">PAIN CLINIC/ANESTHESIA</option>
                            <option value="PCSO">PCSO</option>
                            <option value="PED NEPHRO">PED NEPHRO</option>
                            <option value="PED SURGERY">PED SURGERY</option>
                            <option value="PEDIA - ADOLESCENT">PEDIA - ADOLESCENT</option>
                            <option value="PEDIA - ALLERGOLOGY">PEDIA - ALLERGOLOGY</option>
                            <option value="PEDIA - CARDIO">PEDIA - CARDIO</option>
                            <option value="PEDIA - DEVELOPMENTAL">PEDIA - DEVELOPMENTAL</option>
                            <option value="PEDIA - ENDO">PEDIA - ENDO</option>
                            <option value="PEDIA - GASTRO">PEDIA - GASTRO</option>
                            <option value="PEDIA - NEUROLOGY">PEDIA - NEUROLOGY</option>
                            <option value="PEDIA - PNCU">PEDIA - PNCU</option>
                            <option value="PEDIA - PULMONOLOGY">PEDIA - PULMONOLOGY</option>
                            <option value="PEDIA - RHEUMATOLOGY">PEDIA - RHEUMATOLOGY</option>
                            <option value="PEDIA HEMA ONCO">PEDIA HEMA ONCO</option>
                            <option value="PEDIATRICS">PEDIATRICS</option>
                            <option value="PHILHEALTH">PHILHEALTH</option>
                            <option value="PHYSICAL THERAPY">PHYSICAL THERAPY</option>
                            <option value="PHYSICAL THERAPY CHECK-UP">PHYSICAL THERAPY CHECK-UP</option>
                            <option value="PLASTIC SURGERY">PLASTIC SURGERY</option>
                            <option value="PSYCHIATRY">PSYCHIATRY</option>
                            <option value="RADIOLOGY">RADIOLOGY</option>
                            <option value="RADIOLOGY ONCO">RADIOLOGY ONCO</option>
                            <option value="RADIOTHERAPY">RADIOTHERAPY</option>
                            <option value="RETINA">RETINA</option>
                            <option value="RHINOLOGY, ALLERGY & SLEEP">RHINOLOGY, ALLERGY & SLEEP</option>
                            <option value="SURGERY">SURGERY</option>
                            <option value="SURGERY - NEURO">SURGERY - NEURO</option>
                            <option value="SURGERY ONCO">SURGERY ONCO</option>
                            <option value="TB DOTS">TB DOTS</option>
                            <option value="TCVS">TCVS</option>
                            <option value="TEEN PARENT CLINIC">TEEN PARENT CLINIC</option>
                            <option value="TREATMENT ROOM">TREATMENT ROOM"</option>
                            <option value="UNDER FIVE - S">UNDER FIVE - S</option>
                            <option value="UNDER FIVE - W">UNDER FIVE - W</option>
                            <option value="URO SURGERY">URO SURGERY</option>
                            <option value="VASCULAR">VASCULAR</option>
                            <option value="WCPU">WCPU</option>
                            <option value="WELL BABY">WELL BABY</option>
                        </select>
                        <hr>
                        <label for="date">SELECT DATE: </label>
                        <input type="date" name="date" id="date" class="form-control">
                        
                        <button class="btn btn-success" type="submit">GENERATE PATIENT COUNT</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <h3 style="background-color: grey; color: white">PATIENT COUNT: {{$patcount}}</h3>
        </div>
    </div>
@endsection