$(function (){
    
    // medsedit();
});


$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$(document).on('click', '.btnSelect', function(){
    var enccode = $(this).attr('data-enccode');
    
    var template = '';
    var index = 0;
    $.ajax({
        type: "POST",
        url: '/pharmacy/enccode',
        data: {enccode : enccode},
        dataType: 'json',
        success: function(data)
        {
            console.log(enccode);
            if(data != null)
            {
                $('#medTable tbody').empty();
                data.forEach(element =>
                {
                    template += '<tr>' +
                                    '<td>'+ element.gendesc +'</td>' +
                                    '<td>'+ element.qty +'</td>' +
                                    '<td>'+ element.str +'</td>' +
                                    '<td> <input id="freq['+index+']" name="freq['+index+']" type="text" value="'+ element.freq +'" required>'+
                                    '<input id="dmdcomb['+index+']" name="dmdcomb['+index+']" type="text" value="'+ element.dmdcomb +'" hidden>' +
                                    '<input id="dmdctr['+index+']" name="dmdctr['+index+']" type="number" value="'+ element.dmdctr +'" hidden>' +
                                    '<input id="enccode[0]" name="enccode[0]" type="text" value="'+ enccode +'" hidden></td>' +
                                    '<td>'+ element.route +'</td>' +
                                    '<td>'+ element.totalCost +'</td>' +
                                '</tr>';
                    index ++;
                });
                $('#medTable tbody').append(template);
                $('#medsModal').modal('show');
            }
        },
      });
})
// function medsedit(){
//     $('#medsForm').on('submit',function(e)
//     {   
//         e.preventDefault();

//         var data = $(this).serialize();
//         var template = '';
//         $.ajax({
//             type: "POST",
//             url: '/pharmacy/enccode',
//             data: data,
//             dataType: 'json',
//             success: function(data){
//                 console.log(data);

//                 if(data != null)
//                 {
//                     $('#medTable tbody').empty();
//                     data.forEach(element => {
//                         template += '<tr>' +
//                                         '<td>'+ element.dmdcomb +'</td>' +
//                                         '<td>'+ element.dmdctr +'</td>' +
//                                         '<td>'+ element.gendesc +'</td>' +
//                                         '<td>'+ element.qty +'</td>' +
//                                         '<td>'+ element.str +'</td>' +
//                                         '<td>'+ element.freq +'</td>' +
//                                         '<td>'+ element.route +'</td>' +
//                                         '<td>'+ element.totalCost +'</td>' +
//                                     '</tr>';
//                     });
//                     $('#medTable tbody').append(template);
//                     $('#medsModal').modal('show');
//                 }
                
                
//             },
//           });
//     });
// }