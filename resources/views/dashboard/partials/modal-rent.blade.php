<div class="modal fade" id="rentModal" tabindex="-1" role="dialog" aria-labelledby="rentModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content p-3">
            <div class="modal-header" style="border-bottom: none">
                <h5 class="modal-title"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <style>
                /* Add spacing to all cells in the table */
                table {
                    border-collapse: collapse;
                    width: 100%;
                }
        
                table, th, td {
                    padding: 10px; /* Adjust the padding as needed */
                }
        
                /* Add spacing around the table itself */
                .table-container {
                    margin: 20px; /* Adjust the margin as needed */
                }
            </style>
            <div class="modal-body">
                <div class="row">
                    <table>
                        <tr>
                            <th>Brand</th>
                            <th>Merk</th>
                            <th>Plat Number</th>
                            <th>Rental Cost</th>
                        </tr>
                        <tr>
                            <td id="id" hidden></td>
                            <td id="brand"></td>
                            <td id="model"></td>
                            <td id="plat"></td>
                            <td id="cost"></td>
                        </tr>
                    </table>
                </div>
                <div class="row mt-3">
                    <form  id="rentCarForm" class="needs-validation" novalidate="">
                        <div class="row">
                            <div class="col">
                                <label class="form-label text-dark" for="startDate"> From</label>
                                <div class="input-group">
                                    <input class="datepicker-here form-control digits" id="startDate" name="startDate" type="text" data-language="en" value="{{ old('startDate') ?? $datas['opendate'] ?? ''  }}" placeholder="choose date">
                                    <div class="invalid-feedback">required</div> 
                                </div>
                            </div>
                            <div class="col">
                                <label class="form-label text-dark" for="finishDate"> Unitl</label>
                                <div class="input-group">
                                    <input class="datepicker-here form-control digits" id="finishDate" name="finishDate" type="text" data-language="en" value="{{ old('finishDate') ?? $datas['opendate'] ?? ''  }}" placeholder="choose date">
                                    <div class="invalid-feedback">required</div> 
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="row mt-3 text-end">
                    <div id="rentButton" class="form-group">
                        <button class="btn btn-primary btn-block" type="button" onclick="rentCar()">Rent</button>
                    </div>
                    <div id="spinner" class="form-group text-center" hidden>
                        <div  class="row spinner-border p-0 mb-0" role="status">
                            <span class="visually-hidden p-0 mb-0">Loading...</span>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</div>