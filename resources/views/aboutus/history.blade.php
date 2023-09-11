@extends('layouts.app')

@section('content')

<script>
    function goBack() {
        window.history.back();
    }
    function page1(){
	    $('#firstpage').show();
	    $('#secondpage').hide();
	    $('#thirdpage').hide();
	    $('#fourthpage').hide();
    }
    
    function page2(){
	    $('#firstpage').hide();
	    $('#secondpage').show();
	    $('#thirdpage').hide();
	    $('#fourthpage').hide();
    }

    function page3(){
	    $('#firstpage').hide();
	    $('#secondpage').hide();
	    $('#thirdpage').show();
	    $('#fourthpage').hide();
    }

    function page4(){
	    $('#firstpage').hide();
	    $('#secondpage').hide();
	    $('#thirdpage').hide();
	    $('#fourthpage').show();
    }
</script>
<button class="btn btn-default" onclick="goBack()">Go Back</button>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="background-color:#33F3FF; font-size:25px;">History</div>
                <div align="center">
                    <button class="btn btn-primary" onclick="page1()">1</button>
                    <button class="btn btn-primary" onclick="page2()">2</button>
                    <button class="btn btn-primary" onclick="page3()">3</button>
                    <button class="btn btn-primary" onclick="page4()">4</button>
                </div>
                    {{-- 1stpage --}}
                <div id="firstpage">
                    <div class="card-body">
                        <h1 style="color:green; font-family:Helvetica;"><b>HOW WE STARTED…<b></h1>
                        <div align="center">
                            <img style="width:280px;" src="../history/firstpage/1.jpg" alt="">
                            <img style="width:180px;" src="../history/firstpage/2.jpg" alt="">
                        </div>
                        <div>
                            <p align="center">The hospital started as Baguio Sanatorium in February 3, 1902 pioneered by Dr. Eugene Stafford, captain of the staff of General Arthur MacArthur in the 1900’s.</p>
                        </div>
                            <hr>

                        <div align="center">
                            <img style="width:280px;" src="../history/firstpage/3.jpg" alt="">
                        </div>
                        <div>
                            <p align="center">The hospital begun as a convalescent sanatorium in a small grass roofed building at the former side of Pines hotel or the present exact location of Shoemart (SM) today. Dr. Stafford brought with him a nurse, a cook, and an assistant.</p>
                        </div>
                            <hr>

                        <div align="center">
                            <img style="width:280px;" src="../history/firstpage/4.jpg" alt="">
                            <img style="width:280px;" src="../history/firstpage/5.jpg" alt="">
                        </div>
                        <div>
                            <p align="center">Originally, it begun as an 8 bed sanatorium and on March 25, 1902, the construction of a 15 bed capacity hospital consisting of six, three room cottages was build which was manned by American physicians, army nurse, and hospital corpsmen. Dr. JB Thomas was the first chief of hospital back then.</p>
                        </div>
                            <hr>

                        <div align="center">
                            <h3 style="font-family:Helvetica; color:green; text-decoration: underline;">Baguio Hospital</h3>
                            <img style="width:280px;" src="../history/firstpage/6.jpg" alt="">
                        </div>
                        <div>
                            <p align="center">In 1907, the name of the hospital was changed to Baguio Hospital. The facilities were improved with the addition of 2 storey building, a nurses’ home, and 6 cottages for tuberculosis patients.</p>
                        </div>
                            <hr>

                        <h1 style="color:green; font-family:Helvetica;"><b>Chief of Hospital<b></h1>
                        <div align="center">
                            <img style="width:200px;" src="../history/firstpage/7.jpg" alt="">
                            <img style="width:280px;" src="../history/firstpage/8.jpg" alt="">
                        </div>
                        <div>
                            <p align="center">Originally, it begun as an 8 bed sanatorium and on March 25, 1902, the construction of a 15 bed capacity hospital consisting of six, three room cottages was build which was manned by American physicians, army nurse, and hospital corpsmen. Dr. JB Thomas was the first chief of hospital back then.</p>
                        </div>
                    </div>
                </div>
                    {{-- 2ndpage --}}
                <div id="secondpage">
                    <div class="card-body">
                        <div align="center">
                            <img style="width:280px;" src="../history/secondpage/1.jpg" alt="">
                        </div>
                        <div>
                            <p align="center">In 1922, the Congress approved the creation of the Baguio Hospital School of Nursing through the initiative of Dr. Arvisu. In 1933, isolation buildings were constructed with the aid of the Baguio women’s club and local mining companies.</p>
                        </div>
                            <hr>
                        
                        <div align="center">
                            <h3 style="font-family:Helvetica; color:green; text-decoration: underline;">Baguio General Hospital</h3>
                            <img style="width:280px;" src="../history/secondpage/2.jpg" alt="">
                        </div>
                        <div>
                            <p align="center">The name of the hospital was changed to Baguio General Hospital in 1937 and Dr. Esquivel took over as chief of hospital in that same year.</p>
                        </div>
                        
                        <div align="center">
                            <img style="width:280px;" src="../history/secondpage/3.jpg" alt="">
                            <img style="width:180px;" src="../history/secondpage/4.jpg" alt="">
                        </div>
                        <div>
                            <p align="center">In February 22, 1941, the concrete hospital building was inaugurated which was a realized promised of the late President Manuel L. Quezon. He was hospitalized in Baguio Hospital in the year 1922, where he then saw the antiquated equipment and small dilapidated building that made him decide to have a new and spacious concrete building for a hospital.</p>
                        </div>
                            <hr>

                        <div align="center">
                            <h3 style="font-family:Helvetica; color:green; text-decoration: underline;">World War II</h3>
                            <img style="width:280px;" src="../history/secondpage/5.jpg" alt="">
                        </div>
                        <div>
                            <p align="center">In December 29, 1944, as a result of the world war II, the Japanese imperial army took over the hospital for the used of their wounded soldiers. The hospital and school of nursing was then transferred to Saint Louise high school building behind the Baguio Cathedral.<br>The staff continue to served the best they could to attend to patients and operations were performed despite the carpet bombings by the advancing of american forces.</p>
                        </div>
                            <hr>

                        <div align="center">
                            <img style="width:280px;" src="../history/secondpage/6.jpg" alt="">
                        </div>
                        <div>
                            <p align="center">In 1945, due heavy artillery fire and bombing, the hospital was raised to the ground. In May 1945, the hospital rose again and the disbanded personnel of the hospital were recalled by Dr. Esquivel and Miss Francia. The hospital was then reopened temporarily at the Paula Frates, La Salle compound Legarda road.</p>
                        </div>
                            <hr>

                        <div align="center">
                            <img style="width:280px;" src="../history/secondpage/7.jpg" alt="">
                        </div>
                        <div>
                            <p align="center">In September 16, 1945, from the ravages of II world war, the hospital was reconstructed with the aid of USA under the Philippine Rehabilitation Act of 1946 and was completed in 1948.</p>
                        </div> 
                    </div>
                </div>
                    {{-- 3rdpage --}}
                <div id="thirdpage">
                    <div class="card-body">
                        <div align="center">
                            <img style="width:380px;" src="../history/thirdpage/1.jpg" alt="">
                        </div>
                            <hr>
                            
                        <div align="center">
                            <img style="width:280px;" src="../history/thirdpage/2.jpg" alt="">
                            <img style="width:280px;" src="../history/thirdpage/3.jpg" alt="">
                        </div>
                        <div>
                            <p align="center">In 1952 to 1955, to served the patients the Contagious Disease Pavilion was constructed. In 1958, Baguio General Hospital was designated as one of the 11 training and teaching hospitals in the Philippines.</p>
                        </div>
                            <hr>
                        
                        <div align="center">
                            <img style="width:280px;" src="../history/thirdpage/4.jpg" alt="">
                            <img style="width:280px;" src="../history/thirdpage/5.jpg" alt="">
                        </div>
                        <div>
                            <p align="center">In 1961, the hospital received an accreditation from the Philippine Medical Association and the Philippine College of Surgeons. The residency training program for all the branches of medicine started.</p>
                        </div> 
                            <hr>

                        <div align="center">
                            <img style="width:280px;" src="../history/thirdpage/6.jpg" alt="">
                            <img style="width:280px;" src="../history/thirdpage/7.jpg" alt="">
                        </div>
                        <div>
                            <p align="center">In 1962, the concrete building of the out-patient-department was inaugurated followed by the family planning clinic in 1973 and emergency room and x-ray room in 1978. The psychiatric department, family clinic, physiotherapy, braceshop, cancer detection clinic, coronary care unit and underfive clinic were also added to the hospital services being offered to clients from 1966 to 1975.
                                </p>
                        </div>
                    </div>
                </div>
                    {{-- 4thpage --}}
                <div id="fourthpage">
                    <div class="card-body">
                        <div align="center">
                            <h3 style="font-family:Helvetica; color:green; text-decoration: underline;">Baguio General Hospital and Medical Center</h3>
                            <img style="width:280px;" src="../history/fourthpage/1.jpg" alt="">
                        </div>
                        <div>
                            <p align="center">In 1970, Baguio General Hospital was designated as the Medical Center for Northern Luzon and Dr. Efraim C. Montemayor took over as chief of the hospital. In 1981, the name of the hospital was changed to Dr. Efraim C. Montemayor Medical Center in honor to the late chief. However, due to the clamor of the people of Baguio, it was changed to Baguio General Hospital and Medical Center last November 29, 1989.</p>
                        </div>
                            <hr>
                        
                        <div align="center">
                            <h1 style="color:green; font-family:Helvetica;"><b>Chief of Hospital<b></h1>
                        </div>
                        <div align="center">
                                <img style="width:280px;" src="../history/fourthpage/2.jpg" alt="">
                                <img style="width:280px;" src="../history/fourthpage/3.jpg" alt="">
                        </div>
                        <div>
                            <p align="center">In 1970, Baguio General Hospital was designated as the Medical Center for Northern Luzon and Dr. Efraim C. Montemayor took over as chief of the hospital. In 1981, the name of the hospital was changed to Dr. Efraim C. Montemayor Medical Center in honor to the late chief. However, due to the clamor of the people of Baguio, it was changed to Baguio General Hospital and Medical Center last November 29, 1989.</p>
                        </div>
                            <br>
                            
                        <div align="center">
                                <img style="width:280px;" src="../history/fourthpage/4.jpg" alt="">
                        </div>
                        <div>
                            <p align="center">From 1997 to 2013, the chief of Baguio General Hospital and Medical Center was Dr. Manuel V. Factora and was succeeded by Dr. Jimmy F. Cabfit as officer-in-charge, medical center chief from February 2013 to June 2014. He was followed by Dr. Ricardo Runez Jr. who stayed a short time from July to August 2014.</p>
                        </div>
                            <br>
                            
                        <div align="center">
                                <img style="width:280px;" src="../history/fourthpage/5.jpg" alt="">
                                <p align="center">Dr. Emmanuel Acluba<br>2014-2017</p>
                        </div>
                        <div>
                            <p align="center">From 2014 – 2017, Dr. Emmanuel Acluba headed the Baguio General Hospital and Medical Center.</p>
                        </div>
                            <br>
                            
                        <div align="center">
                                <img style="width:280px;" src="../history/fourthpage/6.jpg" alt="">
                                <p align="center">Dr. Ricardo B. Runez<br>2017 to present</p>
                        </div>
                        <div>
                            <p align="center">Presently, Dr. Ricardo B. Runez heads the Baguio General Hospital and Medical Center up to the present.</p>
                        </div>
                            <hr>
                        
                        <div align="center">
                                <img style="width:480px;" src="../history/fourthpage/7.jpg" alt="">
                        </div>
                        <div>
                            <p align="center">In May 7, 1998, Republic Act 8634 was approved increasing bed capacity of BGHMC from 400 to 500 beds. The hospital struggle to better serve the increasing number of patients through the additional buildings, private rooms, operating room complex, out patient department, flavier building, infecteous disease building, and psychiatric building.</p>
                        </div>
                            <hr>

                        <div align="center">
                                <img style="width:480px;" src="../history/fourthpage/8.jpg" alt="">
                        </div>
                            <hr>

                        <div align="center">
                                <img style="width:480px;" src="../history/fourthpage/9.jpg" alt="">
                        </div>
                        <div>
                            <p align="center">September of 2008, the newly constructed, Five-Storey Building was in full operation… opening its doors ever wider. At present, BGHMC is a tertiary hospital under the National Government.</p>
                        </div>
                            <hr>
                    </div>
                </div>
                <div align="center">
                    <button class="btn btn-primary" onclick="page1()">1</button>
                    <button class="btn btn-primary" onclick="page2()">2</button>
                    <button class="btn btn-primary" onclick="page3()">3</button>
                    <button class="btn btn-primary" onclick="page4()">4</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
