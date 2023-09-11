@extends('layouts.app')

@section('content')

<script>
    function goBack() {
        window.history.back();
    }
</script>
<button class="btn btn-default" onclick="goBack()">Go Back</button>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="background-color:#33F3FF; font-size:25px;">Mission, Vision, & Quality Policy</div>
                    {{-- 1stpage --}}
                <div id="firstpage">
                    <div class="card-body">
                        <h1 style="color:green; font-family:Helvetica;"><b>VISION<b></h1>
                        <div>
                            <p align="center">“BGHMC is the premier referral center of Northern Luzon offering leading edge specialty services”</p>
                        </div>
                            <hr>

                        <h1 style="color:green; font-family:Helvetica;"><b>MISSION<b></h1>
                        <div>
                            <p align="center">“We continuously innovate our services, offer comprehensive training programs and<br>ngage in research for better health outcomes of the clients that we serve”</p>
                        </div>
                            <hr>

                        <h1 style="color:green; font-family:Helvetica;"><b>STRATEGIC FOCUS:<b></h1>
                        <div>
                            <div style="margin-left:30%;">
                                <p>Equip ourselves as the leader of service delivery network for health.
                                <br>Patient centered care Health Education and Promotion.</p>
                            </div>
                        </div>
                            <hr>

                        <h1 style="color:green; font-family:Helvetica;"><b>FINANCE<b></h1>
                        <div>
                            <div style="margin-left:30%;">
                                <p>√ Financial Risk Protection
                                <br>√ Financial Sustainability</p>
                            </div>
                        </div>
                            <hr>
                        
                        <h1 style="color:green; font-family:Helvetica;"><b>TRAINING AND RESEARCH<b></h1>
                        <div>
                            <div style="margin-left:30%;">
                                <p>√ Competency
                                <br>√ Capability Building
                                <br>√ Excellent Research Program</p>
                            </div>
                        </div>
                            <hr>

                        <h1 style="color:green; font-family:Helvetica;"><b>SERVICE<b></h1>
                        <div>
                            <div style="margin-left:30%;">
                                <p>√ Customer Service Satisfaction
                                <br>√ Patient Safety
                                <br>√ Better Health Outcomes
                                <br>√ Functional IHOMP</p>
                            </div>
                        </div>
                            <hr>

                        <h1 style="color:green; font-family:Helvetica;"><b>GOVERNANCE<b></h1>
                        <div>
                            <div style="margin-left:30%;">
                                <p>√ Consultative and Responsible Leadership
                                <br>√ Compliant to Standards
                                <br>√ Transparent
                                <br>√ Accountable</p>
                            </div>
                        </div>
                            <hr>

                        <h1 style="color:green; font-family:Helvetica;"><b>QUALITY OBJECTIVES:<b></h1>
                        <div>
                            <p align="center">To achieve better health outcomes. To attain 92% client satisfaction rating.</p>
                        </div>
                            <hr>

                        <h1 style="color:green; font-family:Helvetica;"><b>CORE VALUES:<b></h1>
                        <div>
                            <div style="margin-left:30%;">
                                <p>Excellence
                                <br>Compassion
                                <br>Competence
                                <br>Integrity
                                <br>Teamwork
                                <br>Transformational Leadership</p>
                            </div>
                        </div>
                            <hr>

                        <h1 style="color:green; font-family:Helvetica;"><b>QUALITY POLICY:<b></h1>
                        <div>
                            <p align="center">We, at the Baguio General Hospital and Medical Center commit to:</p>
                            <div style="margin-left:30%;">
                                <p>deliver quality health care to our clients;
                                <br>engage in ethical corporate practices to enhance quality standards of healthcare in compliance to statutory and regulatory requirements;
                                <br>implement a quality management system and continually improve its effectiveness through sound and responsive managerial leadership;
                                <br>enhance human resource capability and adapt institutional best practices;
                                <br>implement a functional Integrated Hospital Operation and Management Program (IHOMP);
                                <br>practice a culture of transparency and accountability</p>
                            </div>
                        </div>
                            <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
