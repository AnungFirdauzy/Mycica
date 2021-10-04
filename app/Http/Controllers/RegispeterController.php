<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AkunPeternak;
use Illuminate\Support\Facades\Hash;

class RegispeterController extends Controller
{
    public function index() {
        return view('registerPeternak');
    }

    public function addAcount(Request $request) 
    {
        $raw_data = $request->validate([
            'company'       => 'required|max:255',
            'ownerName'     => 'required|max:255',
            'nik'           => 'unique:akun_peternaks,nik|required|numeric',
            'npwp'          => 'unique:akun_peternaks,npwp|required|max:255',
            'phone'         => 'unique:akun_peternaks,phone|required|numeric',
            'email'         => 'unique:akun_peternaks,email|required|email',
            'pass'          => 'required|max:255',
            'repass'        => 'required|max:255',
        ]);

        $raw_data['pass'] = Hash::make($raw_data['pass']);

        AkunPeternak::create($raw_data);

        $request->session()->flash('success', 'Registrasi BERHASIL, Silahkan login untuk melanjutkan !');

        return redirect('/login');
    }
}
