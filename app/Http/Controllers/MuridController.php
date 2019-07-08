<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\BukaKelas;
use App\User;
use App\Review;
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
        $jadwals = DB::table('jadwals')
        ->join('buka_kelas', 'jadwals.bukakelas_id', '=', 'buka_kelas.id')
        ->get();

        $list = DB::table('buka_kelas')
        ->select('buka_kelas.id','tingkat_pendidikan','mata_pelajaran','biaya','id_user_guru','name')
        ->join('users', 'buka_kelas.id_user_guru', '=', 'users.id')
        ->get();

        // dd($list);
        return view("murid.cariguru")->with('list',$list)->with('jadwals',$jadwals);
        
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

    public function detailguru($id)
    {
        // retrieve data buka kelas and guru
        $bukakelas = DB::table('buka_kelas')
        ->select('buka_kelas.id','tingkat_pendidikan','mata_pelajaran','biaya','id_user_guru','name')
        ->join('users', 'buka_kelas.id_user_guru', '=', 'users.id')
        ->where('buka_kelas.id',$id)
        ->first();

        // retrieve data review
        // $review = Review::where('guru_id', '=', $bukakelas->id_user_guru)->get();
        $review = DB::table('reviews')
        ->join('users', 'reviews.guru_id', '=', 'users.id')
        ->get();

        //count review
        $count = $review->count();

        return view('murid.detailGuru')->with('bukakelas',$bukakelas)->with('review',$review)->with('count',$count);
    }

    public function checkout(Request $request)
    {

        $mata_pelajaran = $request -> mata_pelajaran;
        $provinces = Indonesia::allProvinces();

        return(view('murid/detailPesanGuru')->with('provinces',$provinces)->with('mata_pelajaran',$mata_pelajaran));
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
