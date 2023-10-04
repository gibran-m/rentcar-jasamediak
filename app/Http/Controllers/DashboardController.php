<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use DataTables;

class DashboardController extends Controller
{
    public function index(){
        return view('dashboard.index');
    }

    public function dataTables(Request $request){
        if ($request->ajax()) {
            
            $getData = DB::table('mobil')->get();
            
            if($getData == null){
                return DataTables::of($getData)
                ->toJson();
            }

            return DataTables::of($getData)
            ->addIndexColumn()
            ->editColumn('tarif_sewa', function ($getData) {
                return  '<td> Rp '.number_format($getData->tarif_sewa, 2, ',', '.').'</td>';
            })
            ->editColumn('tersedia', function ($getData) {
                return ($getData->tersedia) ?  '<td><button type="button" class="btn btn-primary" onclick="openRentModal('.$getData->id.')">Detail</button></td>' : '<td><i class="bi bi-check-circle-fill text-success"></i> Loan</td>';

            })
            ->rawColumns(['tarif_sewa','tersedia'])
            ->toJson();
        }
    }

    public function load()
    {
        // Trigger the boot method of the service provider
        app()->register(DashboardServiceProvider::class);

        // Response to the AJAX request (optional)
        return response()->json(['message' => 'Provider boot method triggered successfully']);
    }
}
