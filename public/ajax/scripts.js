
setInterval(function(){
    getdata();
    playaudio();
}, 30000)

setInterval(function(){
    location.reload();
}, 50000)

function getdata(){
    $.ajax({
        type: 'GET',
        url: '/servicerequest/home', 
        success:function(data){
        $('#resetthis').empty().html(data);
        console.log('getdata');
        }
    });
}
function playaudio(){
    var x = document.getElementById("audio"); 
    $.ajax({
        type: 'GET',
        url:'/playaudio',
        success: function(data){
            if (data > 0)
            {
                x.play();
                stopaudio();
            }
        },
        error: function(data){},
    });
}
function stopaudio(){
    $.ajax({
        type: 'GET',
        url: '/stopaudio',
        success: function(data){
        console.log('stopaudio');
        }
    });
}
