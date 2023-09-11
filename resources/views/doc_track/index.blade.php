@extends('layouts.app')

@section('content')

    <a href="/home" class="btn btn-danger">Go Back</a>
    <h1>DOCUMENT TRACKING<sup>List Of Related Documents</sup></h1>
    <table class="table-bordered" style="width: 100%">
        <thead>
            <tr>
                <th style="width: 10%">
                    ACTION
                </th>
                <th>
                    PURCHASE REQUEST ID
                </th>
                <th>
                    SUPPLIER
                </th>
                <th>
                    MODE
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($docs as $doc)
                <tr>
                    {{-- <td align="center">
                        <a href="#" class="btnSelect" data-id="{{ $doc->purchase_request_id }}"><button class="btn btn-info mb-2">TRACKING</button></a>
                        <a href="#" class="btnSelect2" data-id="{{ $doc->purchase_request_id }}"><button class="btn btn-success">SHOW ITEMS</button></a>
                    </td> --}}
                    
                    <td>
                        <a href="#" class="btnSelect" data-id="{{ $doc->purchase_request_id }}"><button class="btn btn-info mb-2">TRACKING</button></a>
                    </td>

                    <td>
                        {{$doc->purchase_request_id}}
                    </td>
                    <td>
                        {{$doc->supplier_name}}
                    </td>
                    <td>
                        {{$doc->mode_desc}}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


    <div id="doctrackModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Document Tracking </h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body" id="refresh">
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('style')
<style>
    .contprogress {
    margin: 0px auto; 
    }
    .progressbar {
    margin: 0;
    padding-bottom: 200px;
    counter-reset: step;
    }
    .progressbar li {
    list-style-type: none;
    width: 25%;
    float: left;
    font-size: 15px;
    position: relative;
    text-align: center;
    text-transform: uppercase;
    color: #7d7d7d;
    }
    .progressbar li:before {
    width: 40px;
    height: 40px;
    content: "";
    line-height: 40px;
    border: 2px solid #7d7d7d;
    display: block;
    text-align: center;
    margin: 0 auto 10px auto;
    border-radius: 50%;
    background-color: white;
    }
    .progressbar li:after {
    width: 100%;
    height: 2px;
    content: '';
    position: absolute;
    background-color: #7d7d7d;
    top: 20px;
    left: -50%;
    z-index: -1;
    }
    .progressbar li:first-child:after {
    content: "DONE";
    }
    .progressbar li.active {
    color: green;
    content: "DONE";
    }
    .progressbar li.active:before {
    border-color: #55b776;
    content: "DONE";
    font-size: 12px;
    background-color:black;
    }
    .progressbar li.active + li:after {
    background-color: #55b776;
    content: "DONE";
    }
</style>
@endsection


