<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\App;
use App\Providers\ModalRentServiceProvider;
use DB;

class CarController extends Controller
{

    public function add(){
        return view('dashboard.cars.add');
    }

    public function addCar(Request $request){
        try {
            if ($request->ajax()) {

                $uuid = Str::uuid()->toString();
        
                DB::table('mobil')->insert(
                    array(
                        'uuid' => $uuid,
                        'merek' => $request->brand,
                        'model' => $request->model,
                        'no_plat' => $request->plat,
                        'tarif_sewa' => $request->tarif,
                        'tersedia' => 1,
                    )
                );

                return response()->json(['status' => 200]);

            }
        } catch (\Throwable $th) {
            throw $th;
            return response()->json(['status' => 500, 'error' => $th]);
        }
    }

    public function rent(Request $request){
        try {
            if ($request->ajax()) {
                
                $datas = DB::table('mobil')->where('id', $request['id'])->first();

                return response()->json(['status' => 200, 'datas' => $datas]);
            }
        } catch (\Throwable $th) {
            throw $th;
        }
        
    }

    public function rentCar(Request $request){
        try {
            if ($request->ajax()) {
                DB::beginTransaction();
                
			    $id = Auth::User()->id;   

                DB::table('sewa')->insert(
                    array(
                        'id_mobil' => $request->id,
                        'id_username' => $id,
                        'tgl_sewa_start' => \Carbon\Carbon::parse($request->awal)->format("Y-m-d H:i:s"),
                        'tgl_sewa_finish' => \Carbon\Carbon::parse($request->akhir)->format("Y-m-d H:i:s"),
                    )
                );

                DB::table('mobil')
                ->where('id',  $request->id)
                ->update(array(
                    'tersedia' => 0,
                    )
                );

                DB::commit();
                return response()->json(['status' => 200]);
            }
        } catch (\Throwable $th) {
            DB::rollback();
            throw $th;
        }
        
    }

    public function return(){
        return view('dashboard.cars.return');
    }

    public function dataTablesReturn(Request $request){
        if ($request->ajax()) {
            
            $getData = DB::select('SELECT
                b.*,
                a.tgl_sewa_start,
                a.tgl_sewa_finish
            FROM
                sewa a,
                mobil b, 
                users c
            WHERE
                a.id_mobil = b.id
                and a.id_username = c.id
                and c.id = 1');
            
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
}
