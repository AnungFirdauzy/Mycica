<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpKernel\Event\ViewEvent;

class DataViewController extends Controller
{
    protected function dataInvestor($id) {
        
        $data_investor = DB::table('akun_investors')->select()->get();
        return view('datainvestor',['data'=>$data_investor]);
        
    }

    protected function dataInvestordetail($id) {
        
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

        return view('datainvestordetail',[
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
    protected function datapeternak($id) {
        
        $data_peternak = DB::table('akun_peternaks')->select()->get();
        return view('datapeternak',['data'=>$data_peternak]);
        
    }

    protected function datapeternakdetail($id) {
        
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

        return view('datapeternakdetail',[
            "id"=>$id,
            "company"=>$company,
            "nama"=>$nama,
            "nik"=>$nik,
            "npwp"=>$npwp,
            "phone"=>$phone,
            "email"=>$email,

        ]);
        
    }

    
}
