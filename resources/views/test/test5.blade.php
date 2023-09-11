@extends('layouts.app')

@section('content')
    <form id="form1" method="post" action="/test5save">
        @csrf
        <div>
            <div class="tools">
                <a href="#colors_sketch" data-tool="marker">Marker</a> <a href="#colors_sketch" data-tool="eraser">
                    Eraser</a>
            </div>
            <br />
            <canvas id="colors_sketch" width="1820" height="500pxs">
            </canvas>
            <br />
            <br />
            <input type="text" ID="txtImageName" Width="150px" Height="30px" name="test" Placeholder="Enter Your Image Name">
            
            <hr />
            <fieldset ID="ImageVal" runat="server" />
            <br />
            <gridview ID="GvImage" runat="server">
                <div>
                    <asp:ImageField DataImageUrlField="FileName" HeaderText="Image" ControlStyle-Height="50"
                        ControlStyle-Width="50" />
                </div>
            </gridview>
        </div>
        <div>
            <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
            <script src="https://cdn.rawgit.com/mobomo/sketch.js/master/lib/sketch.min.js" type="text/javascript"></script>
            <script type="text/javascript">
                $(function () {
                    $('#colors_sketch').sketch();
                    $(".tools a").eq(0).attr("style", "color:#000");
                    $(".tools a").click(function () {
                        $(".tools a").removeAttr("style");
                        $(this).attr("style", "color:#000");
                    });
                    $("#btnSave").bind("click", function () {                
                        var base64 = $('#colors_sketch')[0].toDataURL();
                        console.log(base64);
                    });
                });
            </script>
        </div>
    </form>
    <button ID="btnSave" class="btnSuccess">Save Image</button>
@endsection