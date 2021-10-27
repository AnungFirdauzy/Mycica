<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataBurung;
use Illuminate\Support\Facades\DB;

class KatalogInvestor extends Controller
{
    public function index($id){
        $data_investor = DB::table('akun_investors')->select('*')->where('id',$id)->get();
        foreach ($data_investor as $data) {
            $name = $data->nama;
        }
        
        $raw_data = DB::table('data_burungs')->select('*')->where('status','tersedia')->get();
        return view('kataloginvestor',['burung'=>$raw_data,'id'=>$id,'name'=>$name]);

    }
}
