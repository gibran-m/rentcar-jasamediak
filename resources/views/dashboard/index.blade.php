@extends('global-layouts.templates.dashboard')

@section('body')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-6">
                      <h3>Dashboard</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid general-widget">
            <div class="row">
                <div class="col">
                    <div class="card o-hidden border-0" style="cursor: pointer" onclick="addPage()">
                      <div class="bg-primary b-r-4 card-body">
                        <div class="media static-top-widget">
                          <div class="align-self-center text-center"><i data-feather="plus-circle"></i></div>
                          <div class="media-body">
                            <h4>Add Car</h4><i class="icon-bg" data-feather="award"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card o-hidden border-0" style="cursor: pointer">
                      <div class="bg-secondary b-r-4 card-body">
                        <div class="media static-top-widget">
                          <div class="align-self-center"><i data-feather="download"></i></div>
                          <div class="media-body">
                            <h4>Rent Car</h4><i class="icon-bg" data-feather="shopping-bag"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card o-hidden border-0" style="cursor: pointer" onclick="returnPage()">
                      <div class="bg-primary b-r-4 card-body">
                        <div class="media static-top-widget">
                          <div class="align-self-center text-center"><i data-feather="share"></i></div>
                          <div class="media-body">
                            <h4>Return Car</h4><i class="icon-bg" data-feather="percent"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
            <div class="row">
                <div class="col-sm-8">
                    <div class="card">
                        <div class="card-header">
                          <h5>Car List</h5>
                        </div>
                        <div class="table-responsive p-4">
                          <table class="table datatables row-border" id="carsTable">
                            <thead class="table-light text-nowrap">
                                <tr>
                                  <th scope="col">No</th>
                                  <th scope="col">Brand</i></a></th>
                                  <th scope="col">Model</th>
                                  <th scope="col">Plat Number</th>
                                  <th scope="col">Rental Cost (Day)</th>
                                  <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                            </tbody>
                          </table>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                          <div class="user-status table-responsive">
                            <table class="table table-bordernone">
                              <thead>
                                <tr>
                                  <th scope="col">Car Availability Status</th>
                                  <th scope="col"></th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                    <td class="f-w-600">Available</td>
                                    <td class="mb-0 counter">{{ $tersedia ?? 0 }}</td>
                                </tr>
                                <tr>
                                    <td class="f-w-600">Loaned</td>
                                    <td class="mb-0 counter">{{ $terpinjam ?? 0 }}</td>
                                </tr>
                                <tr>
                                    <td class="f-w-600"><b>Total</b></td>
                                    <td class="mb-0 counter">{{ ($tersedia + $terpinjam) ?? 0 }}</td>
                                </tr>
                              </tbody>
                            </table>
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
  $(document).ready(function() {
    loadData();

  });

  function loadData(){
        $('#carsTable').DataTable({
        destroy: true,
        processing: true,
        serverSide: true,
        searching: true, 
        paging: true, 
        info: true,
        ajax: {
            url: '{{ route('car.datatables') }}',
            method: 'GET',
        },
        columns: [
            { data: 'DT_RowIndex', name: 'DT_RowIndex' },
            { data: 'merek', name: 'merek'},
            { data: 'model', name: 'model'},
            { data: 'no_plat', name: 'no_plat'},
            { data: 'tarif_sewa', name: 'tarif_sewa'},
            { data: 'tersedia', name: 'tersedia'},
        ],
        columnDefs: [
          { className: 'text-center', targets: [-1] }
        ],
        });
  }

  function addPage(){
    window.location.href = "{{ route('car.add') }}"
  }

  function openRentModal(id){
    console.log(id);
    const csrf_token = '{{ csrf_token() }}';

    var data = {
        _token : csrf_token,
        id : id,
    };
    $.ajax({
        url: '{{ route('car.rent') }}',
        method: 'POST',
        data: data,
        success: function(response) {
        console.log(response);
            if(response.status == 200 ){

              document.getElementById('id').innerHTML = response.datas.id;
              document.getElementById('brand').innerHTML = response.datas.merek;
              document.getElementById('model').innerHTML = response.datas.model;
              document.getElementById('plat').innerHTML = response.datas.no_plat;
              document.getElementById('cost').innerHTML = 'Rp ' + response.datas.tarif_sewa.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,');
              
              $('#rentModal').modal('show');
               
            }else{
              $('#errorGlobalModal').modal('show');
                
            }

        },
        error: function(xhr, status) {
            console.log(xhr, status);
            // alert("oops, something went wrong please try again later")
            $('#errorGlobalModal').modal('show');
        }
    });
  }

  function rentCar(){

    const csrf_token = '{{ csrf_token() }}';

    const formData = new FormData($('#rentCarForm')[0]);

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

      document.getElementById('rentButton').setAttribute('hidden','true');
      document.getElementById('spinner').removeAttribute('hidden');

      var data = {
          _token : csrf_token,
          id : document.getElementById('id').innerHTML,
          awal : document.getElementById('startDate').value,
          akhir : document.getElementById('finishDate').value,
      };

      $.ajax({
          url: '{{ route('car.rent-car') }}',
          method: 'POST',
          data: data,
          success: function(response) {
            console.log(response);
            if(response.status == 200 ){
              loadData();
              loadStatus();

              $('#rentModal').modal('hide');
              
              successNotif();

              document.getElementById('spinner').setAttribute('hidden','true');
              document.getElementById('rentButton').removeAttribute('hidden');
                
            }else{
              $('#rentModal').modal('hide');
              unSuccessNotif();
              document.getElementById('spinner').setAttribute('hidden','true');
              document.getElementById('rentButton').removeAttribute('hidden');
                
            }

          },
          error: function(xhr, status) {
            console.log(xhr, status);
            // alert("oops, something went wrong please try again later")
            $('#rentModal').modal('hide');
            document.getElementById('spinner').setAttribute('hidden','true');
            document.getElementById('rentButton').removeAttribute('hidden');
            $('#errorGlobalModal').modal('show');
          }
      });
    }


  }

  function successNotif(){
    $.notify({
        title:'Success',
        message:'Enjoy your ride'
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

  function loadStatus(){
    $.ajax({
      url: '{{ route('load') }}',
      method: 'GET',
      success: function(response) {
        console.log(response);
      },
      error: function(xhr, status) {
        console.log(xhr, status);
      }
    });
  }

  function returnPage(){
    window.location.href = "{{ route('car.return') }}"
  }
</script>
@endsection