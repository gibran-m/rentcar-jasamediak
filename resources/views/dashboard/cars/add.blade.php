@extends('global-layouts.templates.dashboard')

@section('body')
    <div class="page-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header pb-0">
                          <h5>Add Car</span>
                        </div>
                        <div class="card-body">
                          <form  id="addCarForm" class="needs-validation" novalidate="">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label" for="brand">Brand</label>
                                <input class="form-control" id="brand" name="brand" type="text" value="{{ $data['brand'] ?? '' }}">
                                <div class="invalid-feedback">required</div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="model">Model</label>
                                <input class="form-control" id="model" name="model" type="text" value="{{ $data['model'] ?? '' }}">
                                <div class="invalid-feedback">required</div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="plat">Plat Number</label>
                                <input class="form-control" id="plat" name="plat" type="text" value="{{ $data['no_plat'] ?? '' }}">
                                <div class="invalid-feedback">required</div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="tarif">Rental Rate (Day)</label>
                                <input class="form-control" id="tarif" name="tarif" type="number" value="{{ $data['tarif_sewa'] ?? '' }}">
                                <div class="invalid-feedback">required</div>
                            </div>
                          </form>
                        </div>
                        <div id="createCarButton" class="card-footer">
                          <button class="btn btn-primary" onclick="addCarValidation()">Submit</button>
                          <a type="button" class="btn btn-secondary" href="{{ route('dashboard') }}">Dashboard</a>
                        </div>
                        <div id="spinner" class="form-group text-center" hidden>
                            <div  class="row spinner-border p-0 mb-0" role="status">
                                <span class="visually-hidden p-0 mb-0">Loading...</span>
                            </div>
                        </div>  
                        <div id="success" class="form-group text-center" hidden>
                            <div  class="row spinner-border p-0 mb-0" role="status">
                                <span class="visually-hidden p-0 mb-0">Loading...</span>
                            </div>
                        </div> 
                        <div id="error" class="form-group text-center" hidden>
                            <div  class="row spinner-border p-0 mb-0" role="status">
                                <span class="visually-hidden p-0 mb-0">Loading...</span>
                            </div>
                        </div>   
                      </div>

                </div>
            </div>
        </div>
    </div>
    

@endsection

@section('script')
<script>
    function addCarValidation(){
        const formData = new FormData($('#addCarForm')[0]);

        // Iterate through form fields
        for (let [fieldName, fieldValue] of formData.entries()) {
            const inputElement = document.querySelector(`[name="${fieldName}"]`);
            inputElement.classList.remove('is-invalid', 'is-valid');

            if (fieldValue.trim() === '') {
                inputElement.classList.add('is-invalid');
            } else {
                inputElement.classList.add('is-valid');
            }

        }

        // Submit the form if all validation passes
        if (!document.querySelector('.is-invalid')) {
            addCar();
        }
    }

    function addCar(){
        document.getElementById('createCarButton').setAttribute('hidden','true');
        document.getElementById('spinner').removeAttribute('hidden');

        var data = {};

        var form = document.getElementById('addCarForm');

        var formElements = form.querySelectorAll('input, select');

        formElements.forEach(function(element) {
            data[element.name] = element.value;
        });

        $.ajax({
            url: '{{ route('car.add-car') }}',
            method: 'POST',
            data: data,
            success: function(response) {
            console.log(response);
                if(response.status == 200 ){
                    document.getElementById('spinner').setAttribute('hidden','true');
                    document.getElementById('createCarButton').removeAttribute('hidden');
                    successNotif();
                }else{
                    document.getElementById('spinner').setAttribute('hidden','true');
                    document.getElementById('createCarButton').removeAttribute('hidden');
                    unSuccessNotif();
                }

            },
            error: function(xhr, status) {
                console.log(xhr, status);
                // alert("oops, something went wrong please try again later")
                $('#errorGlobalModal').modal('show');
            }
        });
    }

    function successNotif(){
        $.notify({
            title:'Success',
            message:'Data has been added'
        },
        {
            type:'primary',
            allow_dismiss:false,
            newest_on_top:false ,
            mouse_over:false,
            showProgressbar:false,
            spacing:10,
            timer:2000,
            placement:{
                from:'top',
                align:'left'
            },
            offset:{
                x:30,
                y:30
            },
            delay:1000 ,
            z_index:10000,
            animate:{
                enter:'animated bounce',
                exit:'animated bounce'
            }
        });
    }

    function unSuccessNotif(){
        $.notify({
            title:'Error',
            message:'Something went wrong, please try again later'
        },
        {
            type:'danger',
            allow_dismiss:false,
            newest_on_top:false ,
            mouse_over:false,
            showProgressbar:false,
            spacing:10,
            timer:2000,
            placement:{
                from:'top',
                align:'left'
            },
            offset:{
                x:30,
                y:30
            },
            delay:1000 ,
            z_index:10000,
            animate:{
                enter:'animated bounce',
                exit:'animated bounce'
            }
        });
    }

    $('#errorGlobalModal').on('hidden.bs.modal', function () {
        document.getElementById('spinner').setAttribute('hidden','true');
        document.getElementById('createCarButton').removeAttribute('hidden');
    });
</script>
@endsection