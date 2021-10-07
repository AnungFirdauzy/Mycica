<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AkunAdmin;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin');
    }

    public function addAdmin(Request $request)
    {
        $raw_data = $request->validate([
            'nama'      => 'required|max:255',
            'email'     => 'required|Email',
            'pass'    => 'required|min:8|max:40',
            'repass'    => 'required|min:8|max:40',
        ]);

        if($raw_data['pass']===$raw_data['repass']){
            $raw_data['pass'] = Hash::make($raw_data['pass']);

            AkunAdmin::create($raw_data);
            
            $request->session()->flash('gagal', 'Password dan konfirmasi password harus sama.');

            return redirect('/login');
        }
        $request->session()->flash('gagal', 'Password dan konfirmasi password harus sama.');

        return redirect('/admin');
    }
}

