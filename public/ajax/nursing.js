function myFunction()
{
    var months    = ['January','February','March','April','May','June','July','August','September','October','November','December'];
    var now       = new Date();
    var thisMonth = months[now.getMonth()]; // getMonth method returns the month of the date (0-January :: 11-December)
    var output = document.getElementById('currentmonth');
    console.log(thisMonth);
    myFunction1();

    if(output.textContent !== undefined) {
        output.textContent = thisMonth;
    }
    else {
        output.innerText = thisMonth;
    }

}


function myFunction1()
{
    var d = new Date();
    var out = d.getMonth()+1;
    var out2 = d.getFullYear();
    var out3 = getDaysInMonth(out, out2)
    document.getElementById("currentmonth").innerHTML = out3;
}
    var getDaysInMonth = function(month,year) {
    return new Date(year, month, 0).getDate();
};


function goBack()
{
    window.history.back();
}

function dashboardselectmain()
{
    var x = document.getElementById("dateselect").value;
    var url = "http://192.168.6.179/nurse/dashboard/";
    window.location = url + x;
}

function dashboardselect()
{
    var x = document.getElementById("monitoringselect").value;
    var url = "http://192.168.6.179/nurse/monitoring/";
    window.location = url + x;
}

// $(document).ready(function(){

//     fetch_customer_data();
   
//     function fetch_customer_data(query = '')
//     {
//      $.ajax({
//       url:"/search/ward",
//       method:'GET',
//       data:{query:query},
//       dataType:'json',
//       success:function(data)
//       {
//        $('tbody').html(data.table_data);
//        $('#total_records').text(data.total_data);
//       }
//      })
//     }
   
//     $(document).on('keyup', '#search', function(){
//      var query = $(this).val();
//      fetch_customer_data(query);
//     });
//    });