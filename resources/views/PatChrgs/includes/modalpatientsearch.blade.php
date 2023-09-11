{{-- MODAL --}}
<div class="modal fade" id="searchpatientmodal" tabindex="-1" role="dialog" aria-labelledby="searchpatientmodalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="searchpatientmodalTitle">Search Patient</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="col-sm-6">
                <label for="hospnumber">HOSP NUMBER</label>
                <input type="text" id="hospnumber" name="hospnumber" class="form-control">
                <label for="patlast">LAST NAME:</label>
                <input type="text" id="patlast" name="patlast" class="form-control">
                <label for="patfirst">FIRST NAME:</label>
                <input type="text" id="patfirst" name="patfirst" class="form-control">
                <label for="patmiddle">MIDDLE NAME:</label>
                <input type="text" id="patmiddle" name="patmiddle" class="form-control">
                <button class="btn btn-info" style="margin-top: 5px" onclick="genpatlist()">Retrieve</button>
                </div>
                <div class="col-sm-6" style="height: 300px; overflow: auto;">
                    <table class="table table-bordered" style="width: 100%" id="enctrtable">
                    <thead class="thead-dark">
                        <tr style="color:white" bgcolor="black">
                        <th style="width: 20%">
                            DATE/TIME
                        </th>
                        <th style="width: 20%">
                            TYPE
                        </th>
                        <th style="width: 60%">
                            FINAL DIAGNOSIS
                        </th>
                        </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                    </table>
                </div>
                <div class="col-sm-12 mt-2" style="height: 300px; overflow: auto;">
                <table class="table table-striped" style="width: 100%;" id="patlistTable">
                    <thead>
                        <tr style="color:white" bgcolor="black">
                            <th>
                                HOSP NUMBER
                            </th>
                            <th>
                                LAST NAME
                            </th>
                            <th>
                                FIRST NAME
                            </th>
                            <th>
                                MIDDLE NAME
                            </th>
                            <th>
                                BIRTH DATE
                            </th>
                            <th>
                                BIRTHPLACE
                            </th>
                            <th>
                                SEX
                            </th>
                        </tr>
                    </thead>
                    <tbody>
    
                    </tbody>
                </table>
            </div>
        </div>
        <div class="modal-footer">
        </div>
        </div>
    </div>
</div>