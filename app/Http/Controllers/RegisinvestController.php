<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AkunInvestors;
use Illuminate\Support\Facades\Hash;

class RegisinvestController extends Controller
{
    public function index()
    {
        return view('registerInvestor');
    }

    public function addAcount(Request $request)
    {
        $raw_data = $request->validate([
            'nama'      => 'required|max:255',
            'nik'       => 'required|min:16|numeric',
            'age'       => 'required|numeric',
            'phone'     => 'required|numeric',
            'email'     => 'required|Email',
            'job'       => 'required|max:50',
            'reason'    => 'max:255',
            'income'    => 'numeric',
            'netincome' => 'numeric',
            'pass'      => 'required|min:8|max:40',
            'repass'    => 'required|min:8|max:40',
        ]);

        $raw_data['pass'] = Hash::make($raw_data['pass']);

        AkunInvestors::create($raw_data);
        
        $request->session()->flash('success', 'Registrasi BERHASIL, Silahkan login untuk melanjutkan !');

        return redirect('/login');
    }
}
