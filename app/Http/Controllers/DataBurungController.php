<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\DataBurung;
use Carbon\Carbon;

class DataBurungController extends Controller
{
    public function index($id){
        $data_burung = DB::table('data_burungs')->select('*')->where('status','tersedia')->get();
        $data_owner = DB::table('akun_peternaks')->select('*')->where('id',$id)->get();
        foreach($data_owner as $data_owner) {
            $name = $data_owner->ownerName;
        }
        return view('katalog',['burung'=>$data_burung,'id'=>$id,'name'=>$name]);
        
        
    }

    public function addDataV($id){
        $date = new Carbon('2016-01-23');
        return view('tambahburung',['id'=>$id, 'date' => $date ]);
    }

    public function addDataC($id,Request $req){

        $raw_data = $req -> validate([
            'id_peternak'=> 'required',
            'nama_burung' => 'required|max:255|unique:data_burungs',
            'tanggal_menetas' => 'required|date',
            'tanggal_max_investasi' => 'required',
            'jenis_kelamin' => 'required',
            'berat' => 'required|numeric',
            'riwayat_medis' => 'nullable',
            'foto_burung' => 'nullable',
            'status' => 'required',
        ]);

        $tanggal = $raw_data['tanggal_menetas'];
        $tanggal = date('Y-m-d', strtotime($tanggal . " + 275 day"));
        $raw_data['tanggal_max_investasi'] = $tanggal;

        DataBurung::create($raw_data);
        return $this->index($id);
        

    }

    public function editDataV($id) {
        $date = new Carbon('2016-01-23');
        $data_burung = DB::table('data_burungs')->select('*')->where('id_burung',$id)->get();
        return view('perbaruiburung',['data_burung' => $data_burung, 'id' => $id,'date' => $date]);
    }

    public function editDataC($id, Request $req) {
        $raw_data = $req -> validate([
            'nama_burung' => 'required|max:255',
            'tanggal_menetas' => 'required|date',
            'tanggal_max_investasi' => 'required',
            'jenis_kelamin' => 'required',
            'berat' => 'required|numeric',
            'riwayat_medis' => 'nullable',
            'foto_burung' => 'nullable',
            'status' => 'required',
        ]);

        $tanggal = $raw_data['tanggal_menetas'];
        $tanggal = date('Y-m-d', strtotime($tanggal . " + 275 day"));
        $raw_data['tanggal_max_investasi'] = $tanggal;

        DB::table('data_burungs')
            ->where('id_burung', 1)
            ->update(['nama_burung' => $raw_data['nama_burung'], 
            'tanggal_menetas' => $raw_data['tanggal_menetas'],
            'tanggal_max_investasi' => $raw_data['tanggal_max_investasi'],
            'jenis_kelamin' => $raw_data['jenis_kelamin'],
            'berat' => $raw_data['berat'],
            'riwayat_medis' => $raw_data['riwayat_medis'],
            'status' => $raw_data['status']
            ]);
        return $this->index($id);
    }
}
