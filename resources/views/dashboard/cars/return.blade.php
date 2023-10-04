@extends('global-layouts.templates.dashboard')

@section('body')
    <div class="page-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header pb-0">
                          <h5>Return Car</span>
                        </div>
                        <div class="card-body">
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
            url: '{{ route('car.datatables-return') }}',
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
</script>
@endsection