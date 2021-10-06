<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DashController extends Controller
{
    public function index($id) {
    }

    public function authenticate(Request $request) 
    {
        $credentials = $request->validate([
            'email'     => 'required|email',
            'pass'      => 'required',
        ]);

        $users_investor = DB::table('akun_investors')
                            ->select('email','pass','id','nama')
                            ->where('email',$credentials['email'])
                            ->get();
                            
        $users_peternak = DB::table('akun_peternaks')
                            ->select('email','pass','id','ownername')
                            ->where('email',$credentials['email'])
                            ->get();

        foreach ($users_investor as $user) {
            if($user->email == $credentials['email']) {
                if (Hash::check($credentials['pass'], $user->pass)) {
                    $id=$user->id;
                    $name=$user->nama;
                    return view('dashinvest',[
                        "id" => $id,
                        "name" => $name
                    ]);
                }
            }
        }
        foreach ($users_peternak as $user) {
            if($user->email == $credentials['email']) {
                if (Hash::check($credentials['pass'], $user->pass)) {
                    $id=$user->id;
                    $name=$user->ownername;
                    return view('dashpeter',[
                        "id" => $id,
                        "name" => $name
                    ]);
                }
            }
        }
    

        return back()->with('loginError', 'Login Gagal!');
    }
}