@section('script')
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(document).on('click', '.btnSelect', function(){
        var id = $(this).attr('data-id');
        
        var template = '';
        $.ajax({
            type: "POST",
            url: '/document_tracking/get',
            data: {id : id},
            dataType: 'json',
            success: function(data)
            {
                if(data != null)
                {
                    $('#refresh').empty();
                    template += '<div class="container contprogress">' +
                                    '<ul class="progressbar">';
                    
                    if(data.div_head_rcv != null)
                    {
                        template += '<li class="active">DIVISION HEAD<br>RECEIVED<br>'+data.div_head_rcv+'</li>';
                    }
                    else
                    {
                        template += '<li>DIVISION HEAD<br>RECEIVED<br></li>';
                    }

                    if(data.div_head_rls != null)
                    {
                        template += '<li class="active">DIVISION HEAD<br>RELEASED<br>'+data.div_head_rls+'</li>';
                    }
                    else
                    {
                        template += '<li>DIVISION HEAD<br>RELEASED<br></li>';
                    }

                    if(data.pmo_rcv != null)
                    {
                        template += '<li class="active">PMO RECEIVED<br>'+data.pmo_rcv+'</li>';
                    }
                    else
                    {
                        template += '<li>PMO RECEIVED<br></li>';
                    }

                    if(data.pmo_rls != null)
                    {
                        template += '<li class="active">PMP RELEASED<br>'+data.pmo_rls+'</li>';
                    }
                    else
                    {
                        template += '<li>PMP RELEASED<br></li>';
                    }

                    template += '</ul>' +
                                '<ul class="progressbar">';
                
            
                    if(data.div_head_rcv_2 != null)
                    {
                        template += '<li class="active">DIV HEAD<br>RECEIVED<br>'+data.div_head_rcv_2+'</li>';
                    }
                    else
                    {
                        template += '<li>DIV HEAD<br>RECEIVED<br></li>';
                    }

                    if(data.div_head_rls_2 != null)
                    {
                        template += '<li class="active">DIV HEAD<br>RELEASED<br>'+data.div_head_rls_2+'</li>';
                    }
                    else
                    {
                        template += '<li>DIV HEAD<br>RELEASED<br></li>';
                    }
                    
                    if(data.pmo_rcv_2 != null)
                    {
                        template += '<li class="active">PMO RECEIVED<br>'+data.pmo_rcv_2+'</li>';
                    }
                    else
                    {
                        template += '<li>PMO RECEIVED<br></li>';
                    }
                                
                    if(data.pmo_rls_2 != null)
                    {
                        template += '<li class="active">PMO RELEASED<br>'+data.pmo_rls_2+'</li>';
                    }
                    else
                    {
                        template += '<li>PMO RELEASED<br></li>';
                    }


                    template += '</ul>' +
                                '<ul class="progressbar">';

                    if(data.budget_rcv != null)
                    {
                        template += '<li class="active">BUDGET RECEIVED<br>'+data.budget_rcv+'</li>';
                    }
                    else
                    {
                        template += '<li>BUDGET RECEIVED<br></li>';
                    }         

                    if(data.budget_rls != null)
                    {
                        template += '<li class="active">BUDGET RELEASED<br>'+data.budget_rls+'</li>';
                    }
                    else
                    {
                        template += '<li>BUDGET RELEASED<br></li>';
                    }

                    if(data.accounting_rcv != null)
                    {
                        template += '<li class="active">ACCOUNTING RECEIVED<br>'+data.accounting_rcv+'</li>';
                    }
                    else
                    {
                        template += '<li>ACCOUNTING RECEIVED<br></li>';
                    }
                                
                    if(data.accounting_rls != null)
                    {
                        template += '<li class="active">ACCOUNTING RELEASED<br>'+data.accounting_rls+'</li>';
                    }
                    else
                    {
                        template += '<li>ACCOUNTING RELEASED<br></li>';
                    }

                    template += '</ul>' +
                                '<ul class="progressbar">';

                    if(data.mcc_rcv != null)
                    {
                        template += '<li class="active">MCC RECEIVED<br>'+data.mcc_rcv+'</li>';
                    }
                    else
                    {
                        template += '<li>MCC RECEIVED<br></li>';
                    }

                    if(data.mcc_rls != null)
                    {
                        template += '<li class="active">MCC RELEASED<br>'+data.mcc_rls+'</li>';
                    }
                    else
                    {
                        template += '<li>MCC RELEASED<br></li>';
                    }             
                                
                    if(data.fmo_rcv != null)
                    {
                        template += '<li class="active">FMO RECEIVED<br>'+data.fmo_rcv+'</li>';
                    }
                    else
                    {
                        template += '<li>FMO RECEIVED<br></li>';
                    }                 

                    if(data.fmo_rls != null)
                    {
                        template += '<li class="active">FMO RELEASED<br>'+data.fmo_rls+'</li>';
                    }
                    else
                    {
                        template += '<li>FMO RELEASED<br></li>';
                    } 


                    template += '</ul>' +
                                '<ul class="progressbar">';

                    if(data.pmo_rcv_3 != null)
                    {
                        template += '<li class="active>PMO RECEIVED<br>'+data.pmo_rcv_3+'</li>';
                    }
                    else
                    {
                        template += '<li>PMO RECEIVED<br></li>';
                    }

                    if(data.pmo_rls_3 != null)
                    {
                        template += '<li class="active">PMO RELEASED<br>'+data.pmo_rls_3+'</li>';
                    }
                    else
                    {
                        template += '<li>PMO RELEASED<br></li>';
                    }

                    if(data.mmo_rcv != null)
                    {
                        template += '<li class="active>MMO RECEIVED<br>'+data.mmo_rcv+'</li>';
                    }
                    else
                    {
                        template += '<li>MMO RECEIVED<br></li>';
                    }

                    if(data.mmo_rls != null)
                    {
                        template += '<li class="active">MMO RELEASED<br>'+data.mmo_rls+'</li>';
                    }
                    else
                    {
                        template += '<li>MMO RELEASED<br></li>';
                    }                  

                    template += '</ul></div>';

                    $('#refresh').append(template);
                    $('#doctrackModal').modal('show');
                }
            },
        });
    })

    $(document).on('click', '.btnSelect2', function(){
        var id = $(this).attr('data-id');
        
        var template = '';
        $.ajax({
            type: "POST",
            url: '/document_tracking/get/items',
            data: {id : id},
            dataType: 'json',
            success: function(data)
            {
                if(data != null)
                {
                    $('#refresh').empty();

                    $('#refresh').append(template);
                    $('#doctrackModal').modal('show');
                }
            },
        });
    })
</script>
@endsection