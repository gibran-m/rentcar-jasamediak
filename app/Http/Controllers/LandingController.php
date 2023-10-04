<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use DB;

class LandingController extends Controller
{
    public function index(){
        
        return view('landing.index');
    }

    public function register(Request $request){
        try {
            if ($request->ajax()) {

                $uuid = Str::uuid()->toString();
        
                DB::table('users')->insert(
                    array(
                        'uuid' => $uuid,
                        'nama' => $request->name,
                        'alamat' => $request->address,
                        'no_telepon' => $request->phone,
                        'no_sim' => $request->license,
                        'password' => bcrypt($request->password),
                    )
                );

                return response()->json(['status' => 200]);

            }
        } catch (\Throwable $th) {
            // throw $th;
            return response()->json(['status' => 500, 'error' => $th]);
        }
        
    }

    public function login(Request $request){

        try {
            $credentials = $request->validate([
                'no_telepon' => ['required'],
                'password' => ['required'],
            ]);
    
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
                return response()->json(['status' => 200]);
            }
     
            return response()->json(['status' => 501]);
            
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function logout(Request $request){

        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('index');
        
    }
}
