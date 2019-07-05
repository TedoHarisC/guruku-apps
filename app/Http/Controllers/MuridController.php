<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\BukaKelas;
use DB;
use Illuminate\Http\Request;
use Indonesia;

use Carbon\Carbon;
use Image;
use File;

class MuridController extends Controller
{
    protected $request;

    public function __construct(Request $request){   
        $this->request = $request;
    }
    //
    public function index()
    {
        // return view('admin.layouts.master');
        return view("landing");
        // return "murid";
    }

    public function cariguru()
    {
        $kelas = BukaKelas::all();

        $jadwals = DB::table('jadwals')
        ->join('buka_kelas', 'jadwals.bukakelas_id', '=', 'buka_kelas.id')
        ->get();

        return view("murid.cariguru")->with('kelas',$kelas)->with('jadwals',$jadwals);
        
    }

    public function profile()
    {
        $user_id = Auth::id();

        $murid = DB::table('murids')
        ->join('users', 'murids.user_id', '=', 'users.id')
        //->orderBy('carts.created_at', 'desc')
        ->where('users.id', '=', $user_id)
        ->get();    

        // dd($murid);
        
        return view('murid.profile')->with('murid',$murid);

        // return view("murid.profile");
    }

    public function detailguru()
    {
        return view('murid.detailGuru');
    }

    public function checkout()
    {
        $provinces = Indonesia::allProvinces();
        return(view('murid/detailPesanGuru')->with('provinces',$provinces));
    }

    public function dashboard()
    {
        return view('murid.dashboard');
    }

    public function detail()
    {
        return view('murid.detailPesan');
    }

    public function city()
    {
        $data = $this->request->idprov;
        $cities = Indonesia::findProvince($data, ['cities']);
        $test = "";

        foreach($cities['cities'] as $city){
            $test .= "<option value='".$city['id']."'>".$city['name']."</option>";
        }
    
        return $test;
    }

    public function kecamatan()
    {
        $data = $this->request->idcity;
        $kecamatans = Indonesia::findCity($data, ['districts']);
        $test = "";

        foreach($kecamatans['districts'] as $kecamatan){
            $test .= "<option value='".$kecamatan['id']."'>".$kecamatan['name']."</option>";
        }
    
        return $test;
    }
    
}
