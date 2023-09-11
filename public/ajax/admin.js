function updatenursing(){
    var r = confirm("Are You Sure?");
    if (r == true) {
        $.ajax({
            type: 'GET',
            url: '/update/nursing', 
        });
        confirm("Are You Sure?");
        location.reload();
    } else {}
}
