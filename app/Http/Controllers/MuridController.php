<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\BukaKelas;
use App\User;
use App\Pesanan;
use App\Review;
use App\Jadwal;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        // retrieve data buka kelas 
        $bukakelas = BukaKelas::where('id', '=', $id)->first();
        // $bukakelas = DB::table('buka_kelas')
        // ->join('jadwals', 'buka_kelas.id', '=', 'jadwals.bukakelas_id')
        // ->where('buka_kelas.id',$id)
        // ->first();

        // retrieve data jadwal
        $jadwals = DB::table('jadwals')
        ->join('buka_kelas', 'jadwals.bukakelas_id', '=', 'buka_kelas.id')
        ->get();
        
        // retrieve guru profiles
        $guru = DB::table('users')
        ->join('gurus', 'users.id', '=','gurus.user_id')
        ->where('users.id', '=', $bukakelas->id_user_guru)
        ->first();

        // retrieve data review
        // $review = Review::where('guru_id', '=', $bukakelas->id_user_guru)->get();
        $review = DB::table('reviews')
        ->join('users', 'reviews.guru_id', '=', 'users.id')
        ->where('users.id',$bukakelas->id_user_guru)
        ->get();

        // count review
        $count = $review->count();

        // dd($guru);

        return view('murid.detailGuru')->with('bukakelas',$bukakelas)->with('guru',$guru)->with('jadwals',$jadwals)->with('review',$review)->with('count',$count);
    }

    public function checkout(Request $request)
    {

        $provinces = Indonesia::allProvinces();

        $bukakelas = DB::table('buka_kelas')
        ->select('buka_kelas.id','foto','mata_pelajaran','biaya','users.name')
        ->join('users', 'buka_kelas.id_user_guru', '=', 'users.id')
        ->join('gurus', 'users.id', '=', 'gurus.user_id')
        ->where('buka_kelas.id',$request->bukakelas_id)
        ->first();

        // dd($bukakelas);
        
        $jadwals = Jadwal::where('bukakelas_id', '=', $request->bukakelas_id)->orderBy('id', 'desc')->get();

        return(view('murid.detailPesanGuru')->with('provinces',$provinces)->with('jadwals',$jadwals)->with('bukakelas',$bukakelas));
    }

    public function dashboard()
    {
        $user_id = Auth::id();
        $murid = DB::table('users')
        ->join('murids', 'users.id', '=','murids.user_id')
        ->where('users.id', '=', $user_id)
        ->first();  

        $pesan = DB::table('pesanans')
        ->select('pesanans.id as id','pesanans.mata_pelajaran','kode_invoice','status','tingkat_pendidikan','biaya','kelas','name','id_user_guru','reviewed')
        ->join('buka_kelas', 'pesanans.buka_kelas_id', '=','buka_kelas.id')
        ->join('users', 'buka_kelas.id_user_guru', '=','users.id')
        ->get();  

        $jadwals = DB::table('jadwals')
        ->join('pesanans', 'jadwals.pesanan_id', '=','pesanans.id')
        ->get();

        $rating = DB::table('reviews')
        ->select('reviews.id','rating','review','pesanan_id','guru_id')
        ->join('users', 'reviews.user_id', '=','users.id')
        ->join('pesanans', 'reviews.pesanan_id', '=','pesanans.id')
        ->get();

        // dd($jadwals);
        // dd($pesan);
  
        return view('murid.dashboard')->with('murid',$murid)->with('pesan',$pesan)->with('jadwals',$jadwals)->with('rating',$rating);
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

    public function rating(Request $request)
    {
        $user_id = Auth::id();

        $rating = new Review;
        $rating -> guru_id = $request -> guru_id;
        $rating -> pesanan_id = $request -> pesanan_id;
        $rating -> user_id = $user_id;
        $rating -> rating = $request -> rating;
        $rating -> review = $request -> review;

            $pesan = Pesanan::find($request->pesanan_id);
            $pesan->reviewed = 1;
            $pesan->save();

        $rating -> save();
    
        return redirect()->route('dashboard');
    }
    
}

