<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;
use App\Models\AkunInvestors;
use App\Models\AkunPeternak;
use Illuminate\Support\Facades\DB;

class PFinvestorController extends Controller
{
    protected function index($id) 
    {
        $user_data = DB::table('akun_investors')
                        ->select('*')
                        ->where('id',$id)
                        ->get();
        
        foreach ($user_data as $user) 
        {   
            $id=$user->id;
            $nama=$user->nama;
            $nik=$user->nik;
            $age=$user->age;
            $phone=$user->phone;
            $email=$user->email;
            $job=$user->job;
            $reason=$user->reason;
            $netincome=$user->netincome;
            $income=$user->income;
        }

        return view('profilInvestor',[
            'id'        => $id,
            'nama'      => $nama,
            'nik'       => $nik,
            'age'       => $age,
            'phone'     => $phone,
            'email'     => $email,
            'job'       => $job,
            'reason'    => $reason,
            'netincome' => $netincome,
            'income'    => $income,
        ]);
    }
    
    protected function Vedit($id) {
        $user_data = DB::table('akun_investors')
                        ->select('*')
                        ->where('id',$id)
                        ->get();
        
        foreach ($user_data as $user) 
        {
            $id=$user->id;
            $nama=$user->nama;
            $nik=$user->nik;
            $age=$user->age;
            $phone=$user->phone;
            $email=$user->email;
            $job=$user->job;
            $reason=$user->reason;
            $netincome=$user->netincome;
            $income=$user->income;
        }

        return view('pfeditInvestor',[
            "id"=>$id,
            'nama'      => $nama,
            'nik'       => $nik,
            'age'       => $age,
            'phone'     => $phone,
            'email'     => $email,
            'job'       => $job,
            'reason'    => $reason,
            'netincome' => $netincome,
            'income'    => $income,
        ]);
    }

    protected function edit(Request $request,$id) {
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
        ]);


        $query =AkunInvestors::find($id);
        $query->nama=$raw_data['nama'];
        $query->nik=$raw_data['nik'];
        $query->age=$raw_data['age'];
        $query->phone=$raw_data['phone'];
        $query->email=$raw_data['email'];
        $query->job=$raw_data['job'];
        $query->reason=$raw_data['reason'];
        $query->income=$raw_data['income'];
        $query->netincome=$raw_data['netincome'];
        $query->save();

        return redirect('/login');
        
    }

    protected function Tedit($id) {
        $user_data = DB::table('akun_peternaks')
                        ->select('*')
                        ->where('id',$id)
                        ->get();
        
        foreach ($user_data as $user) 
        {
            $id         =$user->id;
            $company    =$user->company;
            $nama       =$user->ownerName;
            $nik        =$user->nik;
            $npwp       =$user->npwp;
            $phone      =$user->phone;
            $email      =$user->email;
        }

        return view('profilPeternak',[
            "id"=>$id,
            "company"=>$company,
            "nama"=>$nama,
            "nik"=>$nik,
            "npwp"=>$npwp,
            "phone"=>$phone,
            "email"=>$email,

        ]);
    }
    
    protected function VTedit($id) {
        $user_data = DB::table('akun_peternaks')
                        ->select('*')
                        ->where('id',$id)
                        ->get();
        
        foreach ($user_data as $user) 
        {
            $id         =$user->id;
            $company    =$user->company;
            $nama       =$user->ownerName;
            $nik        =$user->nik;
            $npwp       =$user->npwp;
            $phone      =$user->phone;
            $email      =$user->email;
        }

        return view('pfeditPeternak',[
            "id"=>$id,
            "company"=>$company,
            "nama"=>$nama,
            "nik"=>$nik,
            "npwp"=>$npwp,
            "phone"=>$phone,
            "email"=>$email,

        ]);
    }

    protected function Pedit(Request $request,$id) {
        $raw_data = $request->validate([
            'company'   => 'required|max:255',
            'nama'      => 'required|max:255',
            'nik'       => 'required|min:16|numeric',
            'npwp'       => 'required',
            'phone'     => 'required|numeric',
            'email'     => 'required|Email',
        ]);


        $query =AkunPeternak::find($id);
        $query->company=$raw_data['company'];
        $query->ownerName=$raw_data['nama'];
        $query->nik=$raw_data['nik'];
        $query->npwp=$raw_data['npwp'];
        $query->phone=$raw_data['phone'];
        $query->email=$raw_data['email'];
        $query->save();

        return redirect('/login');
        
    }
}