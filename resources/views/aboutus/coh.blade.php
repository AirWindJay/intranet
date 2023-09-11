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
                <div class="card-header" style="background-color:#33F3FF; font-size:25px;">Chief Of Hospital</div>
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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
